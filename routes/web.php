<?php

use Inertia\Inertia;
use App\Models\Developper;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\DeveloperController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
Route::get('/home', function () {
    return Inertia::render('home');
});

Route::get('/MyInvoices', function () {
    return Inertia::render('MyInvoices');
});

Route::get('/BecomeDeveloper', function () {
    return Inertia::render('BecomeDeveloper');
});


Route::get('/softwares',[SoftwareController::class,'index']  );
Route::get('/SoftwareDetails/{software}', [SoftwareController::class,'show'])->name('software.details');


Route::get('/admin',[DeveloperController::class,'index']);











Route::get('/dashboard', function () {
    return Inertia::render('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

Route::get('/ClientArea/{myInvoices?}',[UserController::class,'index']);
Route::get('/ClientArea/{Settings}',[UserController::class,'index']);
Route::get('/ClientArea/{Orders}',[UserController::class,'index']);
Route::get('/ClientArea/{MySoftware}',[UserController::class,'index']);

// ->name('user.index')



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::post('sendEmail', [MailController::class, 'sendEmail'])->name('send');
// Route::get('TBDeveloper', [UserController::class, 'getAllTBDeveloper'])->name('TBDeveloper');
Route::get('AdminArea', [UserController::class, 'getAllTBDeveloper'])->name('TBDeveloper');
Route::get('updateRole/{id}', [UserController::class, 'updateRole'])->name('updateRole');
