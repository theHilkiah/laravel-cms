<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Settings\Http\Controllers'
    ], function() {
    Route::get('settings', 'SettingsController@index');
});
