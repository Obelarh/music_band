<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
// use Illuminate\Http\Request;
use App\Models\Music;
use App\Services\UploadService;



class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dashboard');
    }

    public function music_form(){
        return view('admin.add_music');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {

        // dd('i am here');
        $validatedData = $request->validated();

        // if ($request->hasFile('mp3')){
        //     $music = $request->file('mp3')->store('musics', 'public');
        //     $validatedData['musics'] = $music;


        // }

        if ($request->mp3) {
            $fileName = $request->name_of_music . '_' . time() . '.' . $request->mp3->getClientOriginalExtension();
            $file_url = UploadService::upload($request->mp3, 'musics', $fileName);
        }

        Music::create([
            'name_of_music' => $request->name_of_music,
            'user_id' => Auth::user()->id,
            'name_of_artist' => $request->name_of_artist,
            'music_released_date' => $request->music_released_date,
            'type_of_music' => $request->type_of_music,
            'music_file' => $file_url,

        ]);

        // return redirect()->route('user.dashboard')->with('message', 'Music added successfully');

        // dd($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        //
    }
}
