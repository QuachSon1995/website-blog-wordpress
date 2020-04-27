<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = ['idDepartment', 'name', 'slug', 'status']; 

    public function department()
    {
    	# code...
    	return $this->belongsTo('App/Models/Department', 'idDepartment', 'id');
    }

    public function post(){
    	return $this->hasMany('App/Models/Post', 'idCategory', 'id');
    }

    public function advertise(){
    	return $this->hasMany('App/Models/Advertise', 'id', 'idAdvertise')
    }
}
