<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Merchant extends Model
{
    use HasFactory;

    protected $table = "merchants";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['title','slug','active']; //protect data in SQL

    public function user(){

        return $this->belongsTo('App\User');
    }
    
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
    
    public function merchant_cate()
    {
        return $this->belongsToMany('App\Marchant_cate');
    }

}
