<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    protected $table = 'departments';

    protected $fillable = ['name', 'slug', 'status'];

    // public function categories()
    // {
    // 	# code...
    // 	return $this->belongsTo('App/Models/Category', 'idCategory', 'id');
    // }
}
