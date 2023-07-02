<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locale;
use Illuminate\Support\Facades\Auth;
use \DB;


class LocaleController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth', ['except' => array('show', 'language_list')]);
    }

    function index(){
        //$projects = Projects::where('active', 1)->orderBy('id','desc')->paginate(10);
        $langs = Locale::all();

        return view('admin.locale.index')->with(['langs'=>$langs]);
    }

    public function create(){

        return view('admin.locale.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'lang_code'=>'required|max:10|min:1|unique:locale,lang_code',
            'lang_name'=>'required|max:50|min:1|unique:locale,lang_name',
        ]);

        $user = Auth::user();

        $lang = new Locale();

        $de_lang = $request->default;
        if ($de_lang == 1){
            $updateDefault = $this->defaultLangUpdate();
            $lang->user_id = $user->id;
            $lang->lang_code = $request->lang_code;
            $lang->lang_name = $request->lang_name;
            $lang->lang_icon = $request->lang_icon;
            $lang->active = $request->active;
            $lang->default = $request->default;

            $lang->save();
            return redirect('admin/locale')->with('message','Language has been created!');
        } else{
            $lang->user_id = $user->id;
            $lang->lang_code = $request->lang_code;
            $lang->lang_name = $request->lang_name;
            $lang->lang_icon = $request->lang_icon;
            $lang->active = $request->active;
            $lang->default = $request->default;

            $lang->save();
            return redirect('admin/locale')->with('message','Language has been created!');
        }
    }

    public function edit($id){
        $langs = Locale::findOrFail($id);
        return view('admin.locale.edit')->with('langs',$langs);
    }

    public function update(Request $request, $id){
        //Unique can't above 1
        $lang = Locale::findOrFail($id);
        $this->validate($request,[
                'lang_code'=>'required|max:10|min:1|unique:locale,lang_code,'.$lang->id.',id',
                'lang_name'=>'required|max:50|min:1|unique:locale,lang_name,'.$lang->id.',id',
            ]);

        $de_lang = $request->default;
        if ($de_lang == 1){
            $updateDefault = $this->defaultLangUpdate();
            $lang->update($request->all());
            return redirect('admin/locale')->with('message','Language has been updated!');
        } else{
            $lang->update($request->all());
            return redirect('admin/locale')->with('message','Language has been updated!');
        }
        
    }

    public function defaultLangUpdate(){
        return Locale::query()->update(['default' => 0, ]);
    }

    public function destroy($id)
    {
        $lang = Locale::findOrFail($id);
        $lang->delete();
        return redirect('admin/locale')->with('message','Language has been deleted!');
    }
}