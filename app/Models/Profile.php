<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'gender', 'meli', 'mobile', 'user_id'
    ];

    protected $hidden = [
        'meli',
    ];
}
