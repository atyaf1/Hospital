<?php

use Illuminate\Support\Facades\Route;

 Route::get('kh',function (){
     return 'asd';
 });

Auth::routes();

Route::get('logout',function (){
    Auth::logout();
    return redirect()->route('login');
})->name('log');


Route::get('index',function (){
  return view('index');
});


/////////////// Begin Route Doctor /////////////////////////////
Route::get('Doctor','DoctorController@index')->name('doctor.index');
Route::get('Doctor/create','DoctorController@create')->name('doctor.create');
Route::post('Doctor/create','DoctorController@store')->name('doctor.store');
Route::get('Doctor/edit/{id}','DoctorController@edit')->name('doctor.edit');
Route::post('Doctor/update/{id}','DoctorController@update')->name('doctor.update');
Route::get('Doctor/{id}','DoctorController@delete')->name('doctor.delete');
Route::get('Doctor/show/{id}','DoctorController@show')->name('doctor.show');
//////////// End Route Doctore /////////////////////////////


/////////////// Begin Route Department /////////////////////////////

Route::get('Department','DepartmentController@index')->name('department');
Route::get('Department/create','DepartmentController@create')->name('department.create');
Route::post('Department/create','DepartmentController@store')->name('department.store');
Route::get('Department/edit/{id}','DepartmentController@edit')->name('department.edit');
Route::post('Department/update/{id}','DepartmentController@update')->name('department.update');
Route::delete('Department/{id}','DepartmentController@delete')->name('department.delete');
//////////// End Route Department /////////////////////////////


/////////////// Begin Route Patient_Request /////////////////////////////
Route::get('Requests','PatientController@index')->name('patient.index');
Route::get('Patient/create','PatientController@create')->name('patient.create');
Route::post('Patient/create','PatientController@store')->name('patient.store');
Route::get('Patient/Accept_Request/{id}','PatientController@edit')->name('patient.edit');
Route::post('Patient/edit/{id}','PatientController@update')->name('patient.update');
Route::get('Patient/{id}','PatientController@delete')->name('patient.delete');
//////////// End Route Patient_Request /////////////////////////////

