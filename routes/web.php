<?php

use App\Http\Livewire\Rtl;

use App\Http\Livewire\Tables;
use App\Http\Livewire\Billing;

use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Admin\Config;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Tasks\Tasks;
use App\Http\Livewire\Admin\Users\Users;

use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Admin\Quotes\Quotes;
use App\Http\Livewire\Auth\ForgotPassword;

use App\Http\Controllers\SettingController;
use App\Http\Livewire\Admin\Tasks\EditTasks;
use App\Http\Livewire\Admin\Tasks\ViewTasks;
use App\Http\Livewire\Admin\Users\EditUsers;
use App\Http\Livewire\Admin\Quotes\EditQuote;

use App\Http\Livewire\Admin\Quotes\ViewQuote;
use App\Http\Livewire\Admin\Users\ViewUsersE;
use App\Http\Livewire\Admin\Users\ViewUsersI;

use App\Http\Livewire\Admin\Mantains\Mantains;
use App\Http\Livewire\Admin\Products\Products;
use App\Http\Livewire\Admin\Services\Services;

use App\Http\Controllers\Base\DashboardController;
use App\Http\Livewire\Admin\Mantains\EditMantains;
use App\Http\Livewire\Admin\Mantains\ViewMantains;

use App\Http\Livewire\Admin\Products\EditProducts;
use App\Http\Livewire\Admin\Products\ViewProducts;
use App\Http\Livewire\Admin\Services\EditServices;

use App\Http\Livewire\Admin\Services\ViewServices;
use App\Http\Controllers\Profiles\ProfileController;
use App\Http\Controllers\Users\UsersDatatableController;

use App\Http\Controllers\Products\ProductController;


// Auth route

    Route::get('/', Login::class)->name('login');
    Route::get('/login', Login::class)->name('login');
    Route::get('/logout', [Logout::class, 'logout'])->name('logout');


    Route::get('/sign-up', SignUp::class)->name('sign-up');
    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

    Route::middleware(['auth'])->group(function () {

     // Admin route
        Route::middleware('can:isAdmin')->group(function () {
        //users
            Route::get('/dashboard', Dashboard::class)->name('dashboard');

            Route::get('/user/{user}', [ProfileController::class, 'show'])->name('show.user');
            Route::get('/edituser/{user}', [ProfileController::class, 'edit'])->name('show.user');
            Route::post('/updateuser', [ProfileController::class, 'update'])->name('update.user');
            Route::get('deleteuser/{id}', [ProfileController::class, 'destroy'])->name('delete.user');

            Route::get('/config', [SettingController::class, 'show'] )->name('configuracion');
            Route::post('/store.setting', [SettingController::class, 'store'] )->name('store.setting');

            Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
            Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
            // Route::get('/rtl', Rtl::class)->name('rtl');
            // Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
            // Route::get('/laravel-user-management', UserManagement::class)->name('user-management');


            //aun no se que hacer con esto
            Route::post('/store.profile', [ProfileController::class, 'store'])->name('store.profile');


            Route::get('/users', Users::class)->name('usuarios');
            Route::get('/getEmployers', [UsersDatatableController::class, 'getEmployers'])->name('datatable.getEmployers');
            Route::get('/getCostumers', [UsersDatatableController::class, 'getCostumers'])->name('datatable.getCostumers');

            Route::get('/view-user', ViewUsersI::class)->name('ver-usuario');
            Route::get('/view-user', ViewUsersE::class)->name('ver-usuario');
            Route::get('/edit-user', EditUsers::class)->name('editar-usuario');

        //productos
            Route::get('/products', [ProductController::class, 'index'] )->name('productos');
            Route::post('/store.product', [ProductController::class, 'store'] )->name('store.product');
            Route::get('/update.product', [ProductController::class, 'update'] )->name('update.product');
            Route::get('/delete.product/{id}', [ProductController::class, 'destroy'] )->name('delete.product');

            Route::get('products.import',[ProductController::class, 'importForm'] )->name('importForm.products');
            Route::post('products.import',[ProductController::class, 'import'] )->name('import.products');
            Route::get('products.export',[ProductController::class, 'export'] )->name('export.products');


        //cotizaciones
            Route::get('/quotes', Quotes::class)->name('cotizaciones');
            Route::get('/edit-quote', EditQuote::class)->name('editar-cotizacion');
            Route::get('/view-quote', ViewQuote::class)->name('ver-cotizacion');

        //actividades
            Route::get('/tasks', Tasks::class)->name('tareas');
            Route::get('/edit-tasks', EditTasks::class)->name('editar-tarea');
            Route::get('/view-tasks', ViewTasks::class)->name('ver-tarea');
        //servicios
            Route::get('/services', Services::class)->name('servicios');
            Route::get('/edit-service', EditServices::class)->name('editar-servicio');
            Route::get('/view-service', ViewServices::class)->name('ver-servicio');
        //mantenimientos
            Route::get('/mantains', Mantains::class)->name('mantenimientos');
            Route::get('/edit-mantain', EditMantains::class)->name('editar-mantenimientos');
            Route::get('/view-mantain', ViewMantains::class)->name('ver-mantenimientos');



        });
     // tecnic tecnico
        Route::middleware('can:isTecni')->group(function () {

            Route::get('/dashboardTecni',  [DashboardController::class, 'tecnico' ])->name('dashboardTecni');

            Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
            Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');

            Route::get('/tasks', Tasks::class)->name('tareas');
            Route::get('/edit-tasks', EditTasks::class)->name('editar-tarea');
            Route::get('/view-tasks', ViewTasks::class)->name('ver-tarea');

            Route::get('/services', Services::class)->name('servicios');
            Route::get('/edit-service', EditServices::class)->name('editar-servicio');
            Route::get('/view-service', ViewServices::class)->name('ver-servicio');

            Route::get('/mantains', Mantains::class)->name('mantenimientos');
            Route::get('/edit-mantain', EditMantains::class)->name('editar-mantenimientos');
            Route::get('/view-mantain', ViewMantains::class)->name('ver-mantenimientos');



        });
     // customer cliente
        Route::middleware('can:isCustomer')->group(function () {

            Route::get('/dashboardClient', [DashboardController::class, 'cliente' ])->name('dashboardClient');



        });

    });




