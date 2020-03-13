<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
	use SoftDeletes;

    protected $fillable = ['title', 'description', 'content', 'image', 'user_id'];
    protected $date = ['delete_at'];
    public function user_id()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
