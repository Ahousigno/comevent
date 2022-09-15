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
        Schema::create('intervenants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenomit')->nullable();
            $table->text('fonction_intervenant')->nullable();
            $table->string('contact_intervenant')->nullable();
            $table->string('email_intervenant')->nullable();
            $table->text('intervention_intervenant')->nullable();
            $table->string('photo_intervenant')->nullable();
            $table->text('presentation_intervenant')->nullable();


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
        Schema::dropIfExists('intervenants');
    }
};