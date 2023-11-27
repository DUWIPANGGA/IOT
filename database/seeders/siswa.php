<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama'=>'dimas arya duwipangga',
            'ID'=>'123212431242',
            'alamat'=>'cirebon',
            'created_at'=>date('Y-m-d H:i-s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'wahid hasyim',
            'ID'=>'26734563',
            'alamat'=>'indramayu',
            'created_at'=>date('Y-m-d H:i-s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'julian',
            'ID'=>'83458372',
            'alamat'=>'majalengka',
            'created_at'=>date('Y-m-d H:i-s')
        ]);
    }
}
