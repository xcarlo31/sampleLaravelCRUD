<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }

    public function show(Project $project){
        // $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }
    public function edit(Project $project){
        
        // $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){

        // $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->desc0 = request('desc0');

        $project->save();

        return redirect('/projects');
    }

    public function destroy(Project $project){
        // Project::findOrFail($id)->delete();

        return redirect('/projects');
    }

    public function store(){

        Project::create([
            'title' => request('title'),
            'desc0' => request('desc0')
        ]);
        
        return redirect('/projects');
    }
}
