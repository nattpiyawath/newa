<?php

namespace App\Http\Controllers;

use App\Sparts_cate;
use App\Sparts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class Sparts_cateController extends Controller
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
        $sparts_cate = Sparts_cate::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);


        return view('admin.spart_cate.index')->with([
            'sparts_cate'  => $sparts_cate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allsparts_cate = Sparts_cate::where('lang_code', '!=' , $this->lang)->get();
        
        $sparts = Sparts::where('lang_code', $this->lang)->get();
        return view('admin.spart_cate.create')->with('sparts',$sparts)
                                                 ->with('sparts_cate',$allsparts_cate);
        
        // return view('admin.spart_cate.create');
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
                'sparts_cate' => 'required|max:55|min:2|unique:sparts_cates,sparts_cate'
        ]);

        $sparts_cate = new Sparts_cate();
        $sparts_cate->sparts_cate = $request->sparts_cate;
        $sparts_cate->thumbnail = $request->thumbnail;
        $sparts_cate->lang_code = $request->lang_code;
        $sparts_cate->save();
        Session::flash('success', 'You succesfully add Spare Part.');
        return redirect('admin/spart_cate/?lang='.$request->lang_code);
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
        $sparts_cate = Sparts_cate::find($id);
        $allsparts_cate = Sparts_cate::where('lang_code', '!=' , $this->lang)->get();
        
        $sparts = Sparts::where('lang_code', $this->lang)->get();
        return view('admin.spart_cate.edit', ['allsparts_cate'=>$allsparts_cate, 'sparts_cate'=>$sparts_cate, 'sparts'=>$sparts]);
        
        // $sparts_cate = Sparts_cate::find($id);
        // return view('admin.spart_cate.edit')->with('sparts_cate', $sparts_cate);
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
        $this->validate($request,[
            'sparts_cate' => 'required|max:55|min:2|unique:sparts_cates,sparts_cate'
        ]);

        $sparts_cate = Sparts_cate::find($id);
        $sparts_cate->sparts_cate = $request->sparts_cate;
        $sparts_cate->thumbnail = $request->thumbnail;
        $sparts_cate->lang_code = $request->lang_code;
        $sparts_cate->save();
        Session::flash('success', 'You succesfully add Spare Part.');
        return redirect('admin/spart_cate/?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sparts_cate = Sparts_cate::find($id);
        $sparts_cate->delete();
        Session::flash('success', 'You succesfully deleted a Spare Part Categpry.');
        return redirect()->back();
    }
}
