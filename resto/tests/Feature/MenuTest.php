<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Rules\ImageFile;
use Tests\TestCase;
use App\Models\Menu;

class MenuTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();//Doit être la première ligne
        //Code ici
        $this->seed("MenuSeeder");

    }

    public function tearDown(): void
    {
        //Code ici
        parent::tearDown();//Doit être la dernière ligne
    }
    /**
     * A basic feature test example.
     */
    public function test_menu_index_valid(): void
    {
        $response = $this->get(route("menus.index"));

        $response->assertViewHas("title");//La vue contient la données suivante
        $response->assertViewHas("menus");//La vue contient la données suivante
        $response->assertViewHas("patate");//La vue contient la données suivante

        $response->assertStatus(200);
    }

    public function test_index_contains_menu(): void
    {
        $response = $this->get(route("menus.index"));
        $menusData = $response->original->getData()["menus"];
        $this->assertGreaterThan(0, count($menusData));
    }
    public function test_index_trier_prix(): void
    {
        $response = $this->get(route("menus.index", ["tri" => "prix", "direction" => "desc"]));
        $menusData = $response->original->getData()["menus"];
        $premier = $menusData->first()->prix;
        $dernier = $menusData->last()->prix;
        $this->assertGreaterThanOrEqual($dernier, $premier, "Pas tiguidou");

    }
    public function test_page_inconnue(): void
    {
        $response = $this->get("/sldkdfjsdlkfhlsdfj");
        $response->assertStatus(404);
    }

    public function test_menu_show(): void
    {
        $menu = Menu::first();
        $response = $this->get(route("menus.show", ["menu" => $menu->id]));
        //Terminer ici
    }

    public function test_menu_create(): void
    {
        $response = $this->get(route("menus.create"));
        $response->assertElementExists("form");
        $response->assertElementExists("input[name='nom']");
        $response->assertElementExists("input[name='prix']");
        //Terminer ici
    }

    public function test_menu_store(): void
    {
        $image = new ImageFile();
        $response = $this->post(route("menus.store", [
            "nom" => "MenuTest4",
            "prix" => 10,
            "estVege" => false,
            "description" => "Lorem ipsum",
            "image" => $image
        ]));

        $response->assertStatus(302);
        $response->assertRedirect(route("menus.index"));

        //Cleanup manuel
        // Menu::orderByDesc("id")->first()->delete();

    }

}
