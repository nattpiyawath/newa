<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
//use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Locale extends Model
{
    //use HasFactory;
    //use FormAccessible;

    protected $table = "locale";
    protected $primaryKey = "id"; //Assign lang id as primaryKey after changed default ID at SQL
    protected $fillable = ['lang_code','lang_name','lang_icon','active', 'default']; //protect data in SQL

    //Use scope you can easier seporate queries data as you want
    public function scopeActive($query){
        return $query->orderBy('id','DESC')
        ->where('active',1)
        ->get();
    }

    public function scopeInActive($query){
        return $query->orderBy('id','DESC')
        ->where('active', 0)
        ->get();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}