<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class regionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generamos regiones de ejemplo
        DB::table('regions')->insert([
            'REG_NAME' => 'Region metropolitana',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('regions')->insert([
            'REG_NAME' => 'Region BIOBIO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('regions')->insert([
            'REG_NAME' => 'Region ÑUBLE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
