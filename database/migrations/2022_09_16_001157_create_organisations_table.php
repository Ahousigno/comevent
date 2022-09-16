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
        Schema::create('comites_organisations', function (Blueprint $table) {
            $table->id();
            $table->string('comite', 191);
            $table->string('responsable', 191);
            $table->string('membres', 191);

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
        Schema::dropIfExists('organisations');
    }
};
