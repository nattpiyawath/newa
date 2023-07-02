<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class YearController extends Controller
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
        $years = Year::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);


        return view('admin.years.index')->with([
            'years'  => $years
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.years.create');
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
            'year' => 'required|max:55|min:2|unique:years,year'
            //'pro_slug'=>'required|max:55|min:2|unique:projects,pro_slug,'.$project->id.',id',
    ]);

    $years = new Year();
    $years->year = $request->year;
    $years->lang_code = $request->lang_code;
    $years->save();
    Session::flash('success', 'You succesfully add Year.');
    return redirect('admin/years/?lang='.$request->lang_code);

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
        $years = Year::find($id);
        return view('admin.years.edit')->with('years', $years);
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
        $years = Year::find($id);
        $years->year = $request->year;
        $years->lang_code = $request->lang_code;
        $years->save();
        Session::flash('message', 'Year has been updated!');
        return redirect('admin/years/');
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
