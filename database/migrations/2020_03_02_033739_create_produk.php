<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('id_pegawai_fk');
            $table->foreign('id_pegawai_fk')->references('id_pegawai')->on('pegawais');
            $table->string('nama_produk')->nullable();
            $table->float('harga_produk')->nullable();
            $table->integer('stok_produk')->nullable();
            $table->integer('min_stok_produk')->nullable();
            $table->string('satuan_produk')->nullable();
            $table->string('createLog_by')->nullable();
            $table->string('updateLog_by')->nullable();
            $table->string('deleteLog_by')->nullable();
            $table->timestamp('createLog_at')->nullable();
            $table->timestamp('updateLog_at')->nullable();
            $table->timestamp('deleteLog_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
