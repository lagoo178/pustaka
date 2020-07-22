<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                \App\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'npm'				=> 10000353,
              'nama' 			=> 'Admin',
              'gambar'      => NULL,
              'tempat_lahir'	=> 'Jakarta',
              'tgl_lahir'		=> '2000-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'user_id'  		=> 2,
              'npm'				=> 10000375,
              'nama' 			=> 'User',
              'gambar'      => NULL,
              'tempat_lahir'	=> 'Jakarta',
              'tgl_lahir'		=> '2000-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
