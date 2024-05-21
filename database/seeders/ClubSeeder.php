<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //
     $club = [
        ['kodeclub'=>'1','nama_club'=>'BLACKPINK','gelar_club'=>'S3','asal_negara'=>'korea'],
        ['kodeclub'=>'2','nama_club'=>'TREASURE','gelar_club'=>'S2','asal_negara'=>'korea'],
        ['kodeclub'=>'3','nama_club'=>'BABYMONSTER','gelar_club'=>'S1','asal_negara'=>'korea'],
     ];
     DB::table('club')->insert($club);
    }
}
