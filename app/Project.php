<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = array('title', 'description','owner_id');
  
    function path(){
        return "/project/{$this->id}";
      }
}
