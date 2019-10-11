<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;
  
   
     /** @test */
     public function a_user_can_create_a_project()
     {
         $this->withoutExceptionHandling();
         $attributes = [
            'title' => $this->faker->sentence,
             'description' => $this->faker->sentence
         ]; 
         $this->post('/projects', $attributes)->assertRedirect('/projects');
         $this->assertDatabaseHas('projects', $attributes);
         $this->get('/projects')->assertSee($attributes['title']);
   
     }

    /** @test */
    public function a_project_must_have_a_title_and_description(){
        $attributes = factory('App\Project')->raw(['title'=>'','description'=>'']);
        $this->post('/projects',$attributes)->assertSessionHasErrors('title');
        $this->post('/projects',$attributes)->assertSessionHasErrors('description');
    }

    /** @test */
    public function a_user_can_view_a_project(){
        $this->withoutExceptionHandling();
      $project =   factory('App\Project')->create();
      $this->get('/project/'.$project->id)->assertSee($project->title)->assertSee($project->description); 
    }

  
    }
     

