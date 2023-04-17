<?php

use App\Http\Controllers\BusinessCategoryController;
use App\Http\Controllers\GatewayController;
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
use App\Http\Controllers\KeyController;
use App\Http\Controllers\KeyStatusController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ServerController;

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
Route::get('/AdminArea',[SoftwareController::class,'AllSoftware']);

Route::get('/SoftwareDetails/{software}', [SoftwareController::class,'show'])->name('software.details');


Route::get('/admin',[DeveloperController::class,'index'])->middleware(['auth', 'verified']);



Route::get('/dashboard', function () {
    return Inertia::render('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

Route::get('/ClientArea/{myInvoices?}',[UserController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/ClientArea/{Settings}',[UserController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/ClientArea/{Orders}',[UserController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/ClientArea/{MySoftware}',[UserController::class,'index'])->middleware(['auth', 'verified']);

// ->name('user.index')



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::post('sendEmail', [MailController::class, 'sendEmail'])->name('send')->middleware(['auth', 'verified']);
// Route::get('TBDeveloper', [UserController::class, 'getAllTBDeveloper'])->name('TBDeveloper');
Route::get('AdminArea', [UserController::class, 'getAllTBDeveloper'])->name('TBDeveloper')->middleware(['auth', 'verified']);
Route::get('/DeveloperArea',[SoftwareController::class,'AllDeveloperSoftware']);

Route::put('updateRole/{id}', [UserController::class, 'updateRole'])->name('updateRole')->middleware(['auth', 'verified']);


Route::get('/softwares',[SoftwareController::class,'index']  )->name('softwares.index');
Route::get('/softwares/create', [SoftwareController::class, 'create'])->name('softwares.create');
Route::post('/addsoftwares', [SoftwareController::class, 'store']);
Route::get('/softwares/{software}/edit', [SoftwareController::class, 'edit'])->name('softwares.edit');
Route::put('/softwares/{id}', [SoftwareController::class, 'update']);
Route::delete('/software/{software}', [SoftwareController::class, 'destroy'])->name('softwares.destroy');


Route::post('/orders', [OrderController::class, 'store']);


Route::post('/addBusinessCategory', [BusinessCategoryController::class, 'store']);
Route::delete('/BusinessCategory/{BusinessCategory}', [BusinessCategoryController::class, 'destroy'])->name('BusinessCategory.destroy');
Route::put('/BusinessCategory/{BusinessCategory}', [BusinessCategoryController::class, 'update'])->name('BusinessCategory.update');


Route::post('/addServer', [ServerController::class, 'store']);
Route::delete('/server/{server}', [ServerController::class, 'destroy'])->name('server.destroy');
Route::put('/server/{server}', [ServerController::class, 'update'])->name('server.update');


Route::post('/addKeyStatus', [KeyStatusController::class, 'store']);
Route::delete('/KeyStatus/{KeyStatus}', [KeyStatusController::class, 'destroy'])->name('KeyStatus.destroy');
Route::put('/KeyStatus/{KeyStatus}', [KeyStatusController::class, 'update'])->name('KeyStatus.update');


Route::post('/addOrderStatus', [OrderStatusController::class, 'store']);
Route::delete('/OrderStatus/{OrderStatus}', [OrderStatusController::class, 'destroy'])->name('OrderStatus.destroy');
Route::put('/OrderStatus/{OrderStatus}', [OrderStatusController::class, 'update'])->name('OrderStatus.update');


Route::post('/addKey', [KeyController::class, 'store']);
Route::delete('/key/{Key}', [KeyController::class, 'destroy'])->name('Key.destroy');
Route::put('/key/{Key}', [KeyController::class, 'update'])->name('Key.update');


Route::post('/addLicence', [LicenceController::class, 'store']);
Route::delete('/licence/{licence}', [LicenceController::class, 'destroy'])->name('licence.destroy');
Route::put('/licence/{licence}', [LicenceController::class, 'update'])->name('licence.update');


Route::post('/addGateway', [GatewayController::class, 'store']);
Route::delete('/gateway/{gateway}', [GatewayController::class, 'destroy'])->name('gateway.destroy');
Route::put('/gateway/{gateway}', [GatewayController::class, 'update'])->name('gateway.update');


// Route::get('SoftwareDetails', [SoftwareController::class, 'getOrderData'])->name('SoftwareDetails')->middleware(['auth', 'verified']);

