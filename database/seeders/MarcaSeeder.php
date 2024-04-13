<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre' => 'jamday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('marcas')->insert([
            'nombre' => 'NIKE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
