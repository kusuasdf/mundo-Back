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
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Chacabuco',
            'pt_region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de cordillera',
            'pt_region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Melipilla',
            'pt_region_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Biobio',
            'pt_region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Concepcion',
            'pt_region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Arauco',
            'pt_region_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Itata',
            'pt_region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Diguillin',
            'pt_region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_provincias')->insert([
            'PROV_NAME' => 'Provincia de Punilla',
            'pt_region_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
