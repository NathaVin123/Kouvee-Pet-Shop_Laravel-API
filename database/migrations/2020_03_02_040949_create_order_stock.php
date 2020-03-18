<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderStocks', function (Blueprint $table) {
            $table->bigIncrements('id_stock');
            $table->unsignedBigInteger('id_pegawai_fk');
            $table->foreign('id_pegawai_fk')->references('id_pegawai')->on('pegawais');
            $table->string('nama_stock')->nullable();
            $table->string('satuan_stock')->nullable();
            $table->dateTime('tgl_pesan')->nullable();
            $table->dateTime('tgl_Cetak')->nullable();
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
        Schema::dropIfExists('orderStocks');
    }
}
