<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Models\Menu;
use App\Models\User;
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
    //On trouve le premier user
    // $utilisateur = User::first();
    // auth()->login($utilisateur);
    // auth()->logout();
    // dd(auth()->user());
    $data = ["title" => "Accueil"];
    return view('index', $data);
})->name("index");

Route::get('/a-propos', function () {
    return view('a_propos');
})->name("about");

Route::get("/connexion", [AuthController::class, "login"])->name("login");
Route::post("/connexion", [AuthController::class, "authenticate"])->name("authenticate");
Route::get("/deconnexion", [AuthController::class, "logout"])->name("logout");

Route::resource("/menus", MenuController::class);
