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
        Schema::create('communicants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenomct')->nullable();
            $table->text('fonction_communicant')->nullable();
            $table->string('contact_communicant')->nullable();
            $table->string('email_communicant')->nullable();
            $table->text('intervention_communicant')->nullable();
            $table->text('presentation_communicant')->nullable();
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
        Schema::dropIfExists('communicants');
    }
};