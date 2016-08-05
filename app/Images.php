<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'news__images';
    protected $fillable = ['url','id_news'];

    public function News(){

    	return $this->belongsTo('App\News','id');

    }
}
