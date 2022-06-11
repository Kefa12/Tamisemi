<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveSearch;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('edit', function () {
    return view('resources/views/vendor/laratrust/panel/edit');
});
Route::post('all/employee/search', [App\Http\Controllers\EmployeeController::class, 'employeeSearch'])->name('all/employee/search');
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome1', function () {
    return view('welcome1');
});
Route::get('/welcome2', function () {
    return view('welcome2');
});
Route::get('Teachdash1', function () {
    return view('Teachdash1');
});
Route::get('WEOdash', function () {
    return view('WEOdash');
});
Route::get('DEOdash', function () {
    return view('DEOdash');
});
Route::get('Dmdash', function () {
    return view('Dmdash');
});
Route::get('administrator', function () {
    return view('administrator');
});
Route::get('/registe', function () {
    return view('registe');
});
Route::get('/register_health_worker', function () {
    return view('register_health_worker');
});
Route::get('registe2', function () {
    return view('registe2');
});
Route::get('registe3', function () {
    return view('registe3');
});



Route::get('/second', function () {
    return view('first');
});
Route::get('/seconds', function () {
    return view('second');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('/DEOdash', function () {
    return view('DEOdash');
});
Route::get('/Dmdash', function () {
    return view('Dmdash');
});
Route::get('/Headmaster_dash', function () {
    return view('Headmaster_dash');
});


Route::get('/live_search', [LiveSearch::class, 'index']);
Route::get('/live_search/action',  [LiveSearch::class, 'action'])->name('live_search.action');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
Route::post('search', [App\Http\Controllers\EmployeeController::class, 'employeeSearch'])->name('search');

//Route::resource('users', App\Http\Controllers\SearchController::class);

Route::get('registe',[App\Http\Controllers\DropDown::class, 'index']);
Route::get('registe2',[App\Http\Controllers\DropDown::class, 'index1']);
Route::get('Register_Headmaster',[App\Http\Controllers\DropDown::class, 'index2']);

Route::get('Register_WEO',[App\Http\Controllers\DropDown::class, 'index3']);

Route::get('Register_DEO',[App\Http\Controllers\DropDown::class, 'index4']);
Route::get('Register_DED',[App\Http\Controllers\DropDown::class, 'index44']);
Route::get('Register_RD',[App\Http\Controllers\DropDown::class, 'index5']);
Route::get('Register_TAMISEMI_Director',[App\Http\Controllers\DropDown::class, 'index6']);
Route::get('register_health_worker',[App\Http\Controllers\DropDown::class, 'index8']);
Route::get('auth/register',[App\Http\Controllers\DropDown::class, 'index7']);

Route::get('add', [App\Http\Controllers\FinalSearch::class, 'index']);
Route::get('add1', [App\Http\Controllers\FinalSearch::class, 'index1']);
Route::get('headmaster', [App\Http\Controllers\FinalSearch::class, 'headmaster']);
Route::get('add2', [App\Http\Controllers\FinalSearch::class, 'index2']);
Route::get('add3', [App\Http\Controllers\FinalSearch::class, 'index3']);
Route::get('add4', [App\Http\Controllers\FinalSearch::class, 'index4']);
Route::get('add5', [App\Http\Controllers\FinalSearch::class, 'index5']);
Route::get('registe3', [App\Http\Controllers\auth\RegisteredUserController::class, 'store']);


Route::get('/dashboardT', [App\Http\Controllers\TransferController::class, 'index2']);

Route::get('form', [App\Http\Controllers\TransferController::class, 'index2']);
Route::get('form1', [App\Http\Controllers\TransferController::class, 'index3']);
Route::get('form2', [App\Http\Controllers\TransferController::class, 'index4']);

Route::get('letters1', [App\Http\Controllers\TransferController::class, 'index6']);
Route::get('letters2', [App\Http\Controllers\LetterController::class, 'store2']);
Route::get('letters3', [App\Http\Controllers\LetterController::class, 'index2']);
Route::get('letters4', [App\Http\Controllers\LetterController::class, 'update']);
Route::get('letters5', [App\Http\Controllers\LetterController::class, 'index3']);
Route::get('letters9', [App\Http\Controllers\LetterController::class, 'index9']);
Route::get('letters10', [App\Http\Controllers\LetterController::class, 'index10']);
Route::get('letters11', [App\Http\Controllers\LetterController::class, 'index11']);
Route::get('chances1', [App\Http\Controllers\ChanceController::class, 'index']);
Route::get('/letters', function () {
    return view('Headmaster_dash3');
});
Route::get('WEO/{id}', [App\Http\Controllers\LetterController::class, 'update3']);


Route::resource('transfers', App\Http\Controllers\TransferController::class);
Route::resource('letters', App\Http\Controllers\LetterController::class);
Route::resource('schools', App\Http\Controllers\SchoolController::class);
Route::resource('wards', App\Http\Controllers\WardController::class);
Route::resource('districts', App\Http\Controllers\DistrictController::class);
Route::resource('regionals', App\Http\Controllers\RegionalController::class);
Route::resource('chances', App\Http\Controllers\ChanceController::class);

Route::get('/getCity/{id}',[App\Http\Controllers\DropDown::class, 'getCity']); // for get city list
Route::get('auth/getCity/{id}',[App\Http\Controllers\DropDown::class, 'getCity']); 




Route::get('/getStadiumDetail/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail']); // for get city list
Route::get('auth/getStadiumDetail/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail']); 

Route::get('/getStadiumDetail1/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail1']); 
Route::get('auth/getStadiumDetail1/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail1']);

Route::get('/getStadiumDetail2/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail2']); 

Route::get('/getStadiumDetail2/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail3']); 
Route::get('getStadiumDetail4/{id}', [App\Http\Controllers\DropDown::class, 'getStadiumDetail4']); 





require __DIR__.'/auth.php';
