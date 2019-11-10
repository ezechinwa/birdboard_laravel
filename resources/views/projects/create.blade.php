@extends('layouts.app')
  @section('content')
      
  <div class="formholder">
    <h1>Create project</h1>
    <form action="/projects" method="POST">
        @csrf
  
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Title"  name="title"  >
        </div>
  
        <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" placeholder = "Description" rows="3" name="description"></textarea>
        </div>
  
  
        <button type="submit" class="btn btn-block btn-primary mb-2">Create</button>
        <a href="/projects">Back</a>
  
  
  
        
  
  
  
      </form>

</div>

  @endsection


   
   
    
  