<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Post extends Model
{
   
    protected $table = "posts";
    protected $primaryKey = "id"; 
    protected $fillable = ['title', 'slug', 'type'];


    public function category()
    {

       return $this->belongsTo('App\Category');

    }
    public function tags()
    {

      return $this->belongsToMany('App\Tag');
    }

    public static function getTitle($id){
        $title = DB::table('posts')->select('title')
             ->where('id','=', $id)
             ->first();
        return $title->title;
    }

    public static function getSlug($id){
        $slug = DB::table('posts')->select('slug')
             ->where('id','=', $id)
             ->first();
        return $slug->slug;
    }


    public static function getPage_headerImg($slug){
        $header_img = DB::table('posts')->select('header_img')
             ->where('slug','=', $slug)
             ->first();
        return $header_img->header_img;
    }

    public static function getPageTitle($slug){
        $title = DB::table('posts')->select('title')
             ->where('slug','=', $slug)
             ->first();
        return $title->title;
    }

    //Use scope you can easier seporate queries data as you want
    public function scopeActive($query){
        return $query->orderBy('id','DESC')
        ->where('is_published','1')
        ->get();
    }

    public function scopeInActive($query){
        return $query->orderBy('id','DESC')
        ->where('is_published', 0)
        ->get();
    }

    public function scopeGetBySlug($query,$slug){
        return $query->where('post_slug',$slug)->firstOrFail();
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
