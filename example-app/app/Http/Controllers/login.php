<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function loginfun (Request $request)
    {
        // $data = $request->input(['name','password']);
        // // // echo $data;
        // $request->session()->put(['name'=>$data,'password'=>$data]);
        // // echo session('name');
        // return redirect('profile');

        $data = $request->input('name');
        // // echo $data;
        $request->session()->put('name',$data);
        // echo session('name');
        return redirect('profile');

        // ====================================== second value=========================
        // $data = $request->input('password');
        // // echo $data;
        // $request->session()->put('password',$data);
        // // echo session('password');
        // return redirect('/profile');

        // return $request->input();
        // return view('login');
    }
}
