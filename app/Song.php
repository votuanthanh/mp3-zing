<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'description',
        'file_name',
        'cover_image',
        'year',
        'genre',
    ];
}