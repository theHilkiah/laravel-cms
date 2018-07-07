<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Calendar\Http\Controllers'
    ], function() {
    Route::get('calendar', 'CalendarController@index');
});
