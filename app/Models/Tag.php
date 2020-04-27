<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tags';

    protected $fillable = ['name'];

    public function post(){
    	return $this->hasMany('App/Models/Post', 'idTag', 'id');
    }
}
