<?php

use Illuminate\Database\Seeder;

class TipeJasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_jasa')->delete();
        DB::table('tipe_jasa')->insert([
            [
                'nama_jasa' => 'JNE Ekonomis',
                'deskripsi_jasa' => 'Paket sampai antara 10-14 hari kerja',
                'harga_jasa' => 5000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_jasa' => 'JNE Reguler',
                'deskripsi_jasa' => 'Paket sampai antara 6-9 hari kerja',
                'harga_jasa' => 9000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_jasa' => 'JNE Fast',
                'deskripsi_jasa' => 'Paket sampai antara 2-5 hari kerja',
                'harga_jasa' => 15000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_jasa' => 'JNE Super',
                'deskripsi_jasa' => 'Paket sampai besok',
                'harga_jasa' => 24000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
