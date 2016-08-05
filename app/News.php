<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news__news';
    protected $fillable = ['title','source','date_p','id_category','content'];

    public function category()
    {
    	return $this->belongsTo('App\Categories', 'id_category');

    }

    public function images()
    {

    	return $this->hasMany('App\Images','id_news');

    }
}
