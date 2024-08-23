<?php

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
// welcome page
Route::get('/', function () {
    $club=DB::table('club')->get();
    $media=DB::table('media')->where('model_type', 'App\Models\Club')->get(); 
    return view('welcome',[
        'club'=>$club,
        'media'=>$media,

    ]);
});
// club detail index
Route::get('Club.index/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $img=DB::table('media')->where('model_id',$club)->first();
    $event=DB::table('event')->where('club_id',$club)->get();
    // image each event
    // dd($data);
    $imgevent=DB::table('media')->where('model_type', 'App\Models\Event')->get();
    return view('Club.index',compact('data','img','imgevent'),['event'=>$event]);
});
// about club
Route::get('Club.aboutClub/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $img=DB::table('media')->where('model_id',$club)->first();
    $event=DB::table('event')->where('club_id',$club)->get();
    return view('Club.aboutClub',compact('data','img'),['event'=>$event]);
});

// organizationalChart club
Route::get('Club.organizationalChart/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $img=DB::table('media')->where('model_id',$club)->first();
    $event=DB::table('event')->where('club_id',$club)->get();
    return view('Club.organizationalChart',compact('data','img'),['event'=>$event]);
});
// membership club
Route::get('Club.membership/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $img=DB::table('media')->where('model_id',$club)->first();
    $event=DB::table('event')->where('club_id',$club)->get();
    return view('Club.membership',compact('data','img'),['event'=>$event]);
});
// Batches club
Route::get('Club.batches/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $img=DB::table('media')->where('model_id',$club)->first();
    $event=DB::table('event')->where('club_id',$club)->get();
    return view('Club.batches',compact('data','img'),['event'=>$event]);
});

// all event index 
Route::get('Club.Events.index/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $category_event=DB::table('category')->where('name','event')->get();
    $event=DB::table('event')->where('club_id',$club)->get();
    $imgevent=DB::table('media')->where('model_type','App\Models\Event')->get();
    // dd($event);
    return view('Club.Events.index',compact('data','imgevent','category_event'),['event'=>$event]);
});
// event page
Route::get('Club.Events.event/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $category_event=DB::table('category')->where('name','event')->get();
    $event=DB::table('event')->where('club_id',$club)->get();
    $imgevent=DB::table('media')->where('model_type','App\Models\Event')->get();
    // dd($event);
    return view('Club.Events.event',compact('data','imgevent','category_event'),['event'=>$event]);
});
// competition page
Route::get('Club.Events.competition/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $category_event=DB::table('category')->where('name','event')->get();
    $event=DB::table('event')->where('club_id',$club)->get();
    $imgevent=DB::table('media')->where('model_type','App\Models\Event')->get();
    // dd($event);
    return view('Club.Events.competition',compact('data','imgevent','category_event'),['event'=>$event]);
});
// gallery page
Route::get('Club.Events.gallery/{club}', function ($club) {
    $data=DB::table('club')->where('id',$club)->first();
    $category_event=DB::table('category')->where('name','gallery')->get();
    $event=DB::table('event')->where('club_id',$club)->get();
    $imgevent=DB::table('media')->where('model_type','App\Models\Event')->get();
    return view('Club.Events.gallery',compact('data','imgevent','category_event'),['event'=>$event]);
});

Route::craftablePro('admin');

/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('clubs', [App\Http\Controllers\CraftablePro\ClubController::class, 'index'])->name('clubs.index');
    Route::get('clubs/create', [App\Http\Controllers\CraftablePro\ClubController::class, 'create'])->name('clubs.create');
    Route::post('clubs', [App\Http\Controllers\CraftablePro\ClubController::class, 'store'])->name('clubs.store');
    Route::get('clubs/edit/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'edit'])->name('clubs.edit');
    Route::match(['put', 'patch'], 'clubs/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'update'])->name('clubs.update');
    Route::delete('clubs/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'destroy'])->name('clubs.destroy');
    Route::post('clubs/bulk-destroy', [App\Http\Controllers\CraftablePro\ClubController::class, 'bulkDestroy'])->name('clubs.bulk-destroy');
});

Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('clubstudent', [App\Http\Controllers\CraftablePro\ClubStudentController::class, 'index'])->name('clubstudent.index');
});

Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('participationhistory', [App\Http\Controllers\CraftablePro\ParticipationHistory::class, 'index'])->name('participationhistory.index');
});
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('applications', [App\Http\Controllers\CraftablePro\Applications::class, 'index'])->name('applications.index');
});

