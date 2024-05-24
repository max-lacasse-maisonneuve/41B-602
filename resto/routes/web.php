<?php

use App\Http\Controllers\MenuController;
use App\Models\Menu;
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
Route::get('/locale', function (Request $request) {
    //On récupère le paramètre de la langue
    $query = $request->query();

    //Si le paramètre existe, on le met en session 
    //sinon on place une valeur par défaut
    if (isset ($query["lang"])) {
        $lang = $query["lang"];
    } else {
        $lang = "en";
    }

    session()->put("locale", $lang);

    //On retourne à la page précédente
    return back();

})->name("locale");

Route::get('/', function (Request $request) {
    $data = ["title" => "Accueil"];
    return view('index', $data);
})->name("index");

Route::get('/a-propos', function () {
    return view('a_propos');
})->name("about");

Route::resource("/menus", MenuController::class);
