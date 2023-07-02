<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant_cate extends Model
{
    use HasFactory;

    public function merchant()
    {
       return $this->hasMany('App\Merchant');
    }
}
