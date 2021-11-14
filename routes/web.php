<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
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

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/employee-create',[EmployeesController::class,'index'])->name('employee_view');
    Route::post('/employee-create',[EmployeesController::class,'create'])->name('create_employee');
    Route::get('/employee-view',[EmployeesController::class,'view'])->name('view_employee');
    
    
    Route::get('/employee-update/{id}',[EmployeesController::class,'edit'])->name('edit_employee');
    Route::post('/employee-update/{id}',[EmployeesController::class,'update'])->name('update_employee');
    Route::get('/employee-delete/{id}',[EmployeesController::class,'destroy'])->name('delete_employee');

    Route::get('/company-create',[CompaniesController::class,'index'])->name('company_view');
    Route::post('/company-create',[CompaniesController::class,'create'])->name('create_company');
    Route::get('/company-view',[CompaniesController::class,'ViewCompany'])->name('view_company');
    Route::get('/company-update/{id}',[CompaniesController::class,'edit'])->name('edit_company');
    Route::post('/company-update/{id}',[CompaniesController::class,'update'])->name('update_company');
    Route::get('/company-delete/{id}',[CompaniesController::class,'destroy'])->name('delete_company');
});

Route::get('/dashboard', function () {
    return view('admin_penal.dashbord');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
