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

    public function showSongPlayList($id)
    {
        $songs = Playlist::find($id)->songs()->get();
        return view('playlist.showsong',['songs' => $songs]);
    }


    public function delete($id)
    {
        $playlists = Playlist::find($id);
        $playlists->delete($playlists->id);
        return redirect()->back();
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

    public function edit($id)
    {
        $songs = Song::all();
        $playlist = Playlist::find($id);
        return view('playlist.edit',compact('playlist','id'), ['songs' => $songs]);
    }

    public function update(Request $request, $id)
    {
        $reqs = $request->all();
        $songIds = $reqs['song_id'];
        $playlists = Playlist::find($id);
        $playlists->name = $request->name;
        $playlists->user_id = Auth::user()->id;
        $playlists->save();
        $playlists->songs()->attach($songIds);

        return redirect()->route('playlist.index')->with('message', 'Done');
    }


}
