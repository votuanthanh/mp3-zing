<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
        'name',
    ];

    public function songs () {
    	return $this->belongsToMany('App\Song', 'playlist_song', 'playlist_id', 'song_id');
    }
}
