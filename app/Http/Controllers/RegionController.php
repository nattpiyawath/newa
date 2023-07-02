<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegionController extends Controller
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
        $regions = Region::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.regions.index')->with([
            'regions'  => $regions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regions.create');
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
            'region' => 'required|max:55|min:2|unique:regions,region'
            //'pro_slug'=>'required|max:55|min:2|unique:projects,pro_slug,'.$project->id.',id',
    ]);

    $regions = new Region();
    $regions->region = $request->region;
    $regions->lang_code = $request->lang_code;
    $regions->save();
    Session::flash('success', 'You succesfully add Regions.');
    return redirect('admin/regions/?lang='.$request->lang_code);

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
        $regions = Region::find($id);
        return view('admin.regions.edit')->with('regions', $regions);
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
        $regions = Region::find($id);
        $regions->region = $request->region;
        $regions->lang_code = $request->lang_code;
        $regions->save();
        Session::flash('message', 'Region has been updated!');
        return redirect('admin/regions/?lang='.$request->lang_code);
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
