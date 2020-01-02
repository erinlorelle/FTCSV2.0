<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = ['name', 'college'];
    //protected $guarded = ['id'];  //not accessible
    
    public function courses(){
        
        return $this->hasMany('App\Course');
    }
    
    public function users(){
        
        return $this->hasMany('App\User');
    }
}
