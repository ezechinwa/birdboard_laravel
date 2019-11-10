@extends('layouts.app')
  @section('content')

  <header class=" flex  items-center mb-3 py-4 ">

    <div class="flex justify-between items-center w-full">
        <h1 class="mr-auto ml-5 p-5 text-gray-600 text-sm">My Projects</h1>
        <div class=" p-5 ml-5">
            {{-- <a class="text-gray-600 no-underline" href="/project/create">New Project</a> --}}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm" style="box-shadow:0 2px 7px 0 #b0eaff;"><a class=" no-underline" href="/project/create">New Project</a></button>
        </div>

    </div>
     
     
  </header>
 
  <div class="container mx-auto"> 
    
    
      
    
    <ul>
       <div class="flex flex-wrap px-4 -mx-3" > 
         @forelse ($projects as $project)
         <div class="w-1/3 pr-3 pb-6 ">
            <div class=" p-5  shadow rounded   bg-white" style="height: 250px;"> 
              <h3 class="font-normal text-xl mb-4 py-4  -ml-5 border-l-4 border-blue-400 pl-4"> {{$project->title}}</h3>
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


    
