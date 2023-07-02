<?php

namespace App;

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible; //Form Collective

class Setting extends Model
{

	protected $table = "settings";
    protected $primaryKey = "id"; 
    protected $fillable = ['setting', 'value', 'is_array'];
    

   public function menuSetting()
   {
      return $this->hasMany('App\Menu');
   }


}
