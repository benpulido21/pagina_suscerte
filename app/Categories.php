<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'news__categories';
    protected $fillable = ['id','category'];

    public function news(){

    	return $this->hasMany('App\News', 'id_category', 'id');

    }
    
}
