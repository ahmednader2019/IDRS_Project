<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\DriverInfController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Mail\addInf;
use App\Models\DriverInf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/addDriver' , [DriverInfController::class , 'addDriver']);
    Route::match(['get', 'post'], '/step2', [DriverInfController::class , 'step2']);
    Route::match(['get', 'post'], '/step3', [DriverInfController::class , 'step3']);
    Route::match(['get', 'post'], '/step4', [DriverInfController::class , 'step4']);
});

Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('dashboard');
// });

            // Delete Driver Information (destroy function inside Driver ) & index
Route::resource('Driver', DriverInfController::class);

           // Show Driver Informations
Route::get('/driverInf' , [DriverInfController::class , 'showDriver']);

          // Show Car Informations
Route::get('/carInf' , [DriverInfController::class , 'showCar']);

         // Show Medical Informations
Route::get('/healthInf' , [DriverInfController::class , 'show_health_condition']);

Route::post('/save' , [DriverInfController::class , 'store']);


           // roles and permissions routes
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);
    });

            // Edit Driver information
Route::get('/edit_driver/{id}' , [DriverInfController::class , 'edit_driver']);
Route::post('/update_driver'  , [DriverInfController::class , 'update_driver'] );


            // Edit Car information
Route::get('/edit_car/{id}' , [DriverInfController::class , 'edit_car']);
Route::post('/update_car'  , [DriverInfController::class , 'update_car'] );


            // Edit Health information
Route::get('/edit_health/{id}' , [DriverInfController::class , 'edit_health']);
Route::post('/update_health'  , [DriverInfController::class , 'update_health']);


         // Show more info Details
Route::get('/Details/{id}' , [DriverInfController::class , 'fetch']);

          // Show urgent cars data
Route::get('/urgent' , [DriverInfController::class , 'urgent']);

          // Show urgent cars data
Route::get('/warning' , [DriverInfController::class , 'warning']);

        // show safe cars
Route::get('/safe' , [DriverInfController::class , 'safe']);


         // Show Control Page
Route::get('/control' , [DriverInfController::class , 'control']);

     // Show Control Car page
 Route::get('/ControlCar/{id}' , [DriverInfController::class , 'ControlCar']);

         // Change Status
 Route::get('/ChangeStatus/{id}' , [DriverInfController::class , 'ChangeStatus']);

       // a function to bring the location through lat and long variables
Route::get('/location/{id}' , [DriverInfController::class , 'location']);

      // sms
Route::get('send-sms-notification/{name}/{number}/{location}/{email}/{lat}/{long}',[NotificationController::class ,'send']);

   // show more info page
Route::get('MarkAsRead_all',[DriverInfController::class,'MarkAsRead_all'])->name('MarkAsRead_all');


// Route::post('/save' , [DriverInfController::class , 'store']);
// Route::get('test' ,[PhotoController::class,'index']);
Route::post('/upload-photos', [PhotoController::class,'upload'])->name('upload-photos');

     /// mail route
// Route::get('/send', function () {
//    Mail::to('ranaelmazny21@gmail.com')->send(new addInf('rana Elmazeny','1'));
//    return "sending";
// });

// Route::get('/photos/download/{filename}', [PhotoController::class,'downloadByName'])->name('photos.download.name');


// Route::post('/location', [LocationController::class,'store']);


// Route::get('show-user-location-data', [LocationController::class, 'index']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
