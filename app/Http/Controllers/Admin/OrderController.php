<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function orders()
    {
        $data = Order::all();
        return view('admin.orders',compact('data'));
    }
    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->back();
    }
}
