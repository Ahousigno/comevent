<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_organisateur')->nullable();
            $table->string('prenoms')->nullable();
            $table->text('fonction_organisateur')->nullable();
            $table->string('contact_organisateur')->nullable();
            $table->string('email_organisateur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisateurs');
    }
};