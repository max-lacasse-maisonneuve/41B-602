<?php

use App\Http\Controllers\MenuController;
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
    $data = ["title" => "Accueil"];
    return view('index', $data);
})->name("index");

Route::get('/a-propos', function () {
    return view('a_propos');
})->name("about");

Route::resource("/menus", MenuController::class);
