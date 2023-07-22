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
            $table->string('photo');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('site_web');
            $table->text('type_societe')->nullable();
            $table->string('telephone');
            $table->text('description');
            $table->json('diplome');
            $table->date('date_naissance');
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
