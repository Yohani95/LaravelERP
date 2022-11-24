<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CellarController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\CategoriesFinanceController;
use App\Http\Controllers\CertificadosDigitaleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EgressController;
use App\Http\Controllers\IngressController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TypesPrintController;
use App\Http\Controllers\CafController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DteController;
use App\Http\Controllers\SoldProductController;


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class);
    Route::resource('cellars', CellarController::class);
    Route::resource('supplies', SupplyController::class);
    Route::resource('activos', ActivoController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('cafs', CafController::class);
    Route::resource('categories-finances', CategoriesFinanceController::class);
    Route::resource('certificados-digitales', CertificadosDigitaleController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('egresses', EgressController::class);
    Route::resource('ingresses', IngressController::class);
    Route::resource('job-positions', JobPositionController::class);
    Route::resource('payment-methods', PaymentMethodController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('types-prints', TypesPrintController::class);
    Route::resource('users', UserController::class);
    Route::resource('sales', SaleController::class);
    Route::resource('dtes', DteController::class);
    Route::resource('sold-products', SoldProductController::class);
    Route::get('user/profile',function(){return view('user.my-profile');} )->name('user.profile');
});
