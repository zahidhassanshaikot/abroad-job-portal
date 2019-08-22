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
Route::post('/job-search', 'DeshboardController@jobSearch')->name('job-search');


Route::get('applly-now/{id}', 'JobSeekerController@appllyNow')->name('applly-now');
       

Route::group(['middleware' => 'role:Employer Seeker|Admin'], function () {

        Route::get('company-dashboard', 'CompanyController@companyDashboard')->name('company-dashboard');
        Route::get('company-profile', 'CompanyController@companyProfile')->name('company-profile');
        Route::post('save-company-profile-info', 'CompanyController@saveCompanyProfileInfo')->name('save-company-profile-info');
        Route::get('post-job', 'CompanyController@postJob')->name('post-job');
        Route::post('post-new-job', 'CompanyController@postNewJob')->name('post-new-job');
        Route::get('manage-job-list/{id}', 'CompanyController@manageJobList')->name('manage-job-list');
        Route::get('candidates-list/{id}', 'CompanyController@candidatesList')->name('candidates-list');
        Route::get('selected-candidates-list/{id}', 'CompanyController@selectedCandidatesList')->name('selected-candidates-list');
        Route::get('shortlist-candidates-list/{id}', 'CompanyController@ShortListCandidatesList')->name('shortlist-candidates-list');
        Route::get('pending-candidates-list/{id}', 'CompanyController@pendingCandidatesList')->name('pending-candidates-list');
        Route::get('eliminated-candidates-list/{id}', 'CompanyController@eliminatedCandidatesList')->name('eliminated-candidates-list');
        
        Route::get('company-list', 'CompanyController@companyList')->name('company-list');
        Route::get('message/{job_post_id}/{reciver_id}', 'CompanyController@message')->name('message');
        Route::post('send-message', 'CompanyController@sendMessage')->name('send-message');
        
        Route::get('candidate-profile/{id}/{job_post_id}', 'CompanyController@candidateProfile')->name('candidate-profile');
        Route::get('select-for-job/{id}', 'CompanyController@SelectForJob')->name('select-for-job');
        Route::get('pending-for-job/{id}', 'CompanyController@pendingForJob')->name('pending-for-job');
        Route::get('eliminated-for-job/{id}', 'CompanyController@eliminatedForJob')->name('eliminated-for-job');
        Route::get('shortlist-for-job/{id}', 'CompanyController@shortlistForJob')->name('shortlist-for-job');
            
});
 
Route::group(['middleware' => 'role:Job Seeker'], function () {
        Route::get('job-seeker-dashboard', 'JobSeekerController@jobSeekerDashboard')->name('job-seeker-dashboard');
        Route::get('job-seeker-profile', 'JobSeekerController@jobSeekerProfile')->name('job-seeker-profile');
        Route::get('view-message', 'JobSeekerController@viewMessage')->name('view-message');
        Route::post('save-job-seeker-profile-info', 'JobSeekerController@saveJobSeekerProfileInfo')->name('save-job-seeker-profile-info');
                 
       
});


Auth::routes();
// Auth::routes();
