<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
      
            CorpSeeder::class,
            CadreSeeder::class,
            GradeSeeder::class,
            IndiceSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
          
        ]);
    }
}
