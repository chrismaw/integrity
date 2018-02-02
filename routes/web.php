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

//index
Route::get('/', 'Site\Index@index');
Route::get('/{parent}/{page}', 'Site\Index@pageIndex')->name('basicPage');

//admin
Route::get('/admin/settings', 'Admin\Settings@index');

//ABOUT
//history
//Route::get('about/history','Site\About@historyIndex');
//Route::get('about/mission','Site\About@missionIndex');
//Route::get('about/leadership','Site\About@leadershipIndex');
//Route::get('about/sunday-mornings','Site\About@sundayMorningsIndex');
//Route::get('about/integrity-kids','Site\About@integrityKidsIndex');
//Route::get('about/contact-us','Site\About@contactUsIndex');

//
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');