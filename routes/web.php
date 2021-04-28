<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('admin.login');
});





Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::post('/save-register-student', 'Auth\RegisterController@registerSaveStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['auth', 'verified','role:admin']], function () {
    Route::get('admin/dashboard', 'User\UserController@index')->name('dashboard.admin');
    Route::get('admin/table', 'User\UserController@table');
    Route::get('admin/profil', 'User\UserController@profil');
    Route::get('admin/voting', 'User\UserController@Voting');
    Route::get('admin/menajemensiswa','User\UserController@menajemensiswa');
    Route::get('admin/detail/{id}','User\UserController@detailSiswa');
    Route::get('admin/Manajemencalon','User\UserController@menajemencalon');
    Route::get('admin/Manajemenanggota','User\UserController@menajemenanggota');

    Route::get('admin/create-student','User\UserController@createStudent');
    Route::get('admin/create-calon','User\UserController@createCalon');
    Route::post('admin/saveCalon','User\UserController@saveCalon');
    Route::post('admin/saveStudent','User\UserController@saveStudent');
    Route::get('admin/delete/{id}','User\UserController@deleteStudent');
    Route::get('admin/deleteCalon/{id}','User\UserController@deleteCalon');
 	Route::get('admin/student-edit/{id}','User\UserController@editStudent');
 	Route::get('admin/calon-edit/{id}','User\UserController@editCalon');
 	Route::get('admin/activation/{id}','User\UserController@activation'); 	
 	Route::get('admin/tambahVoting/{id}','User\UserController@tambahVoting');

    Route::get('admin/create-member','User\UserController@createMember');
    Route::post('admin/saveMember','User\UserController@saveMember');
    Route::get('admin/deleteMember/{id}','User\UserController@deleteMember');
    Route::get('admin/member-edit/{id}','User\UserController@editMember'); 	


 	Route::post('admin/updateCalon','User\UserController@saveEditCalon');
 	Route::get('admin/editprofil/{id}','User\UserController@editprofil');
 	Route::post('admin/saveEditStudent','User\UserController@saveEditStudent');
 	Route::post('admin/saveEditProfile','User\UserController@saveEditProfile');
 	

});

Route::group(['middleware' => ['auth', 'verified','role:student']], function () {
    Route::get('student/dashboard','User\UserController@indexStudent')->name('dashboard.users');
    Route::get('student/profil','User\UserController@studentProfil');
    Route::get('student/voting','User\UserController@votingStudent');
    Route::get('student/tambahVoting/{id}','User\UserController@tambahVotingSiswa');
    Route::get('student/editprofil/{id}','User\UserController@editProfileStudent');
    Route::post('student/saveEditProfile','User\UserController@saveEditProfileStudent');


});
