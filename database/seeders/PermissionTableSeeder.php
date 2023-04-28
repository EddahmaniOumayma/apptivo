<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            $permissions = [

               'fonctionaires-list',
               'fonctionaires-create',
               'fonctionaires-edit',
               'fonctionaires-delete',

               'roles-list',
               'roles-create',
               'roles-edit',
               'roles-delete',

               'corps-list',
               'corps-create',
               'corps-edit',
               'corps-delete',

               'cadres-list',
               'cadres-create',
               'cadres-edit',
               'cadres-delete',

               'grades-list',
               'grades-create',
               'grades-edit',
               'grades-delete',

               'indices-list',
               'indices-create',
               'indices-edit',
               'indices-delete',
               
            ];
         
            foreach ($permissions as $permission) {
                 Permission::create(['name' => $permission]);
            }
        }
    }

