<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Composer;
use Auth;
use App\Http\Requests\CreateSongRequest;

class SongController extends Controller
{
   
    public function index()
    {
        $songs = Song::with('composer')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);
        
        return view('song.index',['songs' => $songs]);
    }

    public function create()
    {   
        //lay du lieu tu composer qua song
        $composers = Composer::all();
        return view('song.create', ['composers' => $composers]);
    }

    public function store(CreateSongRequest $request)
    {
        $song = new Song($request->all());
        $composer = Composer::find($request->composer_id);

        //Upload file mp3
        $fileUpload = $request->file('file_name');
        $nameFileUpload = uniqid() . '.' . $fileUpload->getClientOriginalExtension();
        $path = public_path('/mp3/');

        $fileUpload->move($path, $nameFileUpload);

        $song->file_name = $nameFileUpload;
        

//Upload file img
        $fileUpload = $request->file('cover_image');
        $nameFileUpload = uniqid() . '.' . $fileUpload->getClientOriginalExtension();
        $path = public_path('/img/');

        $fileUpload->move($path, $nameFileUpload);

        $song->cover_image = $nameFileUpload;
        $song->user_id = Auth::user()->id;


        //$compser->Songs()->save($song);
        $composer->songs()->save($song);

        return redirect()->route('song.create')->with('message', 'Done');
    }
}