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
               'roles-delete'
            ];
         
            foreach ($permissions as $permission) {
                 Permission::create(['name' => $permission]);
            }
        }
    }

