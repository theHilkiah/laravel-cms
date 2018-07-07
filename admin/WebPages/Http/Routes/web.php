<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\WebPages\Http\Controllers'
    ], function() {
    Route::get('webpages', 'WebPagesController@index');
});
