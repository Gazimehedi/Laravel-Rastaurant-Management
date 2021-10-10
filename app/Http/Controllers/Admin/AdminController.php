<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function users(){
        $data = User::all();
        return view('admin.users', compact('data'));
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
