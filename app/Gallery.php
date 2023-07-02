<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Gallery extends Model
{
    use HasFactory;

    protected $table = "gallery";
    protected $primaryKey = "id"; 
    protected $fillable = ['gallery_name', 'image_url', 'lang_code', 'data', 'is_published' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pages()
    {
        return $this->belongsTo(Pages::class);
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

    public static function getTitle($id){
        $gallery_name = DB::table('gallery')->select('gallery_name')
             ->where('id','=', $id)
             ->first();
        return $gallery_name->gallery_name;
    }


}
