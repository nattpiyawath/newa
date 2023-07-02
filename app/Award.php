<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $table = "awards";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['title','slug','active']; //protect data in SQL
    
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


    public function user(){

        return $this->belongsTo('App\User');
    }
}
