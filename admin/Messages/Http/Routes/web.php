<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Messages\Http\Controllers'
    ], function() {
    Route::get('messages', 'MessagesController@index');
});
