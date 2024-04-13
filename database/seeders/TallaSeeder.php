<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('tallas')->insert([
            'tallas' => 'XS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => 'S',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => 'L',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => 'XL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '32',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '34',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '36',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tallas')->insert([
            'tallas' => '37',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '38',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '39',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tallas')->insert([
            'tallas' => '40',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
