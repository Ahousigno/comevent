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
        Schema::create('reunions', function (Blueprint $table) {
            $table->id();
            $table->string('ordre_jour', 191);
            $table->date('date_reunion');
            $table->string('heure_debut', 10);
            $table->string('heure_fin', 10);
            $table->string('canal', 191);
            $table->string('lien_reunion', 191);

            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('evenements')->onDelete('cascade');
            
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
        Schema::dropIfExists('reunions');
    }
};
