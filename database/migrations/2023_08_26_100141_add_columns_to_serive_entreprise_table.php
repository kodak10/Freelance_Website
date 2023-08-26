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
        Schema::table('service_entreprises', function (Blueprint $table) {
            $table->string('libelle');
            $table->string('image')->nullable();
            // Ajoutez d'autres colonnes selon vos besoins
        });
    }

    /**
     * Reverse the migrations.
     */
    /* public function down(): void
    {
        Schema::table('serive_entreprise', function (Blueprint $table) {
            //
        });
    } */
};
