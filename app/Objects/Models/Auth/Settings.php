<?php

namespace App\Objects\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    protected $fillable = [
        'user_id', 'name', 'value', 'expires'
    ];
}
