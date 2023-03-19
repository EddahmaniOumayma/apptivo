<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


$faker = FakerFactory::create();

$cadreIds = DB::table('cadres')->pluck('id')->toArray();

for ($i = 0; $i < 20; $i++) {
    $libelle_g = $faker->unique()->jobTitle;
    $salaire_de_base = $faker->randomFloat(2, 1000, 5000);
    $besoin_concours = $faker->boolean;

    $cadre_id = $faker->randomElement($cadreIds);

    DB::table('grades')->insert([
        'libelle_g' => $libelle_g,
        'salaire_de_base' => $salaire_de_base,
        'besoin_concours' => $besoin_concours,
        'cadre_id' => $cadre_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
    }
}
