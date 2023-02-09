<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function dashboard() {
        $projects = Project::all();

        return view('pages.dashboard', compact('projects'));
    }

    public function projects() {

        $projects = Project :: all();

        return view('pages.projects', compact('projects'));
    }

    public function projectShow(Project $project) {

        return view('pages.projectShow', compact('project'));
    }

    // delete
    public function projectDelete(Project $project) {

        $project -> delete();
    
        return redirect() -> route('dashboard');
    }

    // create
    public function projectCreate() {

        return view('pages.projectCreate');
    }

    // store
    public function projectStore(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'description' => 'nullable|string',
            'main_image' => 'string',
            'release_date' => 'date',
            'repo_link' => 'string',
        ]);
    
        $project = new Project();
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

    
        $project -> save();
    
        return redirect() -> route('dashboard');
    }

    public function projectEdit(Project $project) {

        return view('pages.projectEdit', compact('project'));
    }

    public function projectUpdate(Request $request, Project $project) {

        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'description' => 'nullable|string',
            'main_image' => 'string',
            'release_date' => 'date',
            'repo_link' => 'string',
        ]);
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

    
        $project -> save();
    
    
        return redirect() -> route('dashboard');
    }
}