/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('events', [App\Http\Controllers\CraftablePro\EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [App\Http\Controllers\CraftablePro\EventController::class, 'create'])->name('events.create');
    Route::post('events', [App\Http\Controllers\CraftablePro\EventController::class, 'store'])->name('events.store');
    Route::get('events/edit/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'edit'])->name('events.edit');
    Route::match(['put', 'patch'], 'events/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'update'])->name('events.update');
    Route::delete('events/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'destroy'])->name('events.destroy');
    Route::post('events/bulk-destroy', [App\Http\Controllers\CraftablePro\EventController::class, 'bulkDestroy'])->name('events.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('categories', [App\Http\Controllers\CraftablePro\CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [App\Http\Controllers\CraftablePro\CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [App\Http\Controllers\CraftablePro\CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'edit'])->name('categories.edit');
    Route::match(['put', 'patch'], 'categories/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::post('categories/bulk-destroy', [App\Http\Controllers\CraftablePro\CategoryController::class, 'bulkDestroy'])->name('categories.bulk-destroy');
});



/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('info-users', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'index'])->name('info-users.index');
    Route::get('info-users/create', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'create'])->name('info-users.create');
    Route::post('info-users', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'store'])->name('info-users.store');
    Route::get('info-users/edit/{infoUser}', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'edit'])->name('info-users.edit');
    Route::match(['put', 'patch'], 'info-users/{infoUser}', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'update'])->name('info-users.update');
    Route::delete('info-users/{infoUser}', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'destroy'])->name('info-users.destroy');
    Route::post('info-users/bulk-destroy', [App\Http\Controllers\CraftablePro\InfoUserController::class, 'bulkDestroy'])->name('info-users.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('role-clubs', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'index'])->name('role-clubs.index');
    Route::get('role-clubs/create', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'create'])->name('role-clubs.create');
    Route::post('role-clubs', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'store'])->name('role-clubs.store');
    Route::get('role-clubs/edit/{roleClub}', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'edit'])->name('role-clubs.edit');
    Route::match(['put', 'patch'], 'role-clubs/{roleClub}', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'update'])->name('role-clubs.update');
    Route::delete('role-clubs/{roleClub}', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'destroy'])->name('role-clubs.destroy');
    Route::post('role-clubs/bulk-destroy', [App\Http\Controllers\CraftablePro\RoleClubController::class, 'bulkDestroy'])->name('role-clubs.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('sub-clubs', [App\Http\Controllers\CraftablePro\SubClubController::class, 'index'])->name('sub-clubs.index');
    Route::get('sub-clubs/create', [App\Http\Controllers\CraftablePro\SubClubController::class, 'create'])->name('sub-clubs.create');
    Route::post('sub-clubs', [App\Http\Controllers\CraftablePro\SubClubController::class, 'store'])->name('sub-clubs.store');
    Route::get('sub-clubs/edit/{subClub}', [App\Http\Controllers\CraftablePro\SubClubController::class, 'edit'])->name('sub-clubs.edit');
    Route::match(['put', 'patch'], 'sub-clubs/{subClub}', [App\Http\Controllers\CraftablePro\SubClubController::class, 'update'])->name('sub-clubs.update');
    Route::delete('sub-clubs/{subClub}', [App\Http\Controllers\CraftablePro\SubClubController::class, 'destroy'])->name('sub-clubs.destroy');
    Route::post('sub-clubs/bulk-destroy', [App\Http\Controllers\CraftablePro\SubClubController::class, 'bulkDestroy'])->name('sub-clubs.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('sub-roles', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'index'])->name('sub-roles.index');
    Route::get('sub-roles/create', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'create'])->name('sub-roles.create');
    Route::post('sub-roles', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'store'])->name('sub-roles.store');
    Route::get('sub-roles/edit/{subRole}', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'edit'])->name('sub-roles.edit');
    Route::match(['put', 'patch'], 'sub-roles/{subRole}', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'update'])->name('sub-roles.update');
    Route::delete('sub-roles/{subRole}', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'destroy'])->name('sub-roles.destroy');
    Route::post('sub-roles/bulk-destroy', [App\Http\Controllers\CraftablePro\SubRoleController::class, 'bulkDestroy'])->name('sub-roles.bulk-destroy');
});
