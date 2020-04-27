<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable = ['idCategory', 'idTag', 'title', 'slug', 'content', 'image', 'status']; 

    public function category(){
    	return $this->belongsTo('App/Models/Category', 'idCategory', 'id');
    }

    public function tag(){
    	return $this->belongsTo('App/Models/Tag', 'idTag', 'id');
    }
}
