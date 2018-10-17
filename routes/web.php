<?php

Route::get('/', 'Home\PagesController@root')->name('root');

Auth::routes();

Route::group([
    'middleware' => 'auth',
    'prefix' => '',
    'namespace' => 'Home'
], function () {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');

    Route::group(['middleware' => 'email_verified'], function () {
        Route::get('/test', function () {
            return 'Your email is verified';
        });
    });
});
