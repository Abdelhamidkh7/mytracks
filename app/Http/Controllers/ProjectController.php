<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\ProjectFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index() {
        $projects = Auth::user()->projects;
        return view('projects.list', [
            "projects" => $projects,
        ]); // projects/list.blade.php
    }
    public function create() {
        return view('projects.create');
    }
    public function store(ProjectFormRequest $request) {
        // $validatedData = $request->validate([
        //     "name"          => "required",
        //     "description"   => "nullable",
        //     "image_url"     => "nullable|url",
        // ]);
       // Project::create($request->validated()); //save
        Auth::user()->projects()->create($request->validated());
        return redirect("/projects");
    }
    public function show(Project $project) {
        $this->authorize('access', $project); // check if the user can view the project
       // $project = Project::find($id);
        return view("projects.show", [
            "project" => $project,
        ]);
    }
    public function edit(Project $project) {
        $this->authorize('access', $project);
        // $project = Project::find(Project $project);
        return view('projects.edit', [
            "project" => $project,
        ]);
    }
    public function update(Project $project, ProjectFormRequest $request) {
        $this->authorize('access', $project);
        // $validatedData = $request->validate([
        //     "name"          => "required",
        //     "description"   => "nullable",
        //     "image_url"     => "nullable|url",
        // ]);
        // $project = Project::find(Project $project);
        $project->update($request->validated()); // save
        return redirect("/projects/{$project ->id}");
    }
    public function destroy(Project $project) {
        $this->authorize('access', $project);
        // $project = Project::find($project ->id);
        $project->delete();
        return redirect("/projects");
    }
}
