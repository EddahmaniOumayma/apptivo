<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\Inscription;
use App\Notifications\ToNextGrade;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ToNextIndice;

class UserAgregation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:UserAgregation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'systeme d agregation des fonctionnaire avec une maniére automatique';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $users=User::all(); 
      foreach($users as $user)
    
      {
        $validateIndice = Carbon::parse($user->created_at)->diffInYears(Carbon::now());
        if($validateIndice >= 1)
        {
          $indiceUser= $user->indices->first();
          $indiceId=$indiceUser->id;
          $gradeUser=$indiceUser->grade->first();
          $gradeId=$gradeUser->id;
          
          $cadreUser=$gradeUser->cadre->first();
          $cadreId=$cadreUser->id;
        
        

        
                       //-------------------------------------------------------------grade1

              if($indiceId == 1)
              {
                $user->indices()->syncWithPivotValues(2,['updated_at' => now()]);
                $user->update(['created_at' => now()]);

                Notification::send($user, new ToNextIndice($user));
                
              }
              elseif($indiceId == 2)
              {
                $user->indices()->syncWithPivotValues(3,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 3)
              {
                $user->indices()->syncWithPivotValues(4,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 4)
              {
                $user->indices()->syncWithPivotValues(5,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 5)
              {
                $user->indices()->syncWithPivotValues(6,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 6)
              {
                $user->indices()->update(['grade_id' =>2]);
                $user->indices()->syncWithPivotValues(7,['updated_at' => now()]);
                Notification::send($user, new ToNextGrade($user));


             
              }
        
             //indice   6   grade 1 auto


                          //-------------------------------------------------------------grade2

              elseif($indiceId == 7)
              {
                $user->indices()->syncWithPivotValues(8,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));
               
              }
              elseif($indiceId == 8)
              {
                $user->indices()->syncWithPivotValues(9,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));
            

              }
              elseif($indiceId == 9)
              {
                $user->indices()->syncWithPivotValues(10,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 10)
              {
                $user->indices()->syncWithPivotValues(11,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId ==11)
              {
                $user->indices()->syncWithPivotValues(12,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId ==12)
              {
               $user->indices()->update(['grade_id' =>3]);
               $user->indices()->syncWithPivotValues(17,['updated_at' => now()]);
                              //  Notification::send($user, new Inscription($user));

            

              }
              //indice  12_ 6  test concours grade 2


              //si non admin passer a l indice 13->14->15->16

                          //-------------------------------------------------------------grade3
              elseif($indiceId == 17)
              {
                $user->indices()->syncWithPivotValues(18,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 18)
              {
                $user->indices()->syncWithPivotValues(19,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 19)
              {
                $user->indices()->syncWithPivotValues(20,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 20)
              {
                $user->indices()->syncWithPivotValues(21,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 21)
              {
                $user->indices()->syncWithPivotValues(22,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

              }
              elseif($indiceId == 22)
              {
                $user->indices()->update(['grade_id' =>4]);
                $user->indices()->syncWithPivotValues(26,['updated_at' => now()]);
                // Notification::send($user, new Inscription($user));



             
              }
                
              //indice  23_ 6  Agregation avec concours grade 3

               //si non admis passer a l indice 23->24->25->26

                          //-------------------------------------------------------------grade4
            
              
             
              elseif($indiceId == 26)
              {
                $user->indices()->syncWithPivotValues(27,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));

               
              }
              elseif($indiceId == 27)
              {
                $user->indices()->syncWithPivotValues(28,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId == 29)
              {
                $user->indices()->syncWithPivotValues(30,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId == 30)
              {
                $user->indices()->syncWithPivotValues(31,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId ==31)
              {
                $user->indices()->syncWithPivotValues(32,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId ==32)
              {
                $user->indices()->syncWithPivotValues(33,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId ==33)
              {
                $user->indices()->syncWithPivotValues(34,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId ==34)
              {
                $user->indices()->syncWithPivotValues(35,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
              elseif($indiceId ==35)
              {
                $user->indices()->syncWithPivotValues(36,['updated_at' => now()]);
                $user->update(['created_at' => now()]);
                Notification::send($user, new ToNextIndice($user));


              }
          
              // 32 last indice in  grade 1

          }
        }
        
      }
     
         

    }

