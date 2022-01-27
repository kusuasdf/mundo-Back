<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generamos calles de ejemplo
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Santa Rosa',
            'ciudad_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Carrera',
            'ciudad_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Caupolicán',
            'ciudad_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Las Mónicas',
            'ciudad_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Lurín',
            'ciudad_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('calles')->insert([
            'CAL_NAME' => 'Calle Manuel Rodriguez',
            'ciudad_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
