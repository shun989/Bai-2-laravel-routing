<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('/index', function () {
        return view('modules.customer.index');
    })->name('index');

    Route::get('/create', function () {
        return view('modules.customer.create');
    })->name('create');

    Route::post('/store', function (Request $request){
        $customerName = $request->input('customerName');
        $phone = $request->input('phone');
        $email = $request->input('email');
        return view('modules.customer.index', compact('customerName', 'phone', 'email'));//        return view('index', compact('customerName', 'phone', 'email'));
//        $url = \route('index');
//        return redirect($url);
    });

    Route::get('{id}/show', function () {
        return view('modules.customer.show');
    });

    Route::get('{id}/edit', function () {
        return view('modules.customer.edit');
    });

    Route::patch('{id}/update', function () {
        echo "update thanh cong";
    });

    Route::delete('{id}/delete', function () {

    });
});

Route::get('customers', [CustomerController::class, 'index']);

Route::get('creates', [CustomerController::class, 'create']);

