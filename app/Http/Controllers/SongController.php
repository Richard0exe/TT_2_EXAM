<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function index()
{
    if (auth()->user()->role === 'admin') {
        $songs = Song::latest()->paginate(5);
        $header = "My Songs";
        return view('songs.index', compact('songs', 'header'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    } else {
        $songs = Song::latest()->paginate(5);
        return view('songs.index-view', compact('songs'));
    }
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'album' => 'required',
            'release_date' => 'required',
            'lyrics' => 'required',
        ]);

        Song::create($request->all());

        return redirect()->route('songs.index')
            ->with('success', 'Song created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $song = Song::find($id);
    $header = "Show Song"; // Set the value of the $header variable

    return view('songs.show', compact('song', 'header'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
    
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required',
            'album' => 'required',
            'release_date' => 'required',
            'lyrics' => 'required',
        ]);

        $song->update($request->all());

        return redirect()->route('songs.index')
            ->with('success', 'Song updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')
            ->with('success', 'Song deleted successfully.');
    }
}