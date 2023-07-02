<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Careers extends Model
{
    protected $table = "careers";
    protected $primaryKey = "id"; 
    protected $fillable = [ 'title', 'slug', 'location', 'position', 'department', 'deadline', 'details' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function allCareers($query)
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
