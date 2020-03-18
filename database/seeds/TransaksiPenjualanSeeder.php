<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TransaksiPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksipenjualans')->insert([
            'nama_cs' => 'Vincent Wibowo',
            'subtotal' => 200000,
            'status_transaksi' => 'Selesai',
            'createLog_by' => 'Donny Karno',
            'updateLog_by' => 'Donny Karno',
            'createLog_at' => Carbon::create('2019', '07', '11'),
            'updateLog_at' => Carbon::create('2019', '07', '11'),
            'id_pegawai_fk' => 4,
            'id_hewan_fk' => 1,
        ]);
        DB::table('transaksipenjualans')->insert([
            'nama_cs' => 'Vincent Wibowo',
            'subtotal' => 100000,
            'status_transaksi' => 'Selesai',
            'createLog_by' => 'Donny Karno',
            'updateLog_by' => 'Donny Karno',
            'createLog_at' => Carbon::create('2019', '09', '08'),
            'updateLog_at' => Carbon::create('2019', '09', '08'),
            'id_pegawai_fk' => 4,
            'id_hewan_fk' => 2,
        ]);
        DB::table('transaksipenjualans')->insert([
            'nama_cs' => 'Vincent Wibowo',
            'subtotal' => 250000,
            'status_transaksi' => 'Selesai',
            'createLog_by' => 'Donny Karno',
            'updateLog_by' => 'Donny Karno',
            'createLog_at' => Carbon::create('2019', '07', '12'),
            'updateLog_at' => Carbon::create('2019', '07', '12'),
            'id_pegawai_fk' => 4,
            'id_hewan_fk' => 3,
        ]);
        DB::table('transaksipenjualans')->insert([
            'nama_cs' => 'Al Sigit',
            'subtotal' => 300000,
            'status_transaksi' => 'Belum Selesai',
            'createLog_by' => 'Owen Ferry Gunawan',
            'updateLog_by' => 'Owen Ferry Gunawan',
            'createLog_at' => Carbon::create('2019', '05', '11'),
            'updateLog_at' => Carbon::create('2019', '05', '11'),
            'id_pegawai_fk' => 5,
            'id_hewan_fk' => 4,
        ]);
        DB::table('transaksipenjualans')->insert([
            'nama_cs' => 'Al Sigit',
            'subtotal' => 400000,
            'status_transaksi' => 'Belum Selesai',
            'createLog_by' => 'Owen Ferry Gunawan',
            'updateLog_by' => 'Owen Ferry Gunawan',
            'createLog_at' => Carbon::create('2019', '11', '07'),
            'updateLog_at' => Carbon::create('2019', '11', '07'),
            'id_pegawai_fk' => 5,
            'id_hewan_fk' => 5,
        ]);
    }
}
