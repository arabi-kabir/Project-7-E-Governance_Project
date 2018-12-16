<?php

Route::get('/', function () {
    return redirect('/login');
});

// AuthController
Route::get('/login', 'AuthController@show_login')->name('show_login');
Route::get('/registration_1', 'AuthController@show_registration_1')->name('show_registration_1');
Route::post('/registration_1', 'AuthController@step_1');
Route::get('/registration_2', 'AuthController@show_registration_2')->name('show_registration_2');
Route::post('/registration_2', 'AuthController@step_2');
Route::get('/registration_3', 'AuthController@show_registration_3')->name('show_registration_3');
Route::post('/registration_3', 'AuthController@step_3');
Route::get('/registration_4', 'AuthController@show_registration_4')->name('show_registration_4');
Route::post('/registration_4', 'AuthController@step_3');
Route::post('/registration_4', 'AuthController@step_4');
Route::post('/login', 'AuthController@verifyUser');
Route::get('/logout', 'AuthController@logout')->name('logout');

// CentralAdminController
Route::get('/home', 'CentralAdminController@index')->name('admin_home');
Route::get('/add-district', 'CentralAdminController@add_district')->name('show_add_district');
Route::post('/add-district', 'CentralAdminController@insert_district');
Route::get('/show-all-district', 'CentralAdminController@show_district')->name('show_district');
Route::get('/show-all-division', 'CentralAdminController@show_division')->name('show_division');
Route::get('/add-divisional-officer', 'CentralAdminController@show_add_divisional_officer')->name('show_add_divisional_officer');
Route::post('/add-divisional-officer', 'CentralAdminController@insert_divisional_officer');
Route::get('/show-divisional-officer', 'CentralAdminController@show_divisional_officers')->name('show_divisional_officers');
Route::get('/add-market-item', 'CentralAdminController@add_market_item')->name('add_market_item');
Route::post('/add-market-item', 'CentralAdminController@insert_market_item')->name('insert_market_item');
Route::get('/market-forecast', 'CentralAdminController@market_forecast')->name('market_forecast');
Route::post('/market-forecast', 'CentralAdminController@market_forecast_filter');
Route::get('/market-allocate', 'CentralAdminController@market_allocate')->name('market_allocate');
Route::post('/market-allocate', 'CentralAdminController@insert_market_allocate');
Route::get('/admin/add-item', 'CentralAdminController@add_item')->name('add_item_admin');
Route::post('/admin/add-item', 'CentralAdminController@insert_item');
Route::get('/allocation-history', 'CentralAdminController@allocationHistory')->name('allocationHistory');
Route::post('/allocation-history', 'CentralAdminController@allocationHistory_filter');


// DivisionalOfficerController
Route::get('/division/dashboard', 'DivisionalOfficerController@index')->name('division_home');
Route::get('/add-district-officer', 'DivisionalOfficerController@show_add_district_officer')->name('show_add_district_officer');
Route::post('/add-district-officer', 'DivisionalOfficerController@insert_district_officer');
Route::get('/show-district-officer', 'DivisionalOfficerController@show_district_officers')->name('show_district_officers');
Route::get('/upazila-list', 'DivisionalOfficerController@upazila_list')->name('upazila_list');
Route::post('/upazila-list', 'DivisionalOfficerController@insert_upazila');
Route::get('/add-upazila-officer', 'DivisionalOfficerController@show_add_upazila_officer')->name('show_add_upazila_officer');
Route::post('/add-upazila-officer', 'DivisionalOfficerController@insert_upazila_officer');
Route::get('/show-upazila-officer', 'DivisionalOfficerController@show_upazila_officers')->name('show_upazila_officers');
Route::get('/division/market-allocation', 'DivisionalOfficerController@division_allocation')->name('division_allocation');
Route::post('/division/market-allocation', 'DivisionalOfficerController@division_allocation_filter');
Route::get('/upazila-allocation', 'DivisionalOfficerController@upazila_allocation')->name('allocate_to_upazila');
Route::post('/upazila-allocation', 'DivisionalOfficerController@insert_upazila_allocation');
Route::get('/upazila-allocation-history', 'DivisionalOfficerController@upazila_allocationHistory')->name('upazila_allocation_history');
Route::post('/allocation-history', 'DivisionalOfficerController@allocationHistory_filter');


// UpazilaOfficerController
Route::get('/upazila/dashboard', 'UpazilaOfficerController@index')->name('upazila_home');
Route::get('/upazila/aratdar-list', 'UpazilaOfficerController@aratdar_list')->name('aratdar_list');
Route::get('/upazila/upazila-allocation', 'UpazilaOfficerController@upazilaAllocation')->name('upazilaAllocation');
Route::get('/upazila/allocate-to-aratdar', 'UpazilaOfficerController@allocate_to_aratdar')->name('allocate_to_aratdar');
Route::post('/upazila/allocate-to-aratdar', 'UpazilaOfficerController@insert_aratdar_allocation');
Route::get('/upazila/aratdar-allocation-history', 'UpazilaOfficerController@aratdar_allocationHistory')->name('aratdar_allocationHistory');


// AratdarController
Route::get('/aratdar/dashboard', 'AratdarController@index')->name('aratdar_home');
Route::get('/aratdar/aratdar-allocation', 'AratdarController@aratdar_allocation')->name('aratdar_allocation');
Route::get('/aratdar/profile', 'AratdarController@my_profile_aradtdar')->name('my_profile_aradtdar');


//
