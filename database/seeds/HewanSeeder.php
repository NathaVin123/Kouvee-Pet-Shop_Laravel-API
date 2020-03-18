<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hewans')->insert([
            'nama_hewan' => 'Mily',
            'tglLahir_hewan' => Carbon::create('2014', '01', '10'),
            'nama_customer' => 'Wahyu Chandra',
            'nama_kasir' => 'Owen Ferry Gunawan',
            'subtotal' => 200000,
            'diskon' => 5000,
            'total' => 195000,
            'createLog_by' => 'Vincent Wibowo',
            'updateLog_by' => 'Vincent Wibowo',
            'deleteLog_by' => 'Vincent Wibowo',
            'createLog_at' => Carbon::create('2019', '11', '11'),
            'updateLog_at' => Carbon::create('2019', '11', '11'),
            'deleteLog_at' => Carbon::create('2019', '11', '11'),
            'id_customer_fk' => 1,
            'id_pegawai_fk' => 1,
            'id_jenisHewan_fk' => 1,
            'id_ukuranHewan_fk' => 2,
        ]);
        DB::table('hewans')->insert([
            'nama_hewan' => 'Lymi',
            'tglLahir_hewan' => Carbon::create('2013', '01', '10'),
            'nama_customer' => 'Putu Ary',
            'nama_kasir' => 'Owen Ferry Gunawan',
            'subtotal' => 100000,
            'diskon' => 5000,
            'total' => 95000,
            'createLog_by' => 'Al Sigit',
            'updateLog_by' => 'Al Sigit',
            'deleteLog_by' => 'Al Sigit',
            'createLog_at' => Carbon::create('2019', '11', '12'),
            'updateLog_at' => Carbon::create('2019', '11', '12'),
            'deleteLog_at' => Carbon::create('2019', '11', '12'),
            'id_customer_fk' => 4,
            'id_pegawai_fk' => 2,
            'id_jenisHewan_fk' => 2,
            'id_ukuranHewan_fk' => 2,
        ]);
        DB::table('hewans')->insert([
            'nama_hewan' => 'Ummy',
            'tglLahir_hewan' => Carbon::create('2018', '01', '10'),
            'nama_customer' => 'Sukirman',
            'nama_kasir' => 'Owen Ferry Gunawan',
            'subtotal' => 250000,
            'diskon' => 5000,
            'total' => 245000,
            'createLog_by' => 'Al Sigit',
            'updateLog_by' => 'Al Sigit',
            'deleteLog_by' => 'Al Sigit',
            'createLog_at' => Carbon::create('2019', '11', '12'),
            'updateLog_at' => Carbon::create('2019', '11', '12'),
            'deleteLog_at' => Carbon::create('2019', '11', '12'),
            'id_customer_fk' => 5,
            'id_pegawai_fk' => 2,
            'id_jenisHewan_fk' => 1,
            'id_ukuranHewan_fk' => 3,
        ]);
        DB::table('hewans')->insert([
            'nama_hewan' => 'Dumpy',
            'tglLahir_hewan' => Carbon::create('2015', '01', '10'),
            'nama_customer' => 'Putu Ary',
            'nama_kasir' => 'Owen Ferry Gunawan',
            'subtotal' => 300000,
            'diskon' => 5000,
            'total' => 295000,
            'createLog_by' => 'Vincent Wibowo',
            'updateLog_by' => 'Vincent Wibowo',
            'deleteLog_by' => 'Vincent Wibowo',
            'createLog_at' => Carbon::create('2019', '11', '11'),
            'updateLog_at' => Carbon::create('2019', '11', '11'),
            'deleteLog_at' => Carbon::create('2019', '11', '11'),
            'id_customer_fk' => 4,
            'id_pegawai_fk' => 1,
            'id_jenisHewan_fk' => 2,
            'id_ukuranHewan_fk' => 3,
        ]);
        DB::table('hewans')->insert([
            'nama_hewan' => 'Amy',
            'tglLahir_hewan' => Carbon::create('2011', '01', '10'),
            'nama_customer' => 'Putu Ary',
            'nama_kasir' => 'Donny Karno',
            'subtotal' => 400000,
            'diskon' => 5000,
            'total' => 395000,
            'createLog_by' => 'Al Sigit',
            'updateLog_by' => 'Al Sigit',
            'deleteLog_by' => 'Al Sigit',
            'createLog_at' => Carbon::create('2019', '11', '12'),
            'updateLog_at' => Carbon::create('2019', '11', '12'),
            'deleteLog_at' => Carbon::create('2019', '11', '12'),
            'id_customer_fk' => 4,
            'id_pegawai_fk' => 1,
            'id_jenisHewan_fk' => 3,
            'id_ukuranHewan_fk' => 1,
        ]);
    }
}
