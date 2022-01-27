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
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Colina',
            'provincia_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Lampa',
            'provincia_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Pirque',
            'provincia_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Puente Alto',
            'provincia_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Melipilla',
            'provincia_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Curacabi',
            'provincia_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'San Rosendo',
            'provincia_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Laja',
            'provincia_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Concepcion',
            'provincia_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Chiguayante',
            'provincia_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Arauco',
            'provincia_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Lebu',
            'provincia_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Cobquecura',
            'provincia_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Ninhue',
            'provincia_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Quillon',
            'provincia_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Bulnes',
            'provincia_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'San Carlos',
            'provincia_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ciudads')->insert([
            'CIU_NAME' => 'Ñiquen',
            'provincia_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
