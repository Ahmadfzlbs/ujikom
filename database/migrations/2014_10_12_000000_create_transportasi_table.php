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
        Schema::create('transportasi', function (Blueprint $table) {
            $table->integerIncrements('id_transportasi');
            $table->integer('kode');
            $table->integer('jumlah_kursi');
            $table->string('keterangan');
            $table->float('harga');
            $table->integer('id_tipe_transportasi');
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
        Schema::dropIfExists('transportasi');
    }
};
