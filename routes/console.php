<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('mm', function () {
    return Artisan::command("module:make");
})->describe('Alias to module:make');

Artisan::command('mmm {model}', function ($model) {
 return Artisan::command("module:make-model $model");
})->describe('Alias to module:make');

Artisan::command('mmc', function () {
    return Artisan::command("module:make-controller");
})->describe('Alias to module:make');
