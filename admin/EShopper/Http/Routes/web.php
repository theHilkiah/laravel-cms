<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\EShopper\Http\Controllers'
    ], function() {
    Route::get('eshopper', 'EShopperController@index');
});
