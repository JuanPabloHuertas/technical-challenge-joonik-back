<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'creation_date'
    ];

    protected $casts = [
        'creation_date' => 'datetime'
    ];
}
