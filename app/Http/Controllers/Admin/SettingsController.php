<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use File;

class SettingsController extends Controller
{
    //
    public function site_icon(){
        $logo = Setting::first();
        return view('admin.logo',compact('logo'));
    }
    public function logoUpdate(Request $request,$id){
        $data = Setting::find($id);
        if(isset($request->icon)){
            $path = 'media/logo/'.$data->site_icon;
            if(File::exists($path)){
                File::delete($path);
            }
            $icon = $request->icon;
            $icon_name = rand(111111111,999999999).".".$icon->getClientOriginalExtension();
            $icon->move('media/logo',$icon_name);
            $data->site_icon = $icon_name;
        }
        if(isset($request->logo)){
            $path = 'media/logo/'.$data->logo;
            if(File::exists($path)){
                File::delete($path);
            }
            $logo = $request->logo;
            $logo_name = rand(111111111,999999999).".".$logo->getClientOriginalExtension();
            $logo->move('media/logo',$logo_name);
            $data->logo = $logo_name;
        }
        if(isset($request->footer_logo)){
            $path = 'media/logo/'.$data->footer_logo;
            if(File::exists($path)){
                File::delete($path);
            }
            $footer_logo = $request->footer_logo;
            $footer_logo_name = time().".".$footer_logo->getClientOriginalExtension();
            $footer_logo->move('media/logo',$footer_logo_name);
            $data->footer_logo = $footer_logo_name;
        }
        $data->save();
        return redirect()->back();
    }
    public function footerInfo(){
        $data = Setting::first();
        return view('admin.footerInfo',compact('data'));
    }
    public function footerInfoUpdate(Request $request,$id){
        $data = Setting::find($id);
        $data->fb_link = $request->fb_link;
        $data->tw_link = $request->tw_link;
        $data->in_link = $request->in_link;
        $data->ig_link = $request->ig_link;
        $data->footer_info = $request->footer_info;
        $data->save();
        return redirect()->back();
    }
    public function slider(){
        $data = Slider::all();
        return view('admin.slider',compact('data'));
    }
    public function addslider_process(Request $request){
        $data = new Slider;
        $image = $request->image;
        $image_name = rand(111111111,999999999).".".$image->getClientOriginalExtension();
        $image->move('media/slider',$image_name);
        $data->image = $image_name;
        $data->save();
        return redirect()->back();
    }
    public function editslider($id){
        $data = Slider::find($id);
        return view('admin.edit_slider',compact('data'));
    }
    public function updateslider(Request $request,$id){
        $data = Slider::find($id);
        $path = 'media/slider/'.$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $image = $request->image;
        $image_name = rand(111111111,999999999).".".$image->getClientOriginalExtension();
        $image->move('media/slider',$image_name);
        $data->image = $image_name;
        $data->save();
        return redirect()->route('admin.slider');
    }
    public function delete($id){
        $data = Slider::find($id);
        $path = 'media/slider/'.$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $data->delete();
        return redirect()->route('admin.slider');
    }
}
