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
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            $table->string('nom_accueil')->nullable();
            $table->text('fonction_accueil')->nullable();
            $table->string('contact_accueil')->nullable();
            $table->string('email_accueil')->nullable();
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
        Schema::dropIfExists('accueils');
    }
};