<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Slide extends Model
{
    protected $table = "slide";
    protected $primaryKey = "id"; 
    protected $fillable = [ 'title', 'slide_img', 'Img_mobile', 'lang_code'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function allSlides($query)
    {
        return $query->orderBy('id','DESC')
        ->where('is_published','1')
        ->get();
    }
}
