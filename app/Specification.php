<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Specification extends Model
{
    use HasFactory;

    protected $table = "specifications";
    protected $primaryKey = "id"; //Assign id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['code','lang_code',]; //protect data in SQL

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
    
    public function pages(){
        return $this->belongsToMany('App\Pages');
    }

    public static function getTitle($id){
        $code = DB::table('specifications')->select('code')
             ->where('id','=', $id)
             ->first();
        return $code->code;
    }

}
