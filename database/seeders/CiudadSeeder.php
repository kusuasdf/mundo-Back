<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generamos ciudades de ejemplo
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Colina',
            'pt_provincia_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Lampa',
            'pt_provincia_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Pirque',
            'pt_provincia_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Puente Alto',
            'pt_provincia_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Melipilla',
            'pt_provincia_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Curacabi',
            'pt_provincia_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'San Rosendo',
            'pt_provincia_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Laja',
            'pt_provincia_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Concepcion',
            'pt_provincia_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Chiguayante',
            'pt_provincia_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Arauco',
            'pt_provincia_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Lebu',
            'pt_provincia_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Cobquecura',
            'pt_provincia_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Ninhue',
            'pt_provincia_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Quillon',
            'pt_provincia_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Bulnes',
            'pt_provincia_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'San Carlos',
            'pt_provincia_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pt_ciudads')->insert([
            'CIU_NAME' => 'Ñiquen',
            'pt_provincia_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
