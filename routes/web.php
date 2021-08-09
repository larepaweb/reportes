<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\Admin\Quotes\Quotes;
use App\Http\Livewire\Admin\Quotes\EditQuote;
use App\Http\Livewire\Admin\Quotes\ViewQuote;

use App\Http\Livewire\Admin\Users\Users;
use App\Http\Livewire\Admin\Users\EditUsers;
use App\Http\Livewire\Admin\Users\ViewUsersI;
use App\Http\Livewire\Admin\Users\ViewUsersE;

use App\Http\Livewire\Admin\Products\Products;
use App\Http\Livewire\Admin\Products\EditProducts;
use App\Http\Livewire\Admin\Products\ViewProducts;

use App\Http\Livewire\Admin\Tasks\Tasks;
use App\Http\Livewire\Admin\Tasks\EditTasks;
use App\Http\Livewire\Admin\Tasks\ViewTasks;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

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

Route::get('/', Login::class)->name('login');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');

    Route::get('/quotes', Quotes::class)->name('cotizaciones');
    Route::get('/edit-quote', EditQuote::class)->name('editar-cotizacion');
    Route::get('/view-quote', ViewQuote::class)->name('ver-cotizacion');

    Route::get('/users', Users::class)->name('usuarios');
    Route::get('/edit-user', EditUsers::class)->name('editar-usuario');
    Route::get('/view-user', ViewUsersI::class)->name('ver-usuario');
    Route::get('/view-user', ViewUsersE::class)->name('ver-usuario');

    Route::get('/products', Products::class)->name('productos');
    Route::get('/edit-product', EditProducts::class)->name('editar-producto');
    Route::get('/view-product', ViewProducts::class)->name('ver-producto');

    Route::get('/tasks', Tasks::class)->name('tareas');
    Route::get('/edit-tasks', EditTasks::class)->name('editar-tarea');
    Route::get('/view-tasks', ViewTasks::class)->name('ver-tarea');

});

