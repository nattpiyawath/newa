<?php

namespace App;

use \DB;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menu';

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        //$this->table = config('menu.table_prefix') . config('menu.table_name_menus');
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

    public function items()
    {
        return DB::table('menu_items')->with('child')->where('parent', 0)->orderBy('sort', 'ASC');
    }

    public static function getMenu_translated($id){
        $menu = self::where('translate_id','=', $id)->first();
        return $menu->id;
    }

}
