<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class UserIndiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


$faker = FakerFactory::create();

$userIds = DB::table('users')->pluck('id')->toArray();
$indiceIds = DB::table('indices')->pluck('id')->toArray();

for ($i = 0; $i < 100; $i++) {
    $userId = $faker->unique()->randomElement($userIds);
    $indiceId = $faker->unique()->randomElement($indiceIds);


    DB::table('indice_user')->insert([
        'user_id' => $userId,
        'indice_id' => $indiceId,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
    }
}
