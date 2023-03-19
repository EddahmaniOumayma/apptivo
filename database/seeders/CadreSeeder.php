<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class CadreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


$faker = FakerFactory::create();

$corpIds = DB::table('corps')->pluck('id')->toArray();

for ($i = 0; $i < 10; $i++) {
    $libelle_c = $faker->unique()->jobTitle;

    $corp_id = $faker->randomElement($corpIds);

    DB::table('cadres')->insert([
        'libelle_c' => $libelle_c,
        'corp_id' => $corp_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}




    }
}
