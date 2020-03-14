<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class services extends Model
{
    //
=======
use Illuminate\Database\Eloquent\SoftDeletes;

class services extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'image', 'user_id'];
    protected $date = ['deleted_at'];

    public function my_user_id(){
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
>>>>>>> 89e2728c158680675698497648503ca578172fbf
}
