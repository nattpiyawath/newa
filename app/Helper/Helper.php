<?php

namespace App\Helper;

use Illuminate\Http\Request;
use App\Locale;
use App\Careers;
use App\Slide;
use App\Posts;
use App\Milestones;
use App\MenuItems;
use App\Menus;
use App\Award;
use App\Pages;
use App\Setting;
use App\Year;
use App\Merchant;
use App\Merchant_cate;
use App\Region;
use App\Cetegory;
use App\Sparts;
use App\Sparts_cate;
use Illuminate\Support\Facades\URL;

class Helper
{
    public static function langList(){
        $lang = Locale::Active();
        return $lang;
    }
    
    public static function getPageTitle($id){
        $page = Pages::where('id',$id)->first();
        if(!is_null($page)){
            return $page->title;
        }
    }

    public static function getPageSlug($id){
        $page = Pages::where('id',$id)->first();
        if(!is_null($page)){
            return $page->slug;
        }
    }
    
    public static function getSparts(){
        $lang = request()->segment(1);
        return Sparts::where('is_published', 1)->where('lang_code', $lang)->get();
    }

    public static function getCareers(){
        $lang = request()->segment(1);
        return Careers::where('is_published', 1)->where('lang_code', $lang)->get();
    }
    
    public static function getProduts(){
        $lang = request()->segment(1);
        $parentSlug = request()->segment(2);
        $parent = Pages::where('slug', $parentSlug)->where('lang_code', $lang)->first();
        if(isset($_GET['page'])){//Check for Pagebuilder Edit
            return Pages::where('id', $_GET['page'])->where('lang_code', $lang)->get();
        }
        return Pages::where('type', 'product')->where('is_published', 1)->where('lang_code', $lang)->where('parent', $parent->id)->get();
    }

    public static function getSlide(){
        return Slide::orderBy('order', 'asc')->get();
    }

    public static function currentPath(){
        $name = URL::current();
        return $name;
    }

    public static function getPostsNews(){
        
         $lang = request()->segment(1);
         
        // $menu = Menus::where('lang_code', $lang_code)->where('translate_id',$t_id)->first();
        // if(!is_null($menu)){
        //     return $menu->id;
        // }
        
        return Posts::where('category_id', 11)->where('is_published', 1)->where('lang_code', $lang)->orderby('id', 'asc')->get();
        
        
        // $posts = Posts::where('category_id', 11)->orderby('id', 'asc')->get();
        // return $posts;
    }
    
    public static function getPostSidebarNews(){
        $posts = Posts::where('category_id', 11)->orderby('id', 'desc')->limit(4)->get();
        return $posts;
    }
    
    public static function getPostsPromo(){
        $posts = Posts::where('category_id', 13)->orderby('id', 'asc')->get();
        return $posts;
    }
    
    
    public static function getAward(){
        $awards = Award::Active();
        return $awards;
    }
    
    public static function getMerchant(){
        $merchant = Merchant::Active();
        return $merchant;
    }
    
    public static function milestone()
    {
        $lang = request()->segment(1);
        return Milestones::where('is_published', 1)->where('lang_code', $lang)->orderby('created_at', 'ASC')->get();
    }
    
    public static function getParentMenu($id){
        return MenuItems::getMyparent($id);
    }

    public static function getSetting($setting){
        $setting = Setting::where('setting', $setting)->first();
        if(!is_null($setting)){
            return $setting->value;
        }
    }

    public static function getMenu_ID($id){
        $menu = Menus::where('id',$id)->first();
        if(!is_null($menu)){
            return $menu->translate_id;
        }
    }

    public static function getChild($id){
        return MenuItems::getMychild($id);
    }

    public static function getMenu_Translated($lang_code, $t_id){
        $menu = Menus::where('lang_code', $lang_code)->where('translate_id',$t_id)->first();
        if(!is_null($menu)){
            return $menu->id;
        }
    }
    
    public static function getMenuNamebyId($id){
        $menu = Menus::where('id',$id)->first();
        if(!is_null($menu)){
            return $menu->name;
        }
    }
    
    public static function getMerchant_cate(){
        $merchant = merchant::where('merchant_cate_id', 1)->orderby('id', 'asc')->get();
        return $merchant;
    }
    
}