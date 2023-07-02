<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Posts extends Model
{
    use FormAccessible;

    protected $table = "posts";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['post_title','post_slug','post_remark','active']; //protect data in SQL

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