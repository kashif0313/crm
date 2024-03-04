<?php

use App\Livewire\CreateNewRole;
use App\Livewire\CreateNewUser;
use App\Livewire\Dashboard;
use App\Livewire\EditRole;
use App\Livewire\EditUser;
use App\Livewire\ForgotPassword;
use App\Livewire\Login;
use App\Livewire\permission;
use App\Livewire\RegisterUser;
use App\Livewire\ResetPassword;
use App\Livewire\UsersListing;
use App\Livewire\role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('auth')->group(function(){       //applying middleware on all routes
       //applying controller on all routes that uses same controller
        Route::name('company.')->group(function () {
            Route::get('/dashboard', dashboard::class);
            Route::get('/home', dashboard::class);
            Route::get('/users', UsersListing::class);
            Route::get('/edit', EditUser::class);
            Route::get('/editRole', EditRole::class);
            Route::get('/delete', UsersListing::class);
            Route::get('/roles', role::class);
            Route::get('/newRole', CreateNewRole::class);
            Route::get('/newUser',CreateNewUser::class);
        });
});
Route::middleware('guest')->group(function(){
  
    Route::get('/login', Login::class);
    Route::get('/', Login::class);
    Route::get('login', Login::class)->name('login');
    Route::get('forgotPasword', ForgotPassword::class);
    Route::get('/signup', RegisterUser::class);
    Route::get('resetPassword', ResetPassword::class);
});

 

Route::get('/logout', function(){
    auth()->logout();
    Session::flush();
    toastr()->addSuccess('Goodby :)');
    return redirect('/');
});