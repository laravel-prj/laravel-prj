<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\TopAdmin;
use App\Http\Controllers\admin\ItemController;
use App\Http\Controllers\admin\TypeController;
use App\Http\Controllers\admin\OrderController;

use App\Http\Controllers\customer\TopController;
use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\CheckOutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/userCC', function (Request $request) {
//     // return $request->user();
//     return 123;
// });

Route::get('admin-mo/testGet/{id}', [TopAdmin::class, 'testGet']);
Route::get('admin-mo/testGetAll', [TopAdmin::class, 'testGetAll']);
Route::post('admin-mo/testPost', [TopAdmin::class, 'testPost']);
Route::put('admin-mo/testPut/{id}', [TopAdmin::class, 'testPut']);
Route::delete('admin-mo/testDelete/{id}', [TopAdmin::class, 'testDelete']);


Route::post('admin-mo/item', [ItemController::class, 'create']);
Route::get('admin-mo/item/{id}', [ItemController::class, 'getView']);

Route::post('ajaxAddToCart', [CartController::class, 'ajaxAddToCart']);
Route::get('ajaxGetItemById', [TopController::class, 'ajaxGetItemById']);
Route::delete('ajaxRemoveItemById', [CartController::class, 'ajaxRemoveItemById']);
Route::post('ajaxUpdateCart', [CartController::class, 'ajaxUpdateCart']);
Route::get('ajaxGetAllItem', [CartController::class, 'ajaxGetAllItem']);
Route::get('ajaxGetSizeById', [TopController::class, 'ajaxGetSizeById']);

Route::get('ajaxGetTypeByBrandId', [ItemController::class, 'ajaxGetTypeByBrandId']);
Route::get('ajaxSearchBrandById', [ItemController::class, 'ajaxSearchBrandById']);
Route::get('ajaxSearchTypeById', [ItemController::class, 'ajaxSearchTypeById']);
Route::get('ajaxSearchName', [ItemController::class, 'ajaxSearchName']);

Route::get('ajaxGetBrandType', [TypeController::class, 'ajaxGetBrandType']);

Route::post('ajaxUpdateStatusOrder', [OrderController::class, 'ajaxUpdateStatusOrder']);
Route::post('ajaxSearchOrder', [OrderController::class, 'ajaxSearchOrder']);

// test xoa session
Route::get('ajaxDeleteSession', [CartController::class, 'ajaxDeleteSession']);

