<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailProduks', function (Blueprint $table) {
            $table->bigIncrements('id_detail_produk');
            $table->unsignedBigInteger('id_produk_fk');
            $table->foreign('id_produk_fk')->references('id_produk')->on('produks');
            $table->unsignedBigInteger('id_transaksi_penjualan_fk');
            $table->foreign('id_transaksi_penjualan_fk')->references('id_transaksi_penjualan')->on('transaksiPenjualans');
            $table->string('kode_produk')->nullabel();
            $table->timestamp('tgl_transaksi_produk')->nullable();
            $table->integer('jml_transaksi_produk')->nullable();
            $table->float('subtotal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailProduks');
    }
}
