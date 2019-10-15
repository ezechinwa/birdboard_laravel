<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = array('title', 'description','owner_id');
  
    function path(){
        return "/project/{$this->id}";
      }

      function owner(){
       return $this->belongsTo(User::class);
      }
}
