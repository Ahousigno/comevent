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
        Schema::create('hotesses', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenoms')->nullable();
            $table->text('fonction_hotesse')->nullable();
            $table->string('contact_hotesse')->nullable();
            $table->string('email_hotesse')->nullable();

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
        Schema::dropIfExists('hotesses');
    }
};