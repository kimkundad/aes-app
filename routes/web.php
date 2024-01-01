<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\CusdayController;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/13onground', function () {
    return view('13onground');
});

Route::get('/13onground_2', function () {
    return view('13onground_2');
});

Route::get('/13onground_3', function () {
    return view('13onground_3');
});

Route::get('/13onground_4', function () {
    return view('13onground_4');
});

Route::get('/13online', function () {
    return view('13online');
});

Route::get('/13online_2', function () {
    return view('13online_2');
});

Route::get('/13online_3', function () {
    return view('13online_3');
});

Route::get('/13online_4', function () {
    return view('13online_4');
});


Route::get('/14onground', function () {
    return view('14onground.14onground');
});

Route::get('/14onground_2', function () {
    return view('14onground.14onground_2');
});

Route::get('/14onground_3', function () {
    return view('14onground.14onground_3');
});

Route::get('/14onground_4', function () {
    return view('14onground.14onground_4');
});


Route::get('/14online', function () {
    return view('14online.14online');
});

Route::get('/14online_2', function () {
    return view('14online.14online_2');
});

Route::get('/14online_3', function () {
    return view('14online.14online_3');
});

Route::get('/14online_4', function () {
    return view('14online.14online_4');
});



Route::get('/mail', function () {
    return view('emails.myTestMail');
});

Route::get('/mail2', function () {
    return view('emails.myTestMail2');
});

Route::post('api/post_add_data', [App\Http\Controllers\HomeController::class, 'post_add_data']);
Route::post('api/post_add_data_14', [App\Http\Controllers\HomeController::class, 'post_add_data_14']);

Route::group(['middleware' => ['UserRole:superadmin|admin']], function() {

    Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::resource('/admin/MyUser', MyUserController::class);
    Route::post('/api/api_post_status_MyUser', [App\Http\Controllers\MyUserController::class, 'api_post_status_MyUser']);
    Route::get('api/del_MyUser/{id}', [App\Http\Controllers\MyUserController::class, 'del_MyUser']);
    Route::get('admin/users_search/', [App\Http\Controllers\MyUserController::class, 'users_search']);

    Route::resource('/admin/cusday', CusdayController::class);
    Route::get('api/get_cusday', [App\Http\Controllers\CusdayController::class, 'get_cusday']);
    Route::get('api/del_cusday/{id}', [App\Http\Controllers\CusdayController::class, 'del_cusday']);

    Route::get('export/csv', [App\Http\Controllers\CusdayController::class, 'exportCSVFile'])->name('export.csv');
    
});
