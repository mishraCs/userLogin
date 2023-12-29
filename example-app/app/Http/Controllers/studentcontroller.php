<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    //
    public function showstudent(Request $request)
    { 
        // $student = student::all();
        // $student = student::Where('password','=',2345);
        // $student = student::firstWhere('city','ayodhya');
        
                // $student = student::firstOrCreate([
                //     ["name"=>'Aakash'],
                //     ["city"=>'ayodhya',"email"=>'aakash@gmail.com', "password"=>2345]
                // ]);
       

        // return view ('DB', ['student'=>$student]);
        // =================== Session store ============================
        // $request->session()->put('name','benipur'); // storing data
        // $name = $request->session()->get('name'); // retreve session data
        // $city = $request->session()->get('city','Ayodhya'); // if data not insert 
        // $allData =  $request-session()->all(); // retreving all data;

        // if($request->session()->exists('name')) // check condition
        // {
        //     dd('yes');
        // }
        // if($request->session()->missing('marks'))
        // {
        //     dd('no');
        // }

        $session = (["name"=>"amit"]);
        $data = session('name');
        dd($data);

        // dd($name);

        // $data = ["name"=>$name, 'city'=>$city];

                return view ('DB',$data);

    }
}
