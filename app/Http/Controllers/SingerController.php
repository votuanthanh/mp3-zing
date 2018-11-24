<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Singer;

class SingerController extends Controller
{
    public function create()
    {

        return view('singer.create');
    }

    public function store(Request $request)
    {
		 try {
            $singer = new Singer();
            $singer->name = $request->name;
            // $book->title = $request->title;
            // $book->description = $request->description;
            // $book->publication_year = $request->publication_year;
            // $book->number_of_page = $request->number_of_page;
            // $book->author_id = $request->author_id;
            $singer->save();

        } catch (Exception $e) {

        }

        return redirect()->route('singer.create')->with('message', 'Done');
    }
}
