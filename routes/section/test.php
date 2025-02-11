<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\ModeltestController;
use App\Http\Controllers\Test\FormController;
use App\Http\Controllers\Test\RoleController;
use App\Models\User;

Route::get('/test-models', [ModeltestController::class, 'checkModels']);

Route::get('/testapi/{id?}', function ($id = null) {
    //https://dummyjson.com/posts
    // use this api for testing
    $response = Http::get('https://dummyjson.com/posts' . ($id ? "/$id" : ''));
    $mypost = $response->json();

    return response()->json($mypost);
});

Route::get('/userapi/{id?}', function ($id = null) {
    $users = User::all();
    return response()->json($users);
});

Route::get('/routetest', function () {
    return view('adminhome');
});

Route::get('/vendor', [FormController::class, 'index']);
Route::post('/testform', [FormController::class, 'productStore'])->name('StoreProduct');
Route::post('/vendor', [FormController::class, 'vendorStore'])->name('vendorStore');
Route::post('/vendor/update-code/{vendor}', [FormController::class, 'updateVendorCode'])->name('updateVendorCode');
Route::get('/vendor/edit/{vendor}', [FormController::class, 'editVendor'])->name('editVendor');

Route::get('/role', [RoleController::class, 'index']);