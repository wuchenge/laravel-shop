<?php

Route::get('/', 'Home\PagesController@root')->name('root');

Auth::routes();

Route::group([
    'middleware' => 'auth',
    'prefix' => '',
    'namespace' => 'Home'
], function () {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');

    Route::group(['middleware' => 'email_verified'], function () {
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    });
});
