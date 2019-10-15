<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;

class ProjectTest extends TestCase
{
 use WithFaker, RefreshDatabase;
   //use WithFaker;
  
   
     /** @test */
     public function a_user_can_create_a_project()
     {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
         $attributes = [
             'title' => $this->faker->sentence,
             'description' => $this->faker->sentence
         ]; 

         $this->get('/project/create')->assertStatus(200);
         $this->post('/projects', $attributes)->assertRedirect('/projects');
         $this->assertDatabaseHas('projects', $attributes);
         $this->get('/projects')->assertSee($attributes['title']);
   
     }

    /** @test */
    public function a_project_must_have_a_title_and_description(){
        $this->be(factory(User::class)->create());
        $attributes = factory('App\Project')->raw(['title'=>null,'description'=>null]);
        $this->post('/projects',$attributes)->assertSessionHasErrors('title');
        $this->post('/projects',$attributes)->assertSessionHasErrors('description');
    }

    /** @test */
    public function a_user_can_view_a_project(){
      $this->actingAs(factory(User::class)->create());
      $this->withoutExceptionHandling();
      $project =   factory('App\Project')->create(['owner_id'=>auth()->user()->id]);
      $this->get($project->path())->assertSee($project->title)->assertSee($project->description); 
    }

      /** @test */
      public function only_authenticated_users_can_create_a_project(){
        $attributes =   factory('App\Project')->raw(['owner_id'=>null]);
        $this->post('/projects',$attributes)->assertRedirect('login');
    }

     /** @test */
     public function users_can_not_view_another_user_project(){
         $this->be(factory(User::class)->create());
         $project =   factory('App\Project')->create();
         $this->get($project->path())->assertStatus(403); 
    

     }
 
      /** @test */
      public function only_authenticated_users_can_view_projects(){
         $this->get('/projects')->assertRedirect('login');
     }

     /** @test */
     public function only_authenticated_users_can_visit_create_project_form(){
      $this->get('/project/create')->assertRedirect('login');
  }

       /** @test */
       public function only_authenticated_users_can_view_project(){
        $project =   factory('App\Project')->create(); 
        $this->get($project->path())->assertRedirect('login');
     }
  
    }
     

