<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BaseController1;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use Faker\Provider\Base;
use App\Models\Customer;

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
// Route::get('/{name?}',function($name = null) {
//     $demo = "<h5>This is the HomePage.</h5>";
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });

// Route::get('/about', function () {
// return view('abut');
// });


// Route::get('/', [BaseController1::class, 'index']);
// Route::get('/about', 'App\http\Controllers\BaseController1@about');   
// Route::get('/courses', SingleActionController::class);
// Route::get('/courses', 'App\http\Controllers\BaseController1@courses');
// Route::resource('/photo', PhotoController::class);

    // Route::get('/customer', function(){
    //     $customers = Customer::all();
    //     echo "<pre>";
    //     print_r($customers->toArray());
    // }); 
    Route::get('/', function () {
        return view('home');
    });
    
    // Route::get('/customer-view', [CustomerController::class, 'view']);
    Route::get('/register', [RegistrationController::class, 'index']);
    Route::post('/register', [RegistrationController::class, 'register']);
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('/customer/remove/{id}', [CustomerController::class, 'remove'])->name('customer.remove');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::get('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.Update');
    Route::get('/customer', [CustomerController::class, 'view']);
    Route::post('/customer', [CustomerController::class, 'store']);


    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
