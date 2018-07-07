<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Account\Http\Controllers'
    ], function() {
    Route::get('account', 'AccountController@index');
});
