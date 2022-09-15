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
        Schema::create('protocoles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenompt')->nullable();
            $table->text('fonction_protocole')->nullable();
            $table->string('contact_protocole')->nullable();
            $table->string('email_protocole')->nullable();
            $table->string('photo')->nullable();
            $table->text('presentation')->nullable();
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
        Schema::dropIfExists('protocoles');
    }
};