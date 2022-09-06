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
        Schema::create('avants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_event');
            $table->string('theme');
            $table->string('tdr');
            $table->string('programme_file');
            $table->string('budget');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->text('lieu');
            $table->string('cathegorie')->nullable();
            $table->string('portee')->nullable();
            $table->string('besoin')->nullable();
            $table->string('liste')->nullable();

            // $table->string('email_courier')->nullable();
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
        Schema::dropIfExists('avants');
    }
};