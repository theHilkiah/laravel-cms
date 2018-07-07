<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Security\Http\Controllers'
    ], function() {
    Route::get('security', 'SecurityController@index');
});
