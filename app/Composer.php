<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    protected $fillable = [
        'name',
    ];

    //tao moi quan he voi song
    public function songs () {
    	return $this->hasMany('\App\Song', 'composer_id', 'id');
    }
}
