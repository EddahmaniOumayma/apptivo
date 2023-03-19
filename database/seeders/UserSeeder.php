<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as FakerFactory;
use illuminate\support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 100; $i++) {
            $nom = $faker->lastName;
            $prenom = $faker->firstName;
            $email = $faker->unique()->email;
            $date_naissance = $faker->date('Y-m-d', '-20 years');
            $lieu_naissance = $faker->city;
            $sexe = $faker->randomElement(['F', 'M']);
            $image = $faker->image(storage_path('app/public/images'), 400, 400, null, false);
        
            $tel = $faker->unique()->phoneNumber;
            $cin = $faker->unique()->numerify('########');
          
            $date_ambauche = $faker->date('Y-m-d', '-1 years');
                  
                                                                       
            $situation_familial = $faker->randomElement(['Marié(e)', 'Divorcé(e)', 'Célibataire']);
            $Nbr_enfants = $faker->numberBetween(0, 5);
        
            $status = $faker->randomElement(['active', 'inactive']);
        
            $password = Hash::make('password'); 
            $email_verified_at = $faker->randomElement([now(), null]); 
                                 
            DB::table('users')->insert([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'date_naissance' => $date_naissance,
                'lieu_naissance' => $lieu_naissance,
                'sexe' => $sexe,
                'image' => $image,
                'tel' => $tel,
                'cin' => $cin,
                'date_ambauche' => $date_ambauche,
                'situation_familial' => $situation_familial,
                'Nbr_enfants' => $Nbr_enfants,
                'status' => $status,
                'password' => $password,
                'email_verified_at' => $email_verified_at,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
         
    }
}
