<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

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

//    Route::post('contact-us', function(Request $request) {
//        return response()->json([$request->all()]);
//    });

Route::post('contact-us', 'ContactController@SaveContact');

// Route::get('/Main', function () {
//     return view('Main');
// });
