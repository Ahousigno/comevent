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
        Schema::create('fin_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('lettre_remerciements', 191);
            $table->string('rapport', 191);
            $table->string('articles', 191);
            $table->string('medias', 191);
            $table->string('lien_event', 191);

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
        Schema::dropIfExists('fin__evenements');
    }
};
