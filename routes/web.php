<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HeadController;

use App\Http\Middleware\isGuest;
use App\Http\Middleware\isLogin;
use App\Http\Middleware\isStaff;
use App\Http\Middleware\isHead;
use App\Http\Middleware\isUser;

Route::get('/search', [ReportController::class, 'provinceSearch'])->name('search.province');

Route::get('/pages/report' , [PagesController::class, 'report'])->name('report');
//vote
Route::middleware(isLogin::class)->post('/vote/{reportId}', [ReportController::class, 'toggleVote'])->name('vote.toggle');

Route::post('/increment-viewers/{id}', [ReportController::class, 'incrementViewers']);

Route::middleware(isGuest::class)->group(function () {

    Route::get('/', [PagesController::class, 'index'])->name('landingpage');

    Route::prefix('/accounts')->group(function () {
    // register
        Route::get('/register', [AccountController::class, 'showRegister'])->name('register');
        Route::post('/register', [AccountController::class, 'loadRegister'])->name('register.store');
    // login
        Route::get('/login', [AccountController::class, 'showLogin'])->name('login');
        Route::post('/login', [AccountController::class, 'loadLogin'])->name('login.store');
    });
});

Route::middleware(isLogin::class)->group(function () {
    // logout
    Route::get('/accounts/logout', [AccountController::class, 'logout'])->name('logout');

    Route::middleware(isUser::class)->group(function () {
    // Pengaduan
    Route::post('/pages/report' , [ReportController::class, 'storeReport'])->name('report.store');
    //Bikin Komentar
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    Route::get('/accounts/myreport', [ReportController::class, 'myreport'])->name('myreport');
    Route::delete('/accounts/myreport/{id}', [ReportController::class, 'deleteReport'])->name('reports.delete');
    



    });
    
    //untuk staff
    Route::middleware(isStaff::class)->group(function () {
        Route::get('/staff/reports', [StaffController::class, 'userReports'])->name('userreports');

        //reject
        Route::post('/staff/reports/{id}', [StaffController::class, 'reject'])->name('reject');

        Route::get('/staff/process/{id}', [StaffController::class, 'showProcess'])->name('process.show');

        Route::patch('/staff/process/done/{id}', [StaffController::class, 'done'])->name('progress.done');

        Route::delete('/staff/process/delete/{id}', [StaffController::class, 'deleteProgress'])->name('progress.delete');
        
        Route::post('/staff/process/update/{id}', [StaffController::class, 'createProgress'])->name('progress.create');

        Route::get('/reports/export', [StaffController::class, 'exportall'])->name('reports.export.all');
        Route::get('/reports/export/date', [StaffController::class, 'exportbydate'])->name('reports.export.date');
        });
    
    //untuk headstaff
    Route::middleware(isHead::class)->group( function () {
        Route::get('/staff/statistics', [HeadController::class, 'statistics'])->name('statistics');
        Route::get('/staff/management', [HeadController::class, 'management'])->name('accounts');

        Route::post('/staff/management', [HeadController::class, 'makeStaff'])->name('staff.create');

        Route::delete('/delete/{id}', [HeadController::class, 'destroy'])->name('staff.delete');

        Route::patch('/staff/reset/{id}', [HeadController::class, 'reset'])->name('staff.reset');
    });

});





