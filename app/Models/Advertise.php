<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    //
    protected $table = 'Advertises';

    protected $fillable = ['idCategory', 'title', 'slug', 'image'];

    public function category (){
    	return $this->belongsTo('App/Models/Category', 'idCategory', 'id');
    }
}
