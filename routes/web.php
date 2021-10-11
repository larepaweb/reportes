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

use App\Http\Controllers\Tasks\TaskController;
use App\Http\Livewire\Admin\Mantains\Mantains;
use App\Http\Livewire\Admin\Products\Products;

use App\Http\Livewire\Admin\Services\Services;
use App\Http\Controllers\Quotes\QuoteController;
use App\Http\Controllers\Base\DashboardController;

use App\Http\Livewire\Admin\Mantains\EditMantains;
use App\Http\Livewire\Admin\Mantains\ViewMantains;
use App\Http\Livewire\Admin\Products\EditProducts;

use App\Http\Livewire\Admin\Products\ViewProducts;
use App\Http\Livewire\Admin\Services\EditServices;
use App\Http\Livewire\Admin\Services\ViewServices;

use App\Http\Controllers\Mantains\MantainController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Profiles\ProfileController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Controllers\Users\UsersDatatableController;


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

            Route::get('/user/{user}', [ProfileController::class, 'show'])->name('show.user');
            Route::get('/edituser/{user}', [ProfileController::class, 'edit'])->name('show.user');
            Route::post('/updateuser', [ProfileController::class, 'update'])->name('update.user');
            Route::get('deleteuser/{id}', [ProfileController::class, 'destroy'])->name('delete.user');

            Route::get('users.import',[ProfileController::class, 'importForm'] )->name('importForm.users');
            Route::post('users.import',[ProfileController::class, 'import'] )->name('import.users');

            Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
            Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');

            //aun no se que hacer con esto
            Route::post('/store.profile', [ProfileController::class, 'store'])->name('store.profile');

            Route::get('/users', Users::class)->name('usuarios');
            Route::get('/getEmployers', [UsersDatatableController::class, 'getEmployers'])->name('datatable.getEmployers');
            Route::get('/getCostumers', [UsersDatatableController::class, 'getCostumers'])->name('datatable.getCostumers');

            Route::get('/view-user', ViewUsersI::class)->name('ver-usuario');
            Route::get('/view-user', ViewUsersE::class)->name('ver-usuario');
            Route::get('/edit-user', EditUsers::class)->name('editar-usuario');

        //config

            Route::get('/config', [SettingController::class, 'show'] )->name('configuracion');
            Route::post('/store.setting', [SettingController::class, 'store'] )->name('store.setting');

        //productos
            Route::get('/products', [ProductController::class, 'index'] )->name('productos');
            Route::post('/store.product', [ProductController::class, 'store'] )->name('store.product');
            Route::get('/update.product', [ProductController::class, 'update'] )->name('update.product');
            Route::get('/delete.product/{id}', [ProductController::class, 'destroy'] )->name('delete.product');

            Route::get('products.import',[ProductController::class, 'importForm'] )->name('importForm.products');
            Route::post('products.import',[ProductController::class, 'import'] )->name('import.products');
            Route::get('products.export',[ProductController::class, 'export'] )->name('export.products');


        //cotizaciones
            Route::get('/quotes', [QuoteController::class, 'index'] )->name('cotizaciones');
            Route::post('/store.quote', [QuoteController::class, 'store'])->name('store.quote');
            Route::get('/getQuotes', [QuoteController::class, 'getQuotes'])->name('datatable.getQuotes');

            Route::get('/quote/{quote}', [QuoteController::class, 'show'])->name('show.quote');
            Route::get('/editquote/{quote}', [QuoteController::class, 'edit'])->name('show.quote');
            Route::post('/updatequote', [QuoteController::class, 'update'])->name('update.quote');
            Route::get('deletequote/{id}', [QuoteController::class, 'destroy'])->name('delete.quote');


            Route::get('/edit-quote', EditQuote::class)->name('editar-cotizacion');
            Route::get('/view-quote', ViewQuote::class)->name('ver-cotizacion');
        //actividades
            Route::get('/tasks', [TaskController::class, 'index']  )->name('tareas');
            Route::post('/store.tasks', [TaskController::class, 'store'])->name('store.tasks');

            Route::get('/task/{task}', [TaskController::class, 'show'])->name('show.task');
            Route::get('/edittask/{task}', [TaskController::class, 'edit'])->name('edit.task');

            Route::post('/updatetask', [TaskController::class, 'update'])->name('update.task');

            Route::get('deletetask/{id}', [TaskController::class, 'destroy'])->name('delete.task');
            Route::get('/getTasks', [TaskController::class, 'getTasks'])->name('datatable.getTasks');


            Route::get('/dashboard', [TaskController::class, 'calendar'])->name('dashboard');
            Route::get('/activities', [TaskController::class, 'activities'])->name('activities');
            Route::post('fullcalenderAjax', [TaskController::class, 'ajax']);


            Route::get('/edit-tasks', EditTasks::class)->name('editar-tarea');
            Route::get('/view-tasks', ViewTasks::class)->name('ver-tarea');

        //servicios
            Route::get('/services', [ServiceController::class, 'index'])->name('servicios');
            Route::post('/store.services', [ServiceController::class, 'store'])->name('store.services');

            Route::get('/getServices', [ServiceController::class, 'getServices'])->name('datatable.getServices');
            Route::get('/editservice/{service}', [ServiceController::class, 'edit'])->name('edit.service');
            Route::post('/updateservice', [ServiceController::class, 'update'])->name('update.service');
            Route::get('deleteservice/{id}', [ServiceController::class, 'destroy'])->name('delete.service');



            Route::get('/edit-service', EditServices::class)->name('editar-servicio');
            Route::get('/view-service', ViewServices::class)->name('ver-servicio');
        //mantenimientos
            Route::get('/mantains', [MantainController::class, 'index'])->name('mantenimientos');
            Route::post('/store.mantains', [MantainController::class, 'store'])->name('store.mantains');


            Route::get('/edit-mantain', EditMantains::class)->name('editar-mantenimientos');
            Route::get('/view-mantain', ViewMantains::class)->name('ver-mantenimientos');



        });


     // tecnic tecnico
        Route::middleware('can:isTecni')->group(function () {

            Route::get('/dashboardTecni',  [DashboardController::class, 'tecnico' ])->name('dashboardTecni');

        //actividades
            // Route::get('/tasks', [TaskController::class, 'index']  )->name('tareas');
            // Route::post('/store.tasks', [TaskController::class, 'store'])->name('store.tasks');

            // Route::get('/task/{task}', [TaskController::class, 'show'])->name('show.task');
            // Route::get('/edittask/{task}', [TaskController::class, 'edit'])->name('edit.task');

            // Route::post('/updatetask', [TaskController::class, 'update'])->name('update.task');

            // Route::get('deletetask/{id}', [TaskController::class, 'destroy'])->name('delete.task');
            // Route::get('/getTasks', [TaskController::class, 'getTasks'])->name('datatable.getTasks');

            // Route::get('/activitiesTecni', [TaskController::class, 'activities'])->name('activities');
            // Route::post('fullcalenderAjaxTecni', [TaskController::class, 'ajax']);



            Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
            Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');





        });
     // customer cliente
        Route::middleware('can:isCustomer')->group(function () {

            Route::get('/dashboardClient', [DashboardController::class, 'cliente' ])->name('dashboardClient');



        });

    });




