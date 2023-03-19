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


$faker = FakerFactory::create();

for ($i = 0; $i < 10; $i++) {
    $libelle = $faker->unique()->jobTitle;

    DB::table('corps')->insert([
        'libelle' => $libelle,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
    }
}
