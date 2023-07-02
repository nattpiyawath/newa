<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function gallery_details(){
        return $this->hasMany('App\GalleryDetail');
    }

}
