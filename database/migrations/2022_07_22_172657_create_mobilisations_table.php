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
        Schema::create('mobilisations', function (Blueprint $table) {
            $table->id();

            $table->string('nom_mobilisateur')->nullable();
            $table->text('fonction_mobilisateur')->nullable();
            $table->string('contact_mobilisateur')->nullable();
            $table->string('email_mobilisateur')->nullable();

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
        Schema::dropIfExists('mobilisations');
    }
};