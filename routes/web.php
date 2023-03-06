<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;
 
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

// User Frontend All Route 
Route::get('/', [UserController::class, 'Index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

 Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile'); 

  Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

 Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout'); 

 Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password'); 

  Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');


});

require __DIR__.'/auth.php';


 /// Admin Group Middleware 
Route::middleware(['auth','role:admin'])->group(function(){

 Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard'); 

 Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); 

  Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile'); 

   Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store'); 

   Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password'); 

   Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password'); 


}); // End Group Admin Middleware
  


 /// Agent Group Middleware 
Route::middleware(['auth','role:agent'])->group(function(){

Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

}); // End Group Agent Middleware


 Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login'); 



  /// Admin Group Middleware 
Route::middleware(['auth','role:admin'])->group(function(){ 


 // Property Type All Route 
Route::controller(PropertyTypeController::class)->group(function(){

     Route::get('/all/type', 'AllType')->name('all.type'); 
     Route::get('/add/type', 'AddType')->name('add.type');
     Route::post('/store/type', 'StoreType')->name('store.type'); 
     Route::get('/edit/type/{id}', 'EditType')->name('edit.type');
     Route::post('/update/type', 'UpdateType')->name('update.type');
     Route::get('/delete/type/{id}', 'DeleteType')->name('delete.type');  

});


 // Amenities Type All Route 
Route::controller(PropertyTypeController::class)->group(function(){

     Route::get('/all/amenitie', 'AllAmenitie')->name('all.amenitie'); 
     Route::get('/add/amenitie', 'AddAmenitie')->name('add.amenitie');
     Route::post('/store/amenitie', 'StoreAmenitie')->name('store.amenitie'); 
     Route::get('/edit/amenitie/{id}', 'EditAmenitie')->name('edit.amenitie');
     Route::post('/update/amenitie', 'UpdateAmenitie')->name('update.amenitie');
     Route::get('/delete/amenitie/{id}', 'DeleteAmenitie')->name('delete.amenitie');  

});


}); // End Group Admin Middleware
