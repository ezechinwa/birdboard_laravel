<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Project extends TestCase
{
    use RefreshDatabase; 
   /** @test */
   function is_has_its_paths(){
     $project =  factory('App\Project')->create();
     $this->assertEquals('/project/'.$project->id, $project->path());
   }
  /** @test */
   function a_project_belongs_to_an_owner(){
    $project =  factory('App\Project')->create();
    $this->assertInstanceOf('App\User',$project->owner);
  
   }

  

}
