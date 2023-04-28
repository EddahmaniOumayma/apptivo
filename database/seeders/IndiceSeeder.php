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
      

        $gradeIds = DB::table('grades')->pluck('id')->toArray();

    $indices = [
        //___________________________________________indices 4eme grade
        [
            'libelle_i' => '207-01',
            'grade_id' => $gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '224-02',
            'grade_id' => $gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '241-03',
            'grade_id' =>$gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '259-04',
            'grade_id' => $gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '276-05',
            'grade_id' => $gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '293-06',
            'grade_id' => $gradeIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        //___________________________________________indices 3eme grade
        [
            'libelle_i' => '235-01',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '253-02',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '274-03',
            'grade_id' =>$gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '296-04',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '317-05',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '339-06',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '361-07',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '382-08',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '404-09',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '438-10',
            'grade_id' => $gradeIds[1],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        //___________________________________________indices 2eme grade
        [
            'libelle_i' => '275-01',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '300-02',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '326-03',
            'grade_id' =>$gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '351-04',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '377-05',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '402-06',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '428-07',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '456-08',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '484-09',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '512-10',
            'grade_id' => $gradeIds[2],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        //___________________________________________indices 1er  grade
        [
            'libelle_i' => '336-01',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        
        [
            'libelle_i' => '301-02',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '403-03',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '436-04',
            'grade_id' =>$gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '472-05',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '509-06',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '542-07',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '574-08',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '606-09',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '639-10',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '675-11',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '690-12',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'libelle_i' => '704-13',
            'grade_id' => $gradeIds[3],
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
        

    DB::table('indices')->insert($indices);
    }
}
