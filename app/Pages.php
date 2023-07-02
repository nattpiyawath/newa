<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Pages extends Model
{
    protected $table = "pages";
    protected $primaryKey = "id"; 
    protected $fillable = ['title', 'slug', 'layout' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function children(){
    //     return $this->hasMany( 'App\Models\Pages', 'parent', 'title' );
    //   }
      
    //   public function parent(){
    //     return $this->hasOne( 'App\Models\Pages', 'title', 'parent' );
    //   }

    // public function childs() {
    //     return $this->hasMany('App\Pages','parent','id') ;
    // }

    public static function getSlug($id){
        $slug = DB::table('pages')->select('slug')
             ->where('id','=', $id)
             ->first();
        return $slug->slug;
    }

    public static function getTitle($id){
        $title = DB::table('pages')->select('title')
             ->where('id','=', $id)
             ->first();
        return $title->title;
    }

    public static function getPage_headerImg($slug){
        $header_img = DB::table('pages')->select('header_img')
             ->where('slug','=', $slug)
             ->first();
        return $header_img->header_img;
    }

    public static function getPageTitle($slug){
        $title = DB::table('pages')->select('title')
             ->where('slug','=', $slug)
             ->first();
        return $title->title;
    }
    
    public function specification(){
        return $this->belongsToMany('App\Specification');
    }
    
    public function gallery(){
        return $this->belongsToMany('App\Gallery');
    }

}