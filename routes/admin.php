<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

Route::group(['prefix' => 'admin'], function () {

	Route::get('/', [HomeController::class, 'index'])->name('admin.root');
	Route::get('/login', [HomeController::class, 'login'])->name('admin.login');
	Route::post('/login', [HomeController::class, 'login_attempt'])->name('admin.login.attempt');

	Route::group(['middleware' => 'auth'], function () {

		Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
		Route::post('/logout', [HomeController::class, 'logout'])->name('admin.logout');
		
		Route::get('/general_information', [HomeController::class, 'general_information'])->name('admin.page.general_information');
		Route::post('/general_information', [HomeController::class, 'general_information_update'])->name('admin.page.general_information.update');
		
		Route::get('/pages/about', [HomeController::class, 'about'])->name('admin.page.about');
		Route::post('/pages/about', [HomeController::class, 'about_page_update'])->name('admin.page.about.update');
	


	});

});
