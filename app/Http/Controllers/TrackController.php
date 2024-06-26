<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Project;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Requests\UpdateTrackRequest;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        //
        return view('tracks.create', [
            "project" => $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackRequest $request,Project $project)
    {
        $project->tracks()->create($request->validated());
       return redirect()->route('projects.show', ['project' => $project]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackRequest $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
