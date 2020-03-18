<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailLayanans', function (Blueprint $table) {
            $table->bigIncrements('id_detail_layanan');
            $table->unsignedBigInteger('id_layanan_fk');
            $table->foreign('id_layanan_fk')->references('id_layanan')->on('layanans');
            $table->unsignedBigInteger('id_transaksi_penjualan_fk');
            $table->foreign('id_transaksi_penjualan_fk')->references('id_transaksi_penjualan')->on('transaksiPenjualans');
            $table->string('kode_layanan')->nullabel();
            $table->timestamp('tgl_transaksi_layanan')->nullable();
            $table->integer('jml_transaksi_layanan')->nullable();
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
        Schema::dropIfExists('detailLayanans');
    }
}
