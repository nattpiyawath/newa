<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DB;

class MenuItems extends Model
{

    protected $table = 'menu_items';

    protected $fillable = ['label', 'link', 'parent', 'sort', 'class', 'menu', 'depth'];

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        //$this->table = config('menu.table_prefix') . config('menu.table_name_items');
    }

    public function getsons($id)
    {
        return $this->where("parent", $id)->get();
    }
    public function getall($id)
    {
        return $this->where("menu", $id)->orderBy("sort", "asc")->get();
    }

    public static function getNextSortRoot($menu)
    {
        return self::where('menu', $menu)->max('sort') + 1;
    }

    public function child()
    {
        return DB::table('menu_items')->orderBy('sort', 'ASC');
    }

    public static function getMychild($id)
    {
        return self::where('parent', $id)->get();
    }

    public static function getMyparent($menu)
    {
        return self::where('menu', $menu)->where('parent', 0)->orderBy('sort', 'ASC')->get();
    }

    public function parent_menu()
    {
        return DB::table('menu_items')->orderBy('sort', 'ASC');
    }

}
