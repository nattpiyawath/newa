<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparts_cate extends Model
{
    use HasFactory;

    public function Sparts()
    {
       return $this->hasMany('App\Sparts');
    }

}
