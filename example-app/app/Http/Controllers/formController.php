<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class formController extends Controller
{
    public function index ()
    {

       $users = DB::select('select *from users');

    //    DB::insert('insert into users (username, email, password) values (?,?,?)',['mishra', 'mishra348@gmail.com','23456']);
    // DB::delete('delete from users where username = ?',['mishra']);
    // DB::update('update users set username = ? where password = ? ', ['shivam', 1234567]);

    //    dd($users);
       return view('DB',['userss' => $users]);
    }

    function showData (Request $request)
    {
        print_r('get method');
        return view ('home');
    }

    function signUp (Request $request)
    {
        print_r('post method');
        // dd($request->all());
        print_r(($request->all()));
        print_r($request->input('name'));
        print_r($request->input('email'));
        print_r($request->input('passsword'));
        print_r($request->has(['name','email']));
        if($request->hasany(['name','email']))   // $request->filled('name'); $request->missing('name');
    {
        print_r($request->input('email'));
    };
        // $request->whenhas('name')function($request){echo"hello"};
        //request->flash();
        //request->flashonly('name','email');
        //request->flashExcept('password');

        //request->old('name');


        return view ('home');

         return "you are signed in";
    }
}
