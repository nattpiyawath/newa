<?php

namespace App\Http\Controllers;

use App\Menus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\MenuItems;

class MenuController extends Controller
{
    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    function index()
    {
        $menu = new Menus();
        $menuitems = new MenuItems();
        $menulist = $menu->select(['id', 'name'])->get();
        $menulist = $menulist->pluck('name', 'id')->prepend('Select menu', 0)->all();

        $allmenus = Menus::where('lang_code', '=' , $this->lang)->get();

        $allMenusByLang = Menus::where('lang_code', '!=' , $this->lang)->get();

        if ((request()->has("action") && empty(request()->input("menu"))) || request()->input("menu") == '0') {
            //return view('admin.menu.index')->with("menulist" , $menulist);
            return view('admin.menu.index', ['menulist'=>$menulist, 'allmenus' => $allmenus, 'allMenusByLang' => $allMenusByLang]);
        } else {

            $menu = Menus::find(request()->input("menu"));
            $menus = $menuitems->getall(request()->input("menu"));

            return view('admin.menu.index', ['menus'=>$menus, 'menulist'=>$menulist, 'indmenu' => $menu, 'allmenus' => $allmenus, 'allMenusByLang' => $allMenusByLang]);
        }

    }

    // public function select_menu_edit($name = "menu", $menulist2 = array())
    // {
    //     $html = '<select name="' . $name . '">';

    //     foreach ($menulist2 as $key => $val) {
    //         $active = '';
    //         if (request()->input('menu') == $key) {
    //             $active = 'selected="selected"';
    //         }
    //         $html .= '<option ' . $active . ' value="' . $key . '">' . $val . '</option>';
    //     }
    //     $html .= '</select>';
    //     return $html;
    // }


    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "lang_code" => 'required'
        ]
        );

        $menu = new Menus();
        $menu->name = $request->name;
        $menu->lang_code = $request->lang_code;
        $menu->translate_id = $request->translate_id;
        $menu->save();
        return json_encode(array("resp" => $menu->id));
    }

    public function deleteitemmenu()
    {
        $menuitem = MenuItems::find(request()->input("id"));

        $menuitem->delete();
    }

    public function destroy()
    {
        $menus = new MenuItems();
        $getall = $menus->getall(request()->input("id"));
        if (count($getall) == 0) {
            $menudelete = Menus::find(request()->input("id"));
            $menudelete->delete();

            return json_encode(array("resp" => "you delete this item"));
        } else {
            return json_encode(array("resp" => "You have to delete all items first", "error" => 1));

        }
    }

    public function updateitem()
    {
        $arraydata = request()->input("arraydata");
        if (is_array($arraydata)) {
            foreach ($arraydata as $value) {
                $menuitem = MenuItems::find($value['id']);
                $menuitem->label = $value['label'];
                $menuitem->link = $value['link'];
                $menuitem->class = $value['class'];
                $menuitem->save();
            }
        } else {
            $menuitem = MenuItems::find(request()->input("id"));
            $menuitem->label = request()->input("label");
            $menuitem->link = request()->input("url");
            $menuitem->class = request()->input("clases");
            $menuitem->save();
        }
    }

    public function addcustommenu()
    {

        $menuitem = new MenuItems();
        $menuitem->label = request()->input("labelmenu");
        $menuitem->link = request()->input("linkmenu");
        $menuitem->menu = request()->input("idmenu");
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();

    }

    public function generatemenucontrol()
    {
        $menu = Menus::find(request()->input("idmenu"));
        $menu->name = request()->input("menuname");
        $menu->translate_id = request()->input("translate_id");

        $menu->save();
        if (is_array(request()->input("arraydata"))) {
            foreach (request()->input("arraydata") as $value) {

                $menuitem = MenuItems::find($value["id"]);
                $menuitem->parent = $value["parent"];
                $menuitem->sort = $value["sort"];
                $menuitem->depth = $value["depth"];
                $menuitem->save();
            }
        }
        echo json_encode(array("resp" => 1));

    }

    public function getMenu(){
        return MenuItems::where('parent', 0)->get();
    }
}
