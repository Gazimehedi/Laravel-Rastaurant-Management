<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chefs;
use File;

class ChefsController extends Controller
{
    //
    public function chefs()
    {
        $data = Chefs::all();
        return view('admin.chefs',compact('data'));
    }
    public function addchefs()
    {
        return view('admin.add_chefs');
    }
    public function addchefs_process(Request $request)
    {
        $image = $request->image;
        $image_name = time().".".$image->getClientOriginalExtension();
        $image->move('media/chefs',$image_name);
        $data = new Chefs;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->image = $image_name;
        $data->save();
        return redirect('admin/chefs');
    }
    public function editchefs($id)
    {
        $data = Chefs::find($id);
        return view('admin.edit_chefs',compact('data'));
    }
    public function updatechefs(Request $request,$id)
    {
        $data = Chefs::find($id);
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        if(isset($request->image)){
            $path = "media/chefs/".$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $image = $request->image;
            $image_name = time().".".$image->getClientOriginalExtension();
            $image->move('media/chefs',$image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect('admin/chefs');
    }
    public function delete($id)
    {
        $data = Chefs::find($id);
        $path = "media/chefs/".$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $data->delete();
        return redirect()->back();
    }
}
