  @extends('layouts.app')
  @section('content')
  @foreach ($projects as $project )
  <a href={{$project->path()}}>{{$project->title}}</a>
      <li></li>
  @endforeach
      
  @endsection

  
