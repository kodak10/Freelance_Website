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
        Schema::create('service_clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique()->unsigned()->index();
            $table->string('nom');
            $table->string('telephone');
            $table->string('email');
            $table->string('localisation');
            $table->string('photo');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_clients');
    }
};
