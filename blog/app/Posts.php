<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    
    public function user_id()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
