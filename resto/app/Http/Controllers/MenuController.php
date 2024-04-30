<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Query String, provient de request
        $tri = $request->query("tri", "nom");
        $direction = $request->query("direction", "asc");
        $prixMax = $request->query("prix-max");

        $menusQuery = Menu::query();

        if ($prixMax) {
            $menusQuery->where("prix", "<", $prixMax);
        }

        $menusQuery->orderBy($tri, $direction);
        $menus = $menusQuery->get();

        return view("menus.index", ["menus" => $menus, "title" => "Menus du resto"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view("menus.menu", ["menu" => $menu, "title" => $menu->nom]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
