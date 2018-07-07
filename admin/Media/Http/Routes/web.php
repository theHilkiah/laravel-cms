<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Media\Http\Controllers'
    ], function() {
    Route::get('media', 'MediaController@index');
});
