<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hewans', function (Blueprint $table) {
            $table->bigIncrements('id_hewan');
            $table->unsignedBigInteger('id_customer_fk');
            $table->foreign('id_customer_fk')->references('id_customer')->on('customers');
            $table->unsignedBigInteger('id_pegawai_fk');
            $table->foreign('id_pegawai_fk')->references('id_pegawai')->on('pegawais');
            $table->string('nama_hewan')->nullable();
            $table->date('tglLahir_hewan')->nullable();
            $table->string('nama_customer')->nullable();
            $table->string('nama_kasir')->nullable();
            $table->float('subtotal')->nullable();
            $table->float('diskon')->nullable();
            $table->float('total')->nullable();
            $table->string('createLog_by')->nullable();
            $table->string('updateLog_by')->nullable();
            $table->string('deleteLog_by')->nullable();
            $table->timestamp('createLog_at')->nullable();
            $table->timestamp('updateLog_at')->nullable();
            $table->timestamp('deleteLog_at')->nullable();
            $table->unsignedBigInteger('id_jenisHewan_fk');
            $table->foreign('id_jenisHewan_fk')->references('id_jenisHewan')->on('jenisHewans');
            $table->unsignedBigInteger('id_ukuranHewan_fk');
            $table->foreign('id_ukuranHewan_fk')->references('id_ukuranHewan')->on('ukuranHewans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hewans');
    }
}
