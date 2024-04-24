<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("menus", function (Blueprint $table) {
            $table->boolean("estSansGluten")->default(true);
            $table->boolean("patate")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("menus", function (Blueprint $table) {
            $table->dropColumn("estSansGluten");
            $table->dropColumn("patate");
        });
    }
};
