<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    
    public function index(){
    //    $projects = Project::all();
    $projects = auth()->user()->projects;
       return view('projects.index', compact('projects'));
      }
        public function store(){
        
           $attributes =  request()->validate(
                [
                        'title' => 'required|min:5',
                        'description' => 'required|min:5',
                    ]
                );

           
         auth()->user()->projects()->create($attributes);
        return redirect('/projects');
      
        }
        public function create(){
            // dd($project->owner);
            // if(auth()->user()->isNot($project->owner)){
            //     abort(403);
            // }
            return view('projects.create');
        }

        public function show(Project $project){
         //   dd($project->owner);
            if(auth()->user()->isNot($project->owner)){
                abort(403);
            }
            return view('projects.show', compact('project'));
        }
}
