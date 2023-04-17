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
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->integer('unique_num');
            $table->string('nama_akun');
            $table->string('seller');
            $table->string('tipe_game');
            $table->string('harga_jual');
            $table->longText('screenshot_pertama');
            $table->longText('screenshot_kedua');
            $table->longText('screenshot_ketiga');
            $table->longText('deskripsi_akun');
            $table->integer('viewer');
            $table->string('status')->default(0)->nullable();
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
        Schema::dropIfExists('game');
    }
};
