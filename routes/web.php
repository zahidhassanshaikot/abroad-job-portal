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
      
Route::post('/password-request', 'UserController@resetPassword')->name('password-request');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('/', 'DeshboardController@index')->name('/');
Route::get('/jobs', 'DeshboardController@jobs')->name('jobs');
Route::get('/job-details/{id}', 'DeshboardController@jobDetails')->name('job-details');
Route::get('/dashboard', 'DeshboardController@dashboard')->name('dashboard');
Route::get('/login-job-seeker', 'DeshboardController@loginJobSeeker')->name('login-job-seeker');
Route::get('/company-login', 'DeshboardController@companyLogin')->name('company-login');
Route::get('/company-register', 'DeshboardController@companyReg')->name('company-register');
Route::get('/job-seeker-register', 'DeshboardController@jobSeekerRegister')->name('job-seeker-register');
Route::post('/save-reg-info', 'DeshboardController@saveRegisterInfo')->name('save-reg-info');




Route::group(['middleware' => 'role:Employer Seeker'], function () {

        Route::get('company-dashboard', 'CompanyController@companyDashboard')->name('company-dashboard');
        Route::get('company-profile', 'CompanyController@companyProfile')->name('company-profile');
        Route::post('save-company-profile-info', 'CompanyController@saveCompanyProfileInfo')->name('save-company-profile-info');
        Route::get('post-job', 'CompanyController@postJob')->name('post-job');
        Route::post('post-new-job', 'CompanyController@postNewJob')->name('post-new-job');
            
});
 
Route::group(['middleware' => 'role:Job Seeker'], function () {
        Route::get('job-seeker-dashboard', 'JobSeekerController@jobSeekerDashboard')->name('job-seeker-dashboard');
        Route::get('job-seeker-profile', 'JobSeekerController@jobSeekerProfile')->name('job-seeker-profile');
        Route::post('save-job-seeker-profile-info', 'JobSeekerController@saveJobSeekerProfileInfo')->name('save-job-seeker-profile-info');
                 
       
});


Auth::routes();
// Auth::routes();
