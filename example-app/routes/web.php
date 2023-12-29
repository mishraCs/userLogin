<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\formController;
use App\http\controllers\studentcontroller;
use App\http\controllers\login;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/abaout', function () {
//     return view('abaout');
// });

// Route::get('/userLara', function () {
//     return view('userLara');
// });

// Route::post('/home', [formController::class,'formCont' ]);

// Route::group(['middleware' => 'protectedPage'], function () // To only associate page 
// {
//     Route::view('/abaout', 'abaout');
//     Route::view('/userLara','userLara');

// });

// ================= Form Control ===============
Route::get('/home', function () {
    return view('home');
});

Route::post('/home', function () {
    return view('home');
});


Route::get('/home',[formController::class,'showData']);
Route::post('/home',[formController::class,'signUp']);

// ============ Query Builder ======================
Route::get('/student', function () {
    return view('DB');
});

Route::get('/student',[studentcontroller::class,'showstudent']);

// =================== login form =================
Route::get('/login',function ()
{
    if(session()->has('name'))
    {
        return view ('profile');

    } 

    return view ('login');
});

Route::post('/login',[login::class,'loginfun']);
Route::post('/profile',[login::class,'loginfun']);


Route::get('/profile',function ()
{
    if(!session()->has('name'))
    {
        return view ('login');

    }
    return view ('profile');
});

Route::get('/logout',function ()
{
    if (session()->has('password') || session()->has('name'))
    {
        session()->pull('name',null);

        session()->pull('password',null);
    }
    return redirect('/login');

});

// Route::get('/login',function ()
// {
//     if (session()->has('name'))
//     {
//         return redirect('/profile');
//     }
//     return redirect('/login');

// });











