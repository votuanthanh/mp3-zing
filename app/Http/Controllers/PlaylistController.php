<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;
use App\Song;
use App\Composer;
use Auth;

class PlaylistController extends Controller
{
    //

    public function index () {
        $playlists = Playlist::all();
        return view('playlist.index',['playlists' => $playlists]);
    }

    public function create()
    {

        $songs = Song::all();
        return view('playlist.create', ['songs' => $songs]);
    }

    public function store(Request $request)
    {
        $reqs = $request->all();
        $songIds = $reqs['song_id'];

		try {
            $playlist = new Playlist();
            $playlist->name = $request->name;
            // $book->title = $request->title;
            // $book->description = $request->description;
            // $book->publication_year = $request->publication_year;
            // $book->number_of_page = $request->number_of_page;
            // $book->author_id = $request->author_id;
            $playlist->user_id = Auth::user()->id;
            $playlist->save();
            $playlist->songs()->attach($songIds);

        } catch (Exception $e) {

        }


        return redirect()->route('playlist.create')->with('message', 'Done');
    }


}
