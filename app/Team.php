<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";
    protected $primaryKey = "id"; //Assign pro_id as primaryKey after changed defualt ID at SQL
    protected $fillable = ['name','slug','details']; //protect data in SQL

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

    public static function getTitle($id){
        $name = DB::table('teams')->select('name')
             ->where('id','=', $id)
             ->first();
        return $name->name;
    }


}
