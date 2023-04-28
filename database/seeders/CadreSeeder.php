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

        $corpIds = DB::table('corps')->pluck('id')->toArray();

        $cadres = [
            ['libelle_c' => 'Techniciens', 'corp_id' => $corpIds[0],   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle_c' => 'Administrateurs', 'corp_id' => $corpIds[1],   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle_c' => 'Ingénieurs d application', 'corp_id' => $corpIds[2],   'created_at' => now(),
            'updated_at' => now(),],
          
        ];

        DB::table('cadres')->insert($cadres);
    }


    
   


    }

