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
        public function store(){
        
           $attributes =  request()->validate(
                [
                        'title' => 'required|min:20',
                        'description' => 'required|min:10'
                    ]
                );
        Project::create($attributes);
        return redirect('/projects');
      
        }

        public function show(Project $project){
            return view('projects.show', compact('project'));
        }
}
