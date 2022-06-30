<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/index', function () {
    return view('index');
});

Route::get('/accueil', 'PagesController@showhomePage')->name('accueil');
Route::get('/a-propos', 'PagesController@showaboutPage')->name('about');
Route::get('/nos-service', 'PagesController@showservicePage')->name('service');
Route::get('/contact', 'PagesController@showcontactPage')->name('contact');
Route::get('/blog', 'PagesController@showblogPage')->name('blog');
Route::get('/notre-equipe', 'PagesController@showteamPage')->name('team');
Route::get('/portfolio', 'PagesController@showportfolioPage')->name('portfolio');
Route::get('/single', 'PagesController@showsinglePage')->name('single');

//Admin routes load
Route::get('/login', 'AdminPagesController@showloginPage')->name('login');
Route::get('/dashboard', 'AdminPagesController@showdashboardPage')->name('dashboard')->middleware('auth');
Route::get('/dashboard/contact', 'AdminPagesController@showdcontactPage')->name('contactadmin')->middleware('auth');
Route::get('/dashboard/ajout-infos', 'AdminPagesController@showdinfosPage')->name('infos')->middleware('auth');
Route::get('/dashboard/ajouter-un-admin', 'AdminPagesController@showdadminPage')->name('admin')->middleware('auth');
Route::get('/dashboard/foire-aux-questions', 'AdminPagesController@showfaqPage')->name('faq')->middleware('auth');
Route::get('/dashboard/ajouter-un-service', 'AdminPagesController@showservicePage')->name('serviceadmin')->middleware('auth');
Route::get('/dashboard/ajouter-un-collaborateur', 'AdminPagesController@showcollaborateurPage')->name('collaborateur')->middleware('auth');
Route::get('/dashboard/ajouter-un-projet', 'AdminPagesController@showprojetPage')->name('projetadmin')->middleware('auth');
Route::get('/dashboard/admin-{id}/modifier-infos-personnelles', 'UpdatePagesController@showadminupdatePage')->name('updateadmindata')->middleware('auth');



// All Posts Routes
Route::post('/dashboard/contact','PostsController@Pushcontacts');
Route::post('/dashboard/ajout-infos','PostsController@Pushinfos');
Route::post('/dashboard/ajouter-un-service','PostsController@Pushservices');
Route::post('/dashboard/foire-aux-questions','PostsController@Pushfaqs');
Route::post('/dashboard/ajouter-un-collaborateur','PostsController@Pushcollaborateurs');
Route::post('/dashboard/ajouter-un-admin','PostsController@Createadmins');
Route::post('/dashboard/ajouter-un-projet','PostsController@Pushprojets');


Route::post('/dashboard/admin-{id}/modifier-infos-personnelles', 'UpdatePagesController@PushadminupdatePage');
Route::get('/dashboard/admin-{id}/supprimer-admin', 'UpdatePagesController@Destroyadmin')->name('destroyadmin');








//Logout routes
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

