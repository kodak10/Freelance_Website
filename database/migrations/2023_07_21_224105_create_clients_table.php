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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // $table->string('libelle');
            $table->string('photo')->nullable();
            $table->string('nom');
            $table->string('prenoms')->nullable();
            $table->string('site_web')->nullable();
            $table->string('telephone');
            $table->string('type_entreprise')->nullable();
            $table->text('description')->nullable();
            //$table->json('diplome')->nullable();
            $table->boolean('approve')->nullable()->default(false)->nullable();
            $table->date('date_naissance')->nullable();
            $table->unsignedBigInteger('id_type_client');
            $table->timestamps();
            $table->foreign('id_type_client')->references('id')->on('type_clients')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
