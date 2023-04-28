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
        $cadreIds = DB::table('cadres')->pluck('id')->toArray();

        $grades = [
            ['libelle_g' => 'Technicien de 4éme grade', 'salaire_de_base' => 1000.00, 'besoin_concours' => false, 'cadre_id' => $cadreIds[0]   ,'created_at' => now(),
            'updated_at' => now(),],
            ['libelle_g' => 'Technicien de 3éme grade', 'salaire_de_base' => 1200.50, 'besoin_concours' => false, 'cadre_id' => $cadreIds[0],   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle_g' => 'Technicien de 2éme grade', 'salaire_de_base' => 1500.00, 'besoin_concours' => true, 'cadre_id' => $cadreIds[0],   'created_at' => now(),
            'updated_at' => now(),],
            ['libelle_g' => 'Technicien de 1er grade', 'salaire_de_base' => 1800.00, 'besoin_concours' => true, 'cadre_id' => $cadreIds[0],   'created_at' => now(),
            'updated_at' => now(),],
        ];
        DB::table('grades')->insert($grades);

}
}