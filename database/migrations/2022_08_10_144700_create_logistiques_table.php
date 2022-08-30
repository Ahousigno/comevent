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
        Schema::create('logistiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_logistique')->nullable();
            $table->text('fonction_logistique')->nullable();
            $table->string('contact_logistique')->nullable();
            $table->string('email_logistique')->nullable();
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
        Schema::dropIfExists('logistiques');
    }
};