<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/', 'home@index')->name('home_index');



Route::get('/company','company@index')->name('company_list');
Route::get('/add_company', 'company@add_company')->name('company_add');
Route::post('/add_company_action', 'company@store')->name('company_add_action');
Route::get('/edit_company/{id}', 'company@edit_company')->name('edit_company');
Route::get('/view_company/{id}', 'company@view_company')->name('view_company');
Route::post('/update_company', 'company@update')->name('update_company');
Route::get('/company_delete/{id}', 'company@destroy')->name('company_delete');

Route::get('/designation','designation@index')->name('designation_list');
Route::get('/add_designation', 'designation@add_designation')->name('designation_add');
Route::post('/add_designation_action', 'designation@store')->name('designation_add_action');
Route::get('/view_designation/{id}', 'designation@view_designation')->name('view_designation');
Route::get('/edit_designation/{id}', 'designation@edit_designation')->name('edit_designation');
Route::post('/update_designation', 'designation@update')->name('update_designation');
Route::get('/designation_delete/{id}', 'designation@destroy')->name('designation_delete');

//leave route
Route::get('/leave','leave_controller@index')->name('leave_list_route');
//add
Route::post('/add_leave_action', 'leave_controller@store')->name('leave_add_action');
Route::get('/add_leave', 'leave_controller@create')->name('leave_add');
Route::get('/view_leave/{id}', 'leave_controller@show')->name('view_leave');
Route::get('/edit_leave/{id}', 'leave_controller@edit')->name('edit_leave');
Route::get('/delete_leave/{id}', 'leave_controller@destroy')->name('delete_leave');
Route::post('/update_leave', 'leave_controller@update')->name('update_leave');

//shortleave route
Route::get('/shortleave','short_leave_controller@index')->name('shortleave_list_route');
//add
Route::post('/add_shortleave_action', 'short_leave_controller@store')->name('shortleave_add_action');
Route::get('/add_shortleave', 'short_leave_controller@create')->name('shortleave_add');
Route::get('/view_shortleave/{id}', 'short_leave_controller@show')->name('view_shortleave');
Route::get('/edit_shortleave/{id}', 'short_leave_controller@edit')->name('edit_shortleave');
Route::get('/delete_shortleave/{id}', 'short_leave_controller@destroy')->name('delete_shortleave');
Route::post('/update_shortleave', 'short_leave_controller@update')->name('update_shortleave');

//Salary Arrear
Route::get('/salary_Arrear','salaryArr@index')->name('salaryArr_list_route');
Route::get('/add_salaryarrear', 'salaryArr@create')->name('salaryArr_add');
Route::post('/add_salaryarrear_action', 'salaryArr@store')->name('salaryArr_add_action');
Route::get('/view_salaryarrear/{id}', 'salaryArr@show')->name('view_salaryArr');
Route::get('/edit_salaryarrear/{id}', 'salaryArr@edit')->name('edit_salaryArr');
Route::get('/delete_salaryarrear/{id}', 'salaryArr@destroy')->name('delete_salaryArr');
Route::post('/update_salaryarrear', 'salaryArr@update')->name('update_salaryArr');





