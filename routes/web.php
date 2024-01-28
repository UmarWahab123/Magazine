<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\LoginController;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');


Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'adminlogin'])->name('login');
Route::post('/custom-login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('custom-login');

Route::get('/password', [App\Http\Controllers\LoginController::class, 'showChangePasswordForm'])->name('password');


Route::post('/password/change', [App\Http\Controllers\LoginController::class, 'changePassword'])->name('password.change');


Route::middleware('auth')->group(function () {


    Route::get('/index', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('index');
    Route::get('/general', [App\Http\Controllers\GeneralSettingController::class, 'generalsetting'])->name('general');
});


Route::post('/update', [App\Http\Controllers\GeneralSettingController::class, 'UpdateSetting'])->name('update.generalsetting');


Route::get('/page-detail/{temp_id}', [App\Http\Controllers\HomeController::class, 'pagest_detail'])->name('pagest_detail');

Route::get('/intro/{edition_id}/{page_id}/{type}', [App\Http\Controllers\HomeController::class, 'content'])->name('intro');

Route::get('/explore/{id}', [App\Http\Controllers\HomeController::class, 'exploreform'])->name('explore');
Route::get('/intro/{edition_id}/{page_id}/{type}', [App\Http\Controllers\HomeController::class, 'content'])->name('intro');
Route::get('/edition', [App\Http\Controllers\HomeController::class, 'edition'])->name('edition');
Route::get('/page', [App\Http\Controllers\HomeController::class, 'page']);
Route::get('/ben-fogle', [App\Http\Controllers\HomeController::class, 'fogle'])->name('ben-fogle');
Route::get('/more-time', [App\Http\Controllers\HomeController::class, 'time'])->name('more-time');
Route::get('/tempo-maidenhead', [App\Http\Controllers\HomeController::class, 'maidenhead'])->name('tempo-maidenhead');
Route::get('/heading-north', [App\Http\Controllers\HomeController::class, 'heading'])->name('heading-north');


Route::get('/page1', [App\Http\Controllers\Page1Controller::class, 'index1'])->middleware('auth');
Route::get('{id}/page1/create/{edition_temp_id}', [App\Http\Controllers\Page1Controller::class, 'create1'])->name('page1.create');
Route::post('/page1/create', [App\Http\Controllers\Page1Controller::class, 'show1']);
Route::get('{page}/page1/edit', [App\Http\Controllers\Page1Controller::class, 'edit1'])->name('page1.edit');
Route::post('{page}/page1/edit', [App\Http\Controllers\Page1Controller::class, 'update1']);

//page3 routes
Route::get('{id}/page3/index/{edition_temp_id}', [App\Http\Controllers\Page3Controller::class, 'index'])->name('page3.index');
Route::post('page3/store', [App\Http\Controllers\Page3Controller::class, 'store'])->name('page3.store');

//page4 routes
Route::get('{id}/page4/index/{edition_temp_id}', [App\Http\Controllers\Page4Controller::class, 'index'])->name('page4.index');
Route::post('page4/store', [App\Http\Controllers\Page4Controller::class, 'store'])->name('page4.store');

Route::get('/pages/page5/index', [App\Http\Controllers\PageController::class, 'index5'])->name('page5.index')->middleware('auth');
Route::get('{id}/pages/page5/create/{edition_temp_id}', [App\Http\Controllers\PageController::class, 'create5'])->name('page5.add');
Route::post('/pages/page5/store', [App\Http\Controllers\PageController::class, 'store5'])->name('page5.create');
Route::get('/pages/page5/{page}/edit', [App\Http\Controllers\PageController::class, 'edit5'])->name('page5.edit');
Route::post('/pages/page5/{page}/update/', [App\Http\Controllers\PageController::class, 'update5'])->name('page5.update');




Route::get('/page6', [App\Http\Controllers\PageController::class, 'index6'])->middleware('auth');
Route::get('{id}/page6/create/{edition_temp_id}', [App\Http\Controllers\PageController::class, 'create6'])->name('created');
Route::post('/page6/create', [App\Http\Controllers\PageController::class, 'show6']);
Route::get('{page}/page6/edit', [App\Http\Controllers\PageController::class, 'edit6'])->name('edit');
Route::post('{page}/page6/edit', [App\Http\Controllers\PageController::class, 'update6']);




Route::get('{id}/pagelist', [App\Http\Controllers\PageController::class, 'pagelist'])->name('pagelist');
Route::post('add/template', [App\Http\Controllers\ListController::class, 'add_template_to_edition'])->name('add.template');

Route::get('/list', [App\Http\Controllers\ListController::class, 'index'])->name('list.index')->middleware('auth');
Route::get('/addlist', [App\Http\Controllers\ListController::class, 'create'])->name('addlist.create');
Route::post('/addlist/store', [App\Http\Controllers\ListController::class, 'store'])->name('addlist.store');
Route::get('/editlist/{editionlist}', [App\Http\Controllers\ListController::class, 'edit'])->name('editlist.edit');
Route::post('/editlist/update/{editionlist}', [App\Http\Controllers\ListController::class, 'update'])->name('editlist.update');
Route::post('/delete-list', [App\Http\Controllers\ListController::class, 'deleteList'])->name('delete-list');

Route::get('/all-template', [App\Http\Controllers\ListController::class, 'view_temlates'])->name('all.template')->middleware('auth');
Route::post('/update-template', [App\Http\Controllers\ListController::class, 'updateTemplate'])->name('update.template');

Route::get('/change-to-default/{id}', [App\Http\Controllers\ListController::class, 'change_default_edition'])->name('change.default')->middleware('auth');

Route::get('/get-page/{id}', [App\Http\Controllers\ListController::class, 'getTemplateById'])->name('get-page');
Route::post('/delete-page', [App\Http\Controllers\ListController::class, 'deletePage'])->name('delete-page');


Route::get('/page2/{id}/{edition_temp_id}', [PageController::class, 'index2'])->name('page2.index')->middleware('auth');
Route::post('page2/store', [PageController::class, 'store'])->name('page2.store');


Route::get('/view-template/{type}', [App\Http\Controllers\GeneralSettingController::class, 'template1'])->name('view.template1');
// Route::get('/view-template2', [App\Http\Controllers\GeneralSettingController::class, 'template2'])->name('view.template2');
// Route::get('/view-template3', [App\Http\Controllers\GeneralSettingController::class, 'template3'])->name('view.template3');
// Route::get('/view-template4', [App\Http\Controllers\GeneralSettingController::class, 'template4'])->name('view.template4');
// Route::get('/view-template5', [App\Http\Controllers\GeneralSettingController::class, 'template5'])->name('view.template5');
// Route::get('/view-template6', [App\Http\Controllers\GeneralSettingController::class, 'template6'])->name('view.template6');





