<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class CorpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $corps = [
            ['libelle' => 'Techniciens',   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle' => 'Administrateurs',   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle' => 'Ingénieurs et architectes',   'created_at' => now(),
            'updated_at' => now(),],
        
        ];
        DB::table('corps')->insert($corps);


    }
}
