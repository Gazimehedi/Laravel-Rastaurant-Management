<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Setting;
use App\Models\Slider;

class FrontController extends Controller
{
    //
    public function index(){
        $user_id = Auth::id();

        $slider = Slider::all();
        $food = Food::where('food_type',4)->get();
        $breakfast = Food::where('food_type',1)->get();
        $lunch = Food::where('food_type',2)->get();
        $dinner = Food::where('food_type',3)->get();
        $chefs = Chefs::all();
        $cartTotal = Cart::where('user_id',$user_id)->count();
        $setting = Setting::first();
        return view('home',compact('food','chefs','cartTotal','setting','breakfast','lunch','dinner','slider'));
    }
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function redirects(){
        $userType='0';
        if(isset(Auth::user()->user_type)){
            $userType = Auth::user()->user_type;
        }
        $user_id = Auth::id();
        
        $slider = Slider::all();
        $food = Food::where('food_type',4)->get();
        $breakfast = Food::where('food_type',1)->get();
        $lunch = Food::where('food_type',2)->get();
        $dinner = Food::where('food_type',3)->get();
        $chefs = Chefs::all();
        $cartTotal = Cart::where('user_id',$user_id)->count();
        $setting = Setting::first();
        if($userType==1){
            return view('admin.dashboard');
        }
        return view('home',compact('food','chefs','cartTotal','setting','breakfast','lunch','dinner','slider'));
    }
    public function add_to_cart(Request $request,$id)
    {
        if(Auth::id()){
            $user_id = Auth::id();
            
            $food_id = $request->food_id;
            $quantity = $request->quantity;
            $getdata = Cart::where(['user_id'=>$user_id,'food_id'=>$food_id])->get();
            $checkData = count($getdata);
            if($checkData>0){
                $cart_id = $getdata[0]->id;
                $data = Cart::find($cart_id);
                $data->user_id = $user_id;
                $data->food_id = $food_id;
                $data->quantity = $quantity;
                $msg = "Cart updated";
            }else{
                $data = new Cart;
                $data->user_id = $user_id;
                $data->food_id = $food_id;
                $data->quantity = $quantity;
                $msg = "Cart added";
            }
            $data->save();
            return redirect()->back();
        }else{
            return redirext('/login');
        }
    }
    public function cart(){
        $user_id = Auth::id();
        $cartTotal = Cart::where('user_id',$user_id)->count();
        $cart = Cart::where('user_id',$user_id)
        ->join('food','carts.food_id','=','food.id')
        ->select('carts.id','carts.user_id','carts.food_id','carts.quantity','food.title','food.image','food.price')->get();
        return view('cart',compact('cart','cartTotal'));
    }
    public function cart_delete($id){
        $user_id = Auth::id();
        $data = Cart::where(['id'=>$id,'user_id'=>$user_id])->delete();
        return redirect()->back();
    }
    public function manageqty(Request $request){
        $id = $request->id;
        $qty = $request->qty;
        $data = Cart::find($id);
        $data->quantity = $qty;
        $data->save();
        $msg = "Cart updated";
        return response()->json(['msg' => $msg]);
    }
    public function orderproccess(Request $request,$id){
        $foodname = $request->foodname;
        $price = $request->price;
        $quantity = $request->quantity;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        if(Auth::id()==$id){
            foreach($foodname as $key=>$foodname){
                $data = new Order;
                $data->userid = $id;
                $data->name = $name;
                $data->email = $email;
                $data->phone = $phone;
                $data->address = $address;
                $data->foodname = $foodname;
                $data->price = $price[$key];
                $data->quantity = $quantity[$key];
                $data->status = 'pending';
                $data->save();
            }
            Cart::where('user_id',$id)->delete();
            $msg = "Order Complete";
            $request->session()->flash('msg',$msg);
            return redirect(route('thank_you'));
        }else{
            return redirect()->back();
        }
    }
    public function thank_you(){
        $user_id = Auth::id();
        $cartTotal = Cart::where('user_id',$user_id)->count();
        return view('thank_you',compact('cartTotal'));
        if(session()->has('msg')){
            return view('thank_you');
        }else{
            return redirect(route('home'));
        }
        
    }

}
