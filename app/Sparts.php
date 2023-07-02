<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Sparts extends Model
{
    use HasFactory;

    protected $table = "sparts";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['title','slug','details']; //protect data in SQL

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function scopeActive($query){
        return $query->orderBy('id','DESC')
        ->where('active','1')
        ->get();
    }

    public function scopeInActive($query){
        return $query->orderBy('id','DESC')
        ->where('active', 0)
        ->get();
    }

    public function scopeGetBySlug($query,$slug){
        return $query->where('slug',$slug)->firstOrFail();
    }
    
    public function sparts_cate()
    {
        return $this->belongsToMany('App\Sparts_cate');
    }

    public static function getTitle($id){
        $title = DB::table('sparts')->select('title')
             ->where('id','=', $id)
             ->first();
        return $title->title;
    }


}
