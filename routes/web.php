<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

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
    Route::group(['middleware'=>['preventbackhistory']],function(){

    

        Route::get('/', [ProjectController::class, 'getData'])->name('index');
        Route::view('appointment','user/appointment');
        Route::view('search', 'user/search');
        Route::any('appoint',[ProjectController::class,'bookAppointment']);
        Route::post('searchAttendee',[ProjectController::class,'searchAttendees']);
        // Route::view('login','auth.login')->middleware('AuthCheck');
        Route::post('userlogin',[AuthController::class,'userLogin']);
        Route::get('logout',[AuthController::class,'logout'])->middleware('AuthCheck');

        Route::group(['middleware'=>['adminrouteCheck']],function(){

            Route::get('adminindex', [ProjectController::class, 'admin']);
            Route::get('add',function(){

                return view ('admin/addContents');
            });
            Route::get('addEmployees',[AuthController::class,'addemp']);
            Route::post('register',[AuthController::class,'register']);
            // Route::post('userlogin',[AuthController::class,'userLogin']);
            // Route::view('login','auth.login');
            // Route::any('register',[AuthController::class,'create']);
            Route::get('viewattendees',[ProjectController::class,'att_view']);
            Route::get('viewEmployees', [ProjectController::class, 'emp_view'])->name('view');
            Route::get('edit', [ProjectController::class,'editAttendees']);
            Route::any('editAttendees',[ProjectController::class,'saveEdits']);
            Route::post('addDetails',[ProjectController::class,'addDetails']);
            Route::any('delete',[ProjectController::class,'deleteAttendee']);
            Route::any('empdelete',[ProjectController::class,'deleteEmployee']);
            Route::any('view',[ProjectController::class,'app_view']);
            Route::any('adminhome',function(){
                return view('admin/home');
            })->name('adminhome');
            Route::any('registered',function(){
                return view('admin/registered');
            })->name('registered');
            // Route::view('adminhome','admin/home');


        });
        Route::group(['middleware'=>['docrouteCheck']],function(){
            Route::get('docviewattendees',[ProjectController::class ,'docView'])->name('docviewattendees');
            Route::any('doceditAttendees',[ProjectController::class,'docsaveEdits']);
            Route::get('docview',[ProjectController::class,'docapp_view']);
            Route::any('dochome',function(){
                return view('doctor/home');
            })->name('dochome');
        });

    });