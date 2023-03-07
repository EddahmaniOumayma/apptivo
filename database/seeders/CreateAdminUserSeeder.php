<?php

namespace Database\Seeders;

  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

            
            'nom' =>'Eddahmani',
            'prenom' =>'oumayma',
            'email' =>'oumaymaeddahmani@gmail.com',
            'date_naissance' =>'2000-08-01',
            'lieu_naissance' =>'Tourirt',
            'sexe' =>'F',
            'image' =>"C:\Users\pc\Desktop\apptivo\public\img\logo.png",
            'tel' =>'06 66 66 66 66',
            'cin' =>'Fb118064',
            'date_ambauche' =>'2012-05-02',
            'situation_familial' =>'Célibataire',
            'Nbr_enfants'=> 5 ,
            'status' =>'active',
            'password' => bcrypt('12345678'),
        ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
    
}
