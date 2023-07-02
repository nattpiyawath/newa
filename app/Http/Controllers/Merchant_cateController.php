<?php

namespace App\Http\Controllers;

use App\Merchant_cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class Merchant_cateController extends Controller
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
        $merchant_cate = Merchant_cate::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);


        return view('admin.merchant_cate.index')->with([
            'merchant_cate'  => $merchant_cate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merchant_cate.create');
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
            'merchant_cate' => 'required|max:55|min:2|unique:merchant_cates,merchant_cate'
            //'pro_slug'=>'required|max:55|min:2|unique:projects,pro_slug,'.$project->id.',id',
    ]);

    $merchant_cate = new Merchant_cate();
    $merchant_cate->merchant_cate = $request->merchant_cate;
    $merchant_cate->lang_code = $request->lang_code;
    $merchant_cate->save();
    Session::flash('success', 'You succesfully add Year.');
    return redirect('admin/merchant_cate/?lang='.$request->lang_code);

    
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
        $merchant_cate = Merchant_cate::find($id);
        return view('admin.merchant_cate.edit')->with('merchant_cate', $merchant_cate);
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
        $merchant_cate = Merchant_cate::find($id);
        $merchant_cate->merchant_cate = $request->merchant_cate;
        $merchant_cate->lang_code = $request->lang_code;
        $merchant_cate->save();
        Session::flash('success', 'Merchant Category has been updated.');
        return redirect('admin/merchant_cate/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
