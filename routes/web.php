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

//$basicPages = \Illuminate\Support\Facades\DB::table('pages')->select()->where('basic', 1)->get();
//$basicPaths = array();
//foreach ($basicPages as $basic_page){
//
//}
//admin
Route::get('/admin/settings', 'Admin\Settings@index');
Route::get('/about/contact-us', 'Site\Pages\ContactUs@index')->name('contact us');

Route::get('/{parent}/{page}', 'Site\Index@pageIndex')->name('basicPage');


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