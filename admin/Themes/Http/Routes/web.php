<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Themes\Http\Controllers'
    ], function() {
    Route::get('themes', 'ThemesController@index');
});
