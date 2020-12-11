<?php

use Illuminate\Support\Facades\Route;


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
    if (!Auth::check()) {
        return redirect("/login");
    } else{
        // main page when logined
        return redirect("/employees");
    }
});

Auth::routes();

Route::resources([
    'employees' => \App\Http\Controllers\EmployeeController::class,
    'positions' => \App\Http\Controllers\PositionController::class,
]);


