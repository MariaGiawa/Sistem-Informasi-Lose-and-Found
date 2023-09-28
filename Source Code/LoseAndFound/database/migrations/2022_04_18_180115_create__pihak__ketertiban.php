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
        Schema::create('pihak_ketertiban', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nohp');
            $table->foreignId('prodi_id');
            $table->integer('angkatan');
            $table->string('nim');
            $table->timestamps();
            $table->foreign('prodi_id')->references('id')->on('prodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pihak_ketertiban');
    }
};
