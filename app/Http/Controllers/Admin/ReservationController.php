<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    //
    public function create(Request $request)
    {
        $data = new Reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guests = $request->guests;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        $msg = "Reservation Successfull";
        return response()->json(['msg' => $msg]);

    }

    public function reservation()
    {
        $data = Reservation::all();
        return view('admin.reservation',compact('data'));
    }
    public function delete($id)
    {
        $data = Reservation::find($id)->delete();
        return redirect()->back();
    }
}
