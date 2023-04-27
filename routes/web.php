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
})->name('dashboard');

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->middleware(['auth', 'verified']);

Route::get('/home', function () {
    return Inertia::render('home');
});

Route::get('/about', function () {
    return Inertia::render('about');
});
Route::get('/MyInvoices', function () {
    return Inertia::render('MyInvoices');
});

Route::get('/BecomeDeveloper', function () {
    return Inertia::render('BecomeDeveloper');
})->middleware(['auth', 'verified']);

Route::get('/DeveloperArea', function () {
    return Inertia::render('DeveloperArea');
});


Route::get('/softwares',[SoftwareController::class,'index']  );
Route::get('/AdminArea',[SoftwareController::class,'AllSoftware']);

Route::get('/SoftwareDetails/{software}', [SoftwareController::class,'show'])->name('software.details');


Route::get('/admin',[DeveloperController::class,'index'])->middleware(['auth', 'verified']);





Route::middleware('auth')->group(function () {
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/movefile', [SoftwareController::class,'moveFile'] );



Route::post('sendEmail', [MailController::class, 'sendEmail'])->name('send')->middleware(['auth', 'verified']);
 Route::get('AdminArea', [UserController::class, 'getAllTBDeveloper'])->name('TBDeveloper')->middleware(['auth', 'verified']);
Route::get('ClientArea', [OrderController::class, 'AllMyOrders'])->middleware(['auth', 'verified']);

Route::put('updateRole/{id}', [UserController::class, 'updateRole'])->name('updateRole')->middleware(['auth', 'verified']);

Route::get('/DeveloperArea',[SoftwareController::class,'MySoftware']  ) ->middleware(['auth', 'verified']);

Route::get('/AllSoftwares',[SoftwareController::class,'AllSoftwares']);

Route::get('/softwares',[SoftwareController::class,'index']);
// Route::get('/softwares/create', [SoftwareController::class, 'create'])->name('softwares.create');
Route::post('/addSoftwares', [SoftwareController::class, 'store']);
Route::get('/softwares/{software}/edit', [SoftwareController::class, 'edit'])->name('softwares.edit');
Route::put('/software/{id}', [SoftwareController::class, 'update']);
Route::delete('/software/{software}', [SoftwareController::class, 'destroy'])->name('softwares.destroy');

Route::post('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::post('/AllOrders', [OrderController::class, 'AllOrders']);

Route::get('/BusinessCategories', [BusinessCategoryController::class, 'index']);
Route::post('/addBusinessCategory', [BusinessCategoryController::class, 'store']);
Route::delete('/BusinessCategory/{BusinessCategory}', [BusinessCategoryController::class, 'destroy'])->name('BusinessCategory.destroy');
Route::put('/BusinessCategory/{BusinessCategory}', [BusinessCategoryController::class, 'update'])->name('BusinessCategory.update');


Route::get('/servers', [ServerController::class, 'index']);
Route::post('/addServer', [ServerController::class, 'store']);
Route::delete('/server/{server}', [ServerController::class, 'destroy'])->name('server.destroy');
Route::put('/server/{server}', [ServerController::class, 'update'])->name('server.update');

Route::get('/keyStatuses', [KeyStatusController::class, 'index']);
Route::post('/addKeyStatus', [KeyStatusController::class, 'store']);
Route::delete('/KeyStatus/{KeyStatus}', [KeyStatusController::class, 'destroy'])->name('KeyStatus.destroy');
Route::put('/KeyStatus/{KeyStatus}', [KeyStatusController::class, 'update'])->name('KeyStatus.update');

Route::post('/addOrder', [OrderController::class, 'store']);

Route::get('/OrderStatuses', [OrderStatusController::class, 'index']);
Route::post('/addOrderStatus', [OrderStatusController::class, 'store']);
Route::delete('/OrderStatus/{OrderStatus}', [OrderStatusController::class, 'destroy'])->name('OrderStatus.destroy');
Route::put('/OrderStatus/{OrderStatus}', [OrderStatusController::class, 'update'])->name('OrderStatus.update');

Route::put('/ActivateKey/{key}', [KeyController::class, 'ActivateKey']) ;
Route::get('/keys', [KeyController::class, 'index']);
Route::post('/addKey', [KeyController::class, 'store']);
Route::delete('/key/{Key}', [KeyController::class, 'destroy'])->name('Key.destroy');
Route::put('/key/{Key}', [KeyController::class, 'update'])->name('Key.update');

Route::get('/licences', [LicenceController::class, 'index']);
Route::post('/addLicence', [LicenceController::class, 'store']);
Route::delete('/licence/{licence}', [LicenceController::class, 'destroy'])->name('licence.destroy');
Route::put('/licence/{licence}', [LicenceController::class, 'update'])->name('licence.update');

Route::get('/gateways', [GatewayController::class, 'index']);
Route::post('/addGateway', [GatewayController::class, 'store']);
Route::delete('/gateway/{gateway}', [GatewayController::class, 'destroy'])->name('gateway.destroy');
Route::put('/gateway/{gateway}', [GatewayController::class, 'update'])->name('gateway.update');


 
require __DIR__.'/auth.php';

