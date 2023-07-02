<?php

namespace App;

use \DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Branchs extends Model
{
    use HasFactory;
    protected $table = "branchs";
    protected $primaryKey = "id"; 
    protected $fillable = [ 'province', 'title', 'address', 'number', 'email', 'latitude', 'longitude' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function types(){
    //     return $this->belongsToMany('App\Type');
    // }
    
    //Use scope you can easier seporate queries data as you want
    // public function scopeActive($query){
    //     return $query->orderBy('id','DESC')
    //     ->where('is_published','1')
    //     ->get();
    // }

    // public function scopeInActive($query){
    //     return $query->orderBy('id','DESC')
    //     ->where('is_published', 0)
    //     ->get();
    // }
    
    
}
