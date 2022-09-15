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
        Schema::create('apres', function (Blueprint $table) {
            $table->id();
            $table->string('lettre')->nullable();
            $table->string('rapport')->nullable();
            $table->string('article')->nullable();
            $table->string('medias')->nullable();
            $table->string('pressbook')->nullable();
            $table->string('album')->nullable();
            $table->string('lien')->nullable();
            $table->string('enquete')->nullable();

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
        Schema::dropIfExists('apres');
    }
};