@extends('layouts.app')
  @section('content')

  <div class="  flex justify-around items-center mb-4 bg-white p-4">
      <h1 class="mr-auto">Birdboard</h1>
      <a href="/project/create">Create</a>
  </div>
 
  <div class="container mx-auto"> 
    
    
      
    
    <ul>
       <div class="flex flex-wrap px-4 -mx-3" > 
         @forelse ($projects as $project)
         <div class="w-1/3 pr-3 pb-6 ">
            <div class=" p-5  shadow rounded   bg-white" style="height: 250px;"> 
              <h3 class="font-normal text-xl mb-4 py-4"> {{$project->title}}</h3>
              <div class="text-gray-400	"> {{str_limit($project->description, 60) }}</div>
            </div> 
         </div>
            
          @empty
          <div>No Projects yet</div>
      @endforelse 
    </div>
      
    </ul>

  </div>

  @endsection 


    
