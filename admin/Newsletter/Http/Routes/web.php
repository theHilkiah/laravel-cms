<?php

Route::group([
        'middleware' => 'web',
        'prefix' => strtolower('Admin'),
        'namespace' => 'Admin\Newsletter\Http\Controllers'
    ], function() {
    Route::get('newsletter', 'NewsletterController@index');
});
