<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Menus;
use App\Locale;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $setting = Setting::all();
        
        $menu_top_setting = Setting::where('setting', 'menu_top')->first();
        $menu_top = $menu_top_setting->value;
        
        $menu_id_setting = Setting::where('setting', 'menu')->first();
        $menu_id = $menu_id_setting->value;

        $footer_1_setting = Setting::where('setting', 'footer_1')->first();
        $footer_1_setting = $footer_1_setting->value;

        $footer_2_setting = Setting::where('setting', 'footer_2')->first();
        $footer_2_setting = $footer_2_setting->value;

        $footer_3_setting = Setting::where('setting', 'footer_3')->first();
        $footer_3_setting = $footer_3_setting->value;

        $footer_4_setting = Setting::where('setting', 'footer_4')->first();
        $footer_4_setting = $footer_4_setting->value;

        $footer_5_setting = Setting::where('setting', 'footer_5')->first();
        $footer_5_setting = $footer_5_setting->value;

        $right_sidebar = Setting::where('setting', 'right_sidebar')->first();
        $right_sidebar = $right_sidebar->value;

        $locale_default = Locale::where('default',1)->where('active', 1)->first();
        $lang = $locale_default->lang_code;

        $menus = Menus::where('lang_code', $lang)->get();

        return view('admin.setting.index')->with(['settings'  => $setting, 'menu_top' => $menu_top, 'menus' => $menus, 'menu_id' => $menu_id, 'footer_1' => $footer_1_setting, 'footer_2' => $footer_2_setting, 'footer_3' => $footer_3_setting, 'footer_4' => $footer_4_setting, 'footer_5' => $footer_5_setting, 'right_sidebar' => $right_sidebar]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.edit')->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSetting()
    {
        $menu_top = request()->input("menu_top");
        $menu_top = Setting::where('setting', 'menu_top')->update(['value' => $menu_top]);
        
        $menu = request()->input("menu");
        $menu = Setting::where('setting', 'menu')->update(['value' => $menu]);

        $footer_1 = request()->input("footer_1");
        $footer_1 = Setting::where('setting', 'footer_1')->update(['value' => $footer_1]);

        $footer_2 = request()->input("footer_2");
        $footer_2 = Setting::where('setting', 'footer_2')->update(['value' => $footer_2]);

        $footer_3 = request()->input("footer_3");
        $footer_3 = Setting::where('setting', 'footer_3')->update(['value' => $footer_3]);

        $footer_4 = request()->input("footer_4");
        $footer_4 = Setting::where('setting', 'footer_4')->update(['value' => $footer_4]);

        $footer_5 = request()->input("footer_5");
        $footer_5 = Setting::where('setting', 'footer_5')->update(['value' => $footer_5]);

        $right_sidebar = request()->input("right_sidebar");
        $right_sidebar = Setting::where('setting', 'right_sidebar')->update(['value' => $right_sidebar]);

        return redirect('admin/setting')->with('message', 'Setting has been udpated.');
    }

}