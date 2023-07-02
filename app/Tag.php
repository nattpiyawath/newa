<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   
    protected $table = "post_tag";
	protected $primaryKey = "id"; 
    protected $fillable = ['post_id', 'tag_id'];

   public function posts()
   {
   		return $this->belongsToMany('App\Post');
   }

}
