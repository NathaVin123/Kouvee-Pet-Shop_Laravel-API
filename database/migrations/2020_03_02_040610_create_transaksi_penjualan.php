<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksiPenjualans', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi_penjualan');
            $table->unsignedBigInteger('id_pegawai_fk');
            $table->foreign('id_pegawai_fk')->references('id_pegawai')->on('pegawais');
            $table->unsignedBigInteger('id_hewan_fk');
            $table->foreign('id_hewan_fk')->references('id_hewan')->on('hewans');
            $table->string('nama_cs')->nullable();
            $table->float('subtotal')->nullable();
            $table->string('status_transaksi')->nullable();
            $table->string('createLog_by')->nullable();
            $table->string('updateLog_by')->nullable();
            $table->timestamp('createLog_at')->nullable();
            $table->timestamp('updateLog_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksiPenjualans');
    }
}
