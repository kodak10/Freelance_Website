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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->unsignedBigInteger('id_secteur');
            $table->unsignedBigInteger('id_categorie');
            $table->timestamps();

            $table->foreign('id_secteur')->references('id')->on('secteurs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_categorie')->references('id')->on('category_faqs')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
