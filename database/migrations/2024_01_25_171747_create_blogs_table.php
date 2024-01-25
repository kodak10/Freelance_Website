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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('user_id')->unique()->unsigned()->index();
            $table->unsignedBigInteger('user_id'); // Supprimer la contrainte d'unicité
            $table->string('image_path')->default('couverture.jpg');
            $table->string('libelle');
            $table->text('description');
            $table->string('status')->default('active');
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
