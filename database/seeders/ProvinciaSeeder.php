<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generamos provincias de ejemplo
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Chacabuco',
            'region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de cordillera',
            'region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Melipilla',
            'region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Biobio',
            'region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Concepcion',
            'region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Arauco',
            'region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Itata',
            'region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Diguillin',
            'region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('provincias')->insert([
            'PROV_NAME' => 'Provincia de Punilla',
            'region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
