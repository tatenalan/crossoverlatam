<?php

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/ProjectTeam', function () {
    return view('projectteam');
});

Route::get('/HumanToHuman', function () {
    return view('humantohuman');
});

Route::get('/GoToGoals', function () {
    return view('gotogoals');
});

Route::post('/', function(Request $request){
  Mail::send(new ContactMail($request));
  return redirect ('/');
});
