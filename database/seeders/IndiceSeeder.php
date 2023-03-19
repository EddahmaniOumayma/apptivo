<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;


class IndiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

$grades = DB::table('grades')->pluck('id');

for ($i = 0; $i < 50; $i++) {
    $libelle_i = $faker->unique()->word;
    $grade_id = $faker->randomElement($grades);

    DB::table('indices')->insert([
        'libelle_i' => $libelle_i,
        'grade_id' => $grade_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
    }
}
