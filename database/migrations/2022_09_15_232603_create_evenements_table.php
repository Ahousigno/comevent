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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 191);
            $table->string('theme', 191);
            $table->string('tdr', 191); #File
            $table->string('programme', 191); #File
            $table->unsignedInteger('budget');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('lieu', 191);
            $table->string('categorie', 191);
            $table->string('portee', 191);
            $table->string('besoins', 191); #File
            $table->string('liste_invites', 191); #File

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('evenements');
    }
};
