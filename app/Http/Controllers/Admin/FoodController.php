<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use File;

class FoodController extends Controller
{
    //
    public function foodmenu()
    {
        $data = Food::all();
        return view('admin.food_menu',compact('data'));
    }
    public function addfoodmenu()
    {
        return view('admin.add_food_menu');
    }
    public function addfoodmenu_process(Request $request)
    {
        $image = $request->image;
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move('media/food',$image_name);

        $data = new Food;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->image = $image_name;
        $data->description = $request->description;
        $data->food_type = $request->food_type;
        $data->save();
        return redirect('/admin/foodmenu');
    }
    public function editfoodmenu($id)
    {
        $data = Food::find($id);
        return view('admin.edit_food_menu',compact('data'));
    }
    public function updatefoodmenu(Request $request,$id)
    {
        $data = Food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        if(isset($request->image)){
            $path = "media/food/".$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $image = $request->image;
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('media/food',$image_name);
            $data->image = $image_name;
        }
        $data->description = $request->description;
        $data->food_type = $request->food_type;
        $data->save();
        return redirect('/admin/foodmenu');
    }
    public function delete($id)
    {
        $data = Food::find($id);
        $path = 'media/food/'.$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $data->delete();
        return redirect('/admin/foodmenu');
    }
}
