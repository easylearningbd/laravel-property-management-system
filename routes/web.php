<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Middleware\RedirectIfAuthenticated;
 
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

Route::get('/agent/logout', [AgentController::class, 'AgentLogout'])->name('agent.logout');

Route::get('/agent/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');

Route::post('/agent/profile/store', [AgentController::class, 'AgentProfileStore'])->name('agent.profile.store');

Route::get('/agent/change/password', [AgentController::class, 'AgentChangePassword'])->name('agent.change.password');

Route::post('/agent/update/password', [AgentController::class, 'AgentUpdatePassword'])->name('agent.update.password');


}); // End Group Agent Middleware


Route::get('/agent/login', [AgentController::class, 'AgentLogin'])->name('agent.login')->middleware(RedirectIfAuthenticated::class); 

Route::post('/agent/register', [AgentController::class, 'AgentRegister'])->name('agent.register'); 




 Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class); 



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


 // Property All Route 
Route::controller(PropertyController::class)->group(function(){

     Route::get('/all/property', 'AllProperty')->name('all.property'); 
     Route::get('/add/property', 'AddProperty')->name('add.property');
     Route::post('/store/property', 'StoreProperty')->name('store.property');
     Route::get('/edit/property/{id}', 'EditProperty')->name('edit.property');
     Route::post('/update/property', 'UpdateProperty')->name('update.property');

     Route::post('/update/property/thambnail', 'UpdatePropertyThambnail')->name('update.property.thambnail');

      Route::post('/update/property/multiimage', 'UpdatePropertyMultiimage')->name('update.property.multiimage');

    Route::get('/property/multiimg/delete/{id}', 'PropertyMultiImageDelete')->name('property.multiimg.delete');

    Route::post('/store/new/multiimage', 'StoreNewMultiimage')->name('store.new.multiimage');

     Route::post('/update/property/facilities', 'UpdatePropertyFacilities')->name('update.property.facilities');

     Route::get('/delete/property/{id}', 'DeleteProperty')->name('delete.property');

     Route::get('/details/property/{id}', 'DetailsProperty')->name('details.property');

     Route::post('/inactive/property', 'InactiveProperty')->name('inactive.property');

      Route::post('/active/property', 'ActiveProperty')->name('active.property');

});



 // Agent All Route from admin 
Route::controller(AdminController::class)->group(function(){

     Route::get('/all/agent', 'AllAgent')->name('all.agent');
     Route::get('/add/agent', 'AddAgent')->name('add.agent');
     Route::post('/store/agent', 'StoreAgent')->name('store.agent');
     Route::get('/edit/agent/{id}', 'EditAgent')->name('edit.agent');
     Route::post('/update/agent', 'UpdateAgent')->name('update.agent');
     Route::get('/delete/agent/{id}', 'DeleteAgent')->name('delete.agent'); 
   
     Route::get('/changeStatus', 'changeStatus');

});



}); // End Group Admin Middleware
