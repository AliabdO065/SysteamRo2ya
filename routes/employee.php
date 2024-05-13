<?php

use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\WorkingHourController;
use App\Http\Controllers\fronted\EmployeesController;
use Illuminate\Support\Facades\Route;




// front
Route::group(['middleware'=>['auth', 'employee'] ], function () {
    
    // Employees pages
    Route::get('/employees', [EmployeesController::class, 'index'])->name('employeesHome');
    Route::get('/employees/report', [EmployeesController::class, 'report'])->name('report');
    Route::get('/employees/workHours', [EmployeesController::class, 'workHours'])->name('workHours');
    Route::get('/employees/team', [EmployeesController::class, 'team'])->name('team');
    Route::get('/employees/whoWork', [EmployeesController::class, 'whoWork'])->name('whoWork');

    Route::post('employees/start-timer', [WorkingHourController::class, 'startTimer'])->name('start.timer');
    Route::post('employees/stop-timer', [WorkingHourController::class, 'stopTimer'])->name('stop.timer');

    //reports
    Route::post('employees/storeReport', [ReportController::class,'store'])->name('storeReport');

    //customer
    Route::get('employees/customers', [EmployeesController::class, 'index'])->name('customers');
    Route::post('employees/storeOpinion', [EmployeesController::class,'storeOpinion'])->name('storeOpinion');
    Route::post('employees/storeSuggetion', [EmployeesController::class,'storeSuggetion'])->name('storeSuggetion');

});


// backed 
// Route::group(['prefix'=>'emp','as'=>'fronted.','middleware'=>['auth', 'admin']], function () {
//working hours

// });


