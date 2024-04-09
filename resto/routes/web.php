<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    dd($request->lsdfjkjsdhf);
    return view('index');
})->name("index");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

//Regroupe les routes qui commencent par le même nom
Route::group(['prefix' => 'admin'], function () {

    Route::get("/", function () {
        return view("admin.index");
    });
    Route::get("/produits", function () {
        return view("admin.index");
    });
});
