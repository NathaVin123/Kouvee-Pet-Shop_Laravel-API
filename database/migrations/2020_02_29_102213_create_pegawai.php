<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('nama_pegawai')->nullable();
            $table->string('alamat_pegawai')->nullable();
            $table->date('tglLahir_pegawai')->nullable();
            $table->double('noTelp_pegawai')->nullable();
            $table->string('role_pegawai')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
