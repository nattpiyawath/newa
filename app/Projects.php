<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Projects extends Model
{
    use FormAccessible;

    protected $table = "projects";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['pro_title','pro_slug','pro_remark','active']; //protect data in SQL

    //Use scope you can easier seporate queries data as you want
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
        return $query->where('pro_slug',$slug)->firstOrFail();
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}