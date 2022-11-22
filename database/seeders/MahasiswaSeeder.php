<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => 'G.211.20.0116',
            'nama' => 'Yovi Adhi Ramadani',
            'umur' => '21',
            'alamat' => 'Bugangan',
            'kota' => 'Semarang',
            'kelas' => '5',
            'jurusan' => 'FTIK',
        ]);
    }
}
