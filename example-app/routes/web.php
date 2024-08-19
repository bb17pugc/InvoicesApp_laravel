<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });


Route::group(['prefix' => 'admin','middleware' => ['auth', 'IsUrlAllowed']], function () { 
    Route::get('/write-password', [App\Http\Controllers\Admin\AdminsController::class, 'writePassword'])->name('write-password');

    Route::group(['prefix' => '{user_id}'], function () { 

        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'Dashboard'])->name('dashboard');

        Route::group(['prefix' => 'users'], function () { 
            Route::post('/add', [App\Http\Controllers\Admin\AdminsController::class, 'AddOrUpdate'])->name('add-user');
            Route::get('/add', [App\Http\Controllers\Admin\AdminsController::class, 'AddOrUpdate'])->name('add-user');            
            Route::get('/', [App\Http\Controllers\Admin\AdminsController::class, 'Users'])->name('users');
            Route::get('/delete', [App\Http\Controllers\Admin\AdminsController::class, 'Delete'])->name('user-delete');
            Route::get('/user-details', [App\Http\Controllers\Admin\UsersController::class, 'UserDetails'])->name('user-details');
            Route::get('/change-user-status', [App\Http\Controllers\Admin\UsersController::class, 'ChangeUserStatus'])->name('change-user-status');
     
        });

        Route::group(['prefix' => 'wallet'], function () { 
            Route::post('/add', [App\Http\Controllers\Admin\WalletsController::class, 'Form'])->name('add-wallet');
            Route::get('/add', [App\Http\Controllers\Admin\WalletsController::class, 'Form'])->name('add-wallet-post');            
        });

        Route::group(['prefix' => 'settings'], function () { 
            Route::post('/add', [App\Http\Controllers\Admin\SettingsController::class, 'Form'])->name('add-settings');
            Route::get('/add', [App\Http\Controllers\Admin\SettingsController::class, 'Form'])->name('add-settings-post');            
        });

        
    }); 
});


Route::group(['prefix' => 'bookers','middleware' => 'auth'], function () { 
    
    Route::group(['prefix' => '{user_id}'], function () { 

        Route::get('/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'Dashboard'])->name('booker-dashboard');
        Route::get('/history', [App\Http\Controllers\Customer\DashboardController::class, 'History'])->name('history-booker');
        Route::group(['prefix' => 'files'], function () { 
            Route::post('/upload-file', [App\Http\Controllers\Customer\FilesController::class, 'UploadFile'])->name('upload-csv-file');
            Route::get('/upload-file', [App\Http\Controllers\Customer\FilesController::class, 'UploadFile'])->name('upload-csv-file');            
            Route::get('/results/{payment_id}', [App\Http\Controllers\Customer\FilesController::class, 'Result'])->name('upload-csv-file-result');            
        
        });
        
        
    }); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
