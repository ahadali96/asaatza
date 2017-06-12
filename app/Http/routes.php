<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@viewhome');

Route::get('/homelogin', function() {
    return view('frontend.homelogin');
});

Route::get('/jobs','JobController@viewjobs');

Route::get('/tutors','TutorController@viewtutor');

Route::get('/tution-centre','TutionController@viewtution');

Route::get('/dashboard-tution-centre','DashboardController@viewtutiondashboard');

Route::get('/dashboard-tution-centre/academic-settings','DashboardController@viewtutionasettings');

Route::get('/dashboard-tution-centre/profile-settings','DashboardController@viewtutionpsettings');

Route::get('/dashboard-tution-centre/schedules','DashboardController@viewtutionschedule');

Route::get('/dashboard-tution-centre/favourites-listing','DashboardController@viewtutionflisting');

Route::get('/dashboard-tution-centre/invoices','DashboardController@viewtutioninvoice');

Route::get('/dashboard-tution-centre/upgrade-package','DashboardController@viewtutionup');

Route::get('/dashboard-tution-centre/security-settings','DashboardController@viewtutionssettings');

Route::get('/dashboard-tution-centre/privacy-settings','DashboardController@viewtutionprisettings');

Route::get('/dashboard-tution-centre/post-job','DashboardController@viewtutionpjob');

Route::get('/dashboard-tutor','DashboardController@viewtutordashboard');

Route::get('/dashboard-tutor/profile-settings','DashboardController@viewtutorprofilesettings');

Route::get('/dashboard-tutor/schedule','DashboardController@viewtutorschedule');

Route::get('/dashboard-tutor/favoritelisting','DashboardController@viewtutorflisting');

Route::get('/dashboard-tutor/upgradepackage','DashboardController@viewtutorup');

Route::get('/dashboard-tutor/securitysettings','DashboardController@viewtutorssettings');

Route::get('/dashboard-tutor/privacysettings','DashboardController@viewtutorprivacysetting');

Route::get('/dashboard-parents','DashboardController@viewdashboardparents');

Route::get('/dashboard-parents/profile-settings','DashboardController@viewparentprofilesettings');

Route::get('/dashboard-parents/favorites-listing','DashboardController@viewparentflisting');

Route::get('/dashboard-parents/upgrade-package','DashboardController@viewparentup');

Route::get('/dashboard-parents/security-settings','DashboardController@viewparentssettings');

Route::get('/dashboard-parents/privacy-settings','DashboardController@viewparentprivacysetting');
