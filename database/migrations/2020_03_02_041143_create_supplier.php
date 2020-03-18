<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id_supplier');
            $table->unsignedBigInteger('id_pegawai_fk');
            $table->foreign('id_pegawai_fk')->references('id_pegawai')->on('pegawais');
            $table->unsignedBigInteger('id_stock_fk');
            $table->foreign('id_stock_fk')->references('id_stock')->on('orderStocks');
            $table->string('nama_supplier')->nullable();
            $table->string('alamat_supplier')->nullable();
            $table->double('telepon_supplier')->nullable();
            $table->integer('stok_supplier')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
