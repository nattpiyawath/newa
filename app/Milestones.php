<?php

namespace App;

use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible; //Form Collective
use Illuminate\Database\Eloquent\Model;

class Milestones extends Model
{
    protected $table = "milestones";
    protected $primaryKey = "id"; 
    protected $fillable = ['title','description','thumbnail'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function milestone($query)
    {
        return $query->orderBy('id','DESC')
        ->where('is_published','1')
        ->get();
    }

    public function scopeActive($query){
        return $query->orderBy('id','DESC')
        ->where('is_published','1')
        ->get();
    }
}
