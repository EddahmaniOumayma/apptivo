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
            'email' =>'oumaymaeddahmani1@gmail.com',
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
        $role2 = Role::create(['name' => 'Fonctionnaire']);
     
        $permissions = Permission::pluck('id','id')->all();
        $permissions2 = Permission::where('id',1)->pluck('id','id');
     
   
        $role->syncPermissions($permissions);                  
        $role2->syncPermissions($permissions2);
     
        $user->assignRole([$role->id]);
    }
    
}
