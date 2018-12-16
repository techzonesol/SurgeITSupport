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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*******         Contacts Module Start                      *********/
Route::get('/contacts','ContactsController@index')->name('contacts');
Route::get('/contacts/create','ContactsController@create')->name('create_contacts');
Route::post('/contacts/create','ContactsController@save_contact')->name('save_contact');
Route::post('/contacts/delete','ContactsController@delete_contact')->name('delete_contact');
Route::get('/contacts/{id}','ContactsController@view_contact')->name('view_contact');
Route::post('/contacts/{id}','ContactsController@update_contact')->name('update_contact');
Route::get('check_email','ContactsController@check_email')->name('check_email');


/*******         Contacts Module END                      *********/
/*******         Company Module Start                      *********/
Route::get('/company','CompanyController@index')->name('company');
Route::get('/company/create','CompanyController@create')->name('create_company');
Route::post('/company/create','CompanyController@save_company')->name('save_company');
Route::post('/company/delete','CompanyController@delete_company')->name('delete_company');
Route::get('/company/{id}','CompanyController@view_company')->name('view_company');
Route::post('/company/{id}','CompanyController@update_company')->name('update_company');
/*******         Company Module END                      *********/