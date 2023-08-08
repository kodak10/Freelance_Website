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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique()->unsigned()->index();
            $table->string('type_entreprise');
            $table->string('num_inscription')->nullable();
            $table->string('approve')->default(0)->nullable();
            $table->string('name');
            $table->string('nationalite');
            $table->string('telephone');
            $table->string('email');
            $table->string('regime');
            $table->string('localisation');
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
