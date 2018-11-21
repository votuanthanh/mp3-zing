<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{

    protected $fillable = [
        'name',
    ];

/*    public function singer()
    {
         return $this->belongsToMany(Song::class, 'singer_id', 'id');
    } */

}
