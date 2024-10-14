<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class RingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rings')->insert([
            ['diameter' => 10.0, 'material' => 'gold'],
            ['diameter' => 15.0, 'material' => 'silver'],
        ]);
    }
}
