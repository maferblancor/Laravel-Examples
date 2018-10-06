<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function isCompleted(){
    	if ($this->completed ==false){
    		return false;
    	}else{
    		return true;
    	}
    }
    public function scopeIncomplete($query){
    	return  $query->where('completed',0);
    }
}
