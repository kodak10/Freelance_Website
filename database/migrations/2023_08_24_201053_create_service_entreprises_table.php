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
        Schema::create('service_entreprises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned()->index();
            $table->bigInteger('entreprise_id')->unsigned()->index();

            $table->string('description');
            $table->string('delais_execution')->nullable();

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_entreprises');
    }
};
