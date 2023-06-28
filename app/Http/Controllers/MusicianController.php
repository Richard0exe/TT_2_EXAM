<?php

namespace App\Http\Controllers;

use App\Models\musicians;
use Illuminate\Http\Request;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $musicians = musicians::all();
    
    if (auth()->user()->role === 'admin') {
        return view('musicians.musicians', compact('musicians'));
    } else {
        return view('musicians.musician-view', compact('musicians'));
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musicians.musicians_create');
    }

    /**
     * Store a newly created resource in storage.a
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'stage_name' => 'required',
            'real_name' => 'required',
            'music_label' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imagePath = $validatedData['image']->store("public/Logos");
    
        $musician = musicians::create([
            'stage_name' => $validatedData['stage_name'],
            'real_name' => $validatedData['real_name'],
            'music_label' => $validatedData['music_label'],
            'image_path' => $imagePath,
        ]);
    
        return redirect()->route('musicians.index')->with('success', 'Musician created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musician = musicians::findOrFail($id);
        return view('musicians.musicians_edit', compact('musician'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'stage_name' => 'required',
            'real_name' => 'required',
            'music_label' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $musician = musicians::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Delete the old image from storage
            //Storage::delete($musician->image_path);
    
            // Store the new image
            $imagePath = $validatedData['image']->store("public/Logos");
            $musician->image_path = $imagePath;
        }
    
        $musician->stage_name = $validatedData['stage_name'];
        $musician->real_name = $validatedData['real_name'];
        $musician->music_label = $validatedData['music_label'];
        $musician->save();
    
        return redirect()->route('musicians.index')->with('success', 'Musician updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musician = musicians::findOrFail($id);

        // Delete the associated image from storage
        //Storage::delete($musician->image_path);

        $musician->delete();

        return redirect()->route('musicians.index')->with('success', 'Musician deleted successfully!');
    }
}
