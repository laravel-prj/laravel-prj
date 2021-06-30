<?php

use Illuminate\Support\Facades\Route;
// // customer
// use App\Http\Controllers\Top;
// use App\Http\Controllers\Shop;
// admin
use App\Models\HasFactory;
use App\Http\Controllers\admin\TopAdmin;
use App\Http\Controllers\admin\AuthAdmin;
use App\Http\Controllers\admin\BandController;
use App\Http\Controllers\admin\TypeController;
// customer
use App\Http\Controllers\customer\TopController;
use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\CheckOutController;
use App\Http\Controllers\customer\AuthCustomerController;
use App\Http\Controllers\Controller;


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

//Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [Top::class, 'index']);
// Route::get('shop', [Shop::class, 'index']);

Route::prefix('admin-auth')->group(function () {
    Route::get('/', [AuthAdmin::class, 'getLogin']);
    Route::post('/', [AuthAdmin::class, 'postLogin']);
    Route::get('logout', [AuthAdmin::class, 'getLogout']);
});

// Route::prefix('admin-mo')->group(['middleware' => 'verfiy-account-admin'],function () {
//     Route::get('/', [TopAdmin::class, 'getIndex']);
// });

Route::group(['middleware' => ['verfiy-account-admin'], 'prefix' => 'admin-mo'], function () {
    Route::get('/', [TopAdmin::class, 'index']);
    Route::get('item', [TopAdmin::class, 'index']);
    Route::get('create-item', [TopAdmin::class, 'getCreateItem']);
    Route::post('create-item', [TopAdmin::class, 'postCreateItem']);
    Route::get('index', [TopAdmin::class, 'index']);
    Route::get('admin-mng', [TopAdmin::class, 'admin']);
    Route::get('customer-mng', [TopAdmin::class, 'customer']);

    Route::prefix('brand')->group(function () {
        Route::get('index', [BandController::class, 'index']);
        Route::get('update/{id}', [BandController::class, 'edit']);
        Route::post('update/{id}', [BandController::class, 'update']);
        Route::get('create', [BandController::class, 'create']);
        Route::post('create', [BandController::class, 'create']);
        Route::get('delete/{id}', [BandController::class, 'delete']);
    });

    Route::prefix('itemType')->group(function () {
        Route::get('index', [TypeController::class, 'index']);
        Route::get('update/{id}', [TypeController::class, 'edit']);
        Route::post('update/{id}', [TypeController::class, 'update']);
        Route::get('getCreate', [TypeController::class, 'getCreate']);
        Route::post('create', [TypeController::class, 'create']);
        Route::get('delete/{id}', [TypeController::class, 'delete']);
    });
});

Route::get('/', [TopController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckOutController::class, 'checkout'])->middleware('verfiy-account-customer');
Route::post('/order', [CheckOutController::class, 'Order'])->middleware('verfiy-account-customer');
Route::get('/login', [AuthCustomerController::class, 'getLogin']);
Route::post('/login', [AuthCustomerController::class, 'postLogin']);
Route::get('/logout', [AuthCustomerController::class, 'getLogout']);
Route::get('/shop', [TopController::class, 'shop']);
Route::get('/detail/{id}', [TopController::class, 'detail']);
Route::get('/about', [TopController::class, 'about']);
Route::get('/contact', [TopController::class, 'contact']);
Route::get('/register', [TopController::class, 'register']);
Route::post('/post_register', [TopController::class, 'post_register']);

Route::get('/band/{id}', [TopController::class, 'band']);
Route::get('/band/type/{id}', [TopController::class, 'band']);
