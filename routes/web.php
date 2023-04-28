<?php

use App\Http\Controllers\admin\ConcourController;
use App\Http\Controllers\admin\FonctionnaireController;
use App\Http\Controllers\admin\NoteController;
use App\Http\Controllers\CadreController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\IndiceController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\Type_congeController;
use App\Models\Conge;
use App\Models\Type_conge;
use App\Models\User;
use App\Notifications\ToNextIndice;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {

    Route::resource('corps', CorpController::class);
    Route::resource('cadres', CadreController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('indices', IndiceController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users',UserController::class);
    Route::resource('types_conge',Type_congeController::class);


         //____________________________________Concour-Note____________________________________________


    Route::get('/notes', [ConcourController::class, 'ListNotes'])->name('ListNotes'); 
    Route::put('/notes/{id}', [ConcourController::class, 'UpdateNote'])->name('UpdateNote'); 
    

    Route::resource('concours',ConcourController::class);




//conge

   

   
  
   

    Route::get('/Dashbord', function () {
        return view('admin.dashbord');
    })->name('dashbord');

     Route::resource('fonctionnaires', FonctionnaireController::class);
     Route::get('/fonctionnaires/search', [FonctionnairesController::class, 'search'])->name('fonctionnaires.search');
  
    Route::get('/Profile', function () {
        $user=User::all();

        return view('admin.profile',compact('user'));
    })->name('profile');

    Route::get('/Profilef', function () {
        $user=User::all();
        return view('Fonctionnaire.profile',compact('user'));
    })->name('profilef');

     Route::resource('fonctionnaires', FonctionnaireController::class);
     //____________________________________Conge____________________________________________

     
     route::resource('conges',CongeController::class);

     Route::get('/DashbordF', function () {
        $user = auth()->user();
        $types_conge=Type_conge::all();
        $conges = Conge::with(['user' => function($query){
            
        },'type_conge' => function($query){
            
        }])
        ->where('user_id', $user->id)
        ->where('annulation', 0)
        ->get();
        
       return view('Fonctionnaire.dashbord',compact('user','conges','types_conge'));

       
       
       
    })->name('dashbordF');
    
    Route::put('/ValiderConge/{id}' ,[CongeController::class, 'ValiderConge'])->name('ValiderConge'); 

 //________________________________________________________________________________

     Route::get('/InscriptionPdf', function () {
        return view('Fonctionnaire.InscriptionPdf');
    })->name('InscriptionPdf');

    Route::get('send_mail_pdf', [SendMailPDFController::class, 'sendMailWithPDF'])->name('send_mail_pdf');
    Route::get('Listpdf', 'ListPDFController@htmlPdf')->name('htmlPdf');

 
   
    
   

    
 



  
    
});





