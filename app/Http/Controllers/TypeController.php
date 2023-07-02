<?php

namespace App\Http\Controllers;

use App\Branchs;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TypeController extends Controller
{

    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.types.index')->with([
            'types'  => $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_lang = Type::where('lang_code', '!=' , $this->lang)->get();
        $types = Type::where('lang_code', $this->lang)->get();
        return view('admin.types.create')->with('types',$types)
                                         ->with('types',$type_lang);
        
        
        //return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'type' => 'required|max:55|min:2|unique:types,type'
    ]);

    $types = new Type();
    $types->type = $request->type;
    $types->lang_code = $request->lang_code;
    $types->save();
    Session::flash('success', 'You succesfully add Type.');
    return redirect('admin/types/?lang='.$request->lang_code);
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
        $types = Type::find($id);
        $types_lang = Type::where('lang_code', '!=', $this->lang)->get();

        return view('admin.types.edit', ['types_lang'=>$types_lang, 'types'=>$types]);
        
        
        $types = Type::find($id);
        $types_lang = Type::where('lang_code', '!=' , $this->lang)->get();
        
        $branchs = Branchs::where('lang_code', $this->lang)->get();
        return view('admin.types.edit', ['types_lang'=>$types_lang, 'types'=>$types, 'branchs'=>$branchs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $types = Type::find($id);
        $types->type = $request->type;
        $types->lang_code = $request->lang_code;
        $types->save();
        Session::flash('message', 'Type has been updated!');
        return redirect('admin/types/?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Type::find($id);
        $types->delete();
        Session::flash('success', 'You succesfully deleted a Type.');
        return redirect('admin/types?lang='.$this->lang)->with('message','Type has been deleted!');
    }
}
