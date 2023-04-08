<?php

use App\Http\Controllers\admin\FonctionnaireController;
use App\Http\Controllers\CadreController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\IndiceController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\s_admin\ExamController;
use App\Http\Controllers\s_admin\QuestionController;
use App\Models\User;
use App\Notifications\ToNextIndice;
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

    Route::get('/Dashbord', function () {
        return view('admin.dashbord');
    })->name('dashbord');

     Route::resource('fonctionnaires', FonctionnaireController::class);
  
    Route::get('/Profile', function () {
        $user=User::all();

        return view('admin.profile',compact('user'));
    })->name('profile');

    Route::get('/Profilef', function () {
        $user=User::all();
        return view('Fonctionnaire.profile',compact('user'));
    })->name('profilef');

     Route::resource('fonctionnaires', FonctionnaireController::class);

     Route::get('/DashbordF', function () {
        return view('Fonctionnaire.dashbord');
    })->name('dashbordF');


     Route::get('/InscriptionPdf', function () {
        return view('Fonctionnaire.InscriptionPdf');
    })->name('InscriptionPdf');

    Route::get('send_mail_pdf', [SendMailPDFController::class, 'sendMailWithPDF'])->name('send_mail_pdf');





  
    
});




Route::resource('exams', ExamController::class);
Route::resource('questions', QuestionController::class);

Route::get('/send-email', function () {
    $data = array(
        'name' => 'John Doe',
    );
    Mail::send('emails.welcome', $data, function ($message) {
        $message->to('hookshamosiba201555@gmail.com', 'Recipient Name')
                ->subject('Welcome!');
    });
    return "Email has been sent successfully";
});
