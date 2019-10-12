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
    // /project/'.$project->id 
     $project =  factory('App\Project')->create();
     $this->assertEquals('/project/'.$project->id, $project->path());
   }

  

}
