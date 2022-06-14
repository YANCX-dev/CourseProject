<?php

use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\MarkController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\UserInfoController;
use App\Http\Controllers\adminDeleteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CruisesController;


Route::get('/', [NewsController::class, 'index'])->name('home');
Route::resource('news', NewsController::class);
Route::get('/cruises', [CruisesController::class, 'showCruises'])->name('cruises');
Route::get('/cruises/online', [CruisesController::class, 'onlineCruises'])->name('onlineCruises');
Route::get('/cruises/all', [CruisesController::class, 'allcruises']);
//Order Controller
Route::get('/order/{cruise}', [OrderController::class, 'index'])->name('orderForm');
Route::post('/order/store/{cruise}', [OrderController::class, 'store'])->name('orderStore');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); // Auth\LoginController@showLoginForm
Route::post('login', [LoginController::class, 'login']); //'Auth\LoginController@login
Route::get('logout', [LoginController::class, 'logout'])->name('logout'); // Auth\LoginController@logout

Route::get('/passenger-info/{page}',[PageController::class,'show'])->name('showInfoPage');
//Auth::routes();
// Registration Routes...
// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
//Используюмые в JS
Route::get('/cruises/all', [CruisesController::class, 'allcruises']);
Route::get('/cruise/{cruise}', [CruisesController::class, 'cruiseById']);
Route::get('/cruise-places/{id}', [OrderController::class,'getFreeCruisePlaces'])->name('getFreeCruisePlaces');

//Dashbord
Route::middleware('auth')->group(function () {
    Route::get('/add-delete-Page', [AdminDeleteController::class,'index'])->name('deletePage');
    Route::get('/add-Page', [App\Http\Controllers\Admin\AddPageController::class,'index'])->name('AddPage');
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
    Route::post('/newDest', [DestinationController::class, 'store'])->name("addDest");
    Route::post('/new-Route', [RouteController::class, 'store'])->name('addRoute');
    Route::post('/new-Cruise', [CruisesController::class, 'store'])->name('addCruise');
    Route::post('/new-Mark', [MarkController::class, 'store'])->name('addMark');
    Route::post('/new-Driver', [DriverController::class, 'store'])->name('addDriver');
    Route::post('/new-Bus', [BusController::class, 'store'])->name('addBus');



    Route::get('/destination-control',[DestinationController::class,'index'])->name('destination.control');
    Route::get('/bus-control',[BusController::class,'index'])->name('bus.control');
    Route::get('/route-control',[RouteController::class,'index'])->name('route.control');
    Route::get('/cruise-control',[App\Http\Controllers\Admin\CruiseController::class,'index'])->name('cruise.control');
    Route::get('/driver-control',[DriverController::class,'index'])->name('driver.control');

    //Просмотр информации
    Route::get('/admin-Cruises', [CruisesController::class, 'adminCruises'])->name('admin.cruises');
    Route::get('/user-info', [UserInfoController::class,'index'])->name('user.info');
    Route::post('/admin-user', [DashboardController::class, 'userInfo'])->name('adminUser');
    Route::delete('/add-delete-Cruise/{id}', [App\Http\Controllers\Admin\CruiseController::class, 'destroy'])->name('deleteCruiseById');
    //Удаление
    Route::get('/add-delete-Dest/{destination}', [DestinationController::class, 'destroy'])->name('deleteDest');
    Route::get('/delete-Route/{route}', [RouteController::class, 'destroy'])->name('deleteRoute');
    Route::get('/delete-Cruise/{cruise}', [CruisesController::class,'destroy'])->name('deleteCruise');
    //Удаление 2 столбец
    Route::post('/add-delete-Driver', [DriverController::class,'destroy'])->name('deleteDriver');
    Route::get('/bus-delete/{bus}', [BusController::class,'destroy'])->name('deleteBus');
    Route::post('/delete-Mark', [MarkController::class,'destroy'])->name('deleteMark');
    Route::post('/delete-pageInfo', [PageController::class,'destroy'])->name('deleteInfoPage');

    //Пэйдж создания новостей, категорий и информации для пассажиров
    Route::get('/create-Info',[InfoController::class,'index'])->name('createInfo');
    //Создание новостей
    Route::post('/add-New', [NewsController::class, 'store'])->name('addNew');
    //Удаление новости
    Route::get('/add-delete-New/{news}',[NewsController::class,'destroy'])->name('newDelete');
    //Добавление категории
    Route::post('/add-Article', [PageController::class, 'store'])->name('addArticle');
    //Удаление категории
    Route::post('/add-delete-Article', [PageController::class,'destroy'])->name('deleteArticle');


});



