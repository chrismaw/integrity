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
Route::get('/connect/events', 'Site\Pages\Events@index')->name('events');
Route::get('/connect/giving', 'Site\Pages\Giving@index')->name('giving');
Route::get('/resources/blog', 'Site\Pages\Blog@index')->name('blog');
Route::get('/resources/stories', 'Site\Pages\Stories@index')->name('stories');
Route::get('/resources/discipleship-seminar', 'Site\Pages\DiscipleshipSeminar@index')->name('discipleship seminar');

Route::get('/resources/sermons', 'Site\Pages\Sermons@index')->name('sermons');
Route::get('/resources/sermons/{series}', 'Site\Pages\SermonSeries@index')->name('sermon series');
Route::get('/resources/sermons/{series}/{sermon}', 'Site\Pages\Sermons@sermonPage')->name('sermon');

Route::get('/resources/sermons/{series}', 'Site\Pages\SermonSeries@index')->name('sermon series');
Route::get('/resources/sermons/{series}/{sermon}', 'Site\Pages\Sermon@index')->name('sermon');

Route::get('/{parent}/{page}', 'Site\Index@pageIndex')->name('basicPage');

