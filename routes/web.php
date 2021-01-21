<?php

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

Route::get('/', 'LoginController@login');
Route::get('home', 'HomeController@home');
Route::get('home_superior', 'Home_superiorController@home_superior');
Route::get('home_infosys', 'Home_infosysController@home_infosys');
Route::get('home', 'HomeController@home');
Route::get('user', 'UserController@user');
Route::get('usertouroku', 'UsertourokuController@usertouroku');
Route::get('usertouroku_confirm', 'Usertouroku_confirmController@usertouroku_confirm');
Route::get('usertouroku_complete', 'Usertouroku_completeController@usertouroku_complete');
Route::get('dailylist', 'DailylistController@dailylist');
Route::get('dailylist_superior', 'Dailylist_superiorController@dailylist_superior');
Route::get('dailyreport', 'DailyreportController@dailyreport');
Route::get('dailyreport_confirm', 'Dailyreport_confirmController@dailyreport_confirm');
Route::get('dailyreport_confirm_superior', 'Dailyreport_confirm_superiorController@dailyreport_confirm_superior');
Route::get('dailyreport_complete', 'Dailyreport_completeController@dailyreport_complete');
