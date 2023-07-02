<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public $lang;

        public function __construct()
        {
            if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
        }
     
    public function index()
    {
        $slides = Slide::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.slide.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slides = Slide::where('lang_code', '!=' , $this->lang)->get();
        return view('admin.slide.create', compact('slides'));
        //return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "slide_img" => 'required',
            "Img_mobile" => 'required',
            "order" => 'required'
        ]
        );

        $slide = new Slide();
        $slide->user_id = Auth::id();
        $slide->title = $request->title;
        $slide->order = $request->order;
        $slide->slide_img = $request->slide_img;
        $slide->Img_mobile = $request->Img_mobile;
        $slide->slide_btn = $request->slide_btn;
        $slide->lang_code = $request->lang_code;
        $slide->description = $request->description;
        $slide->slide_link = $request->slide_link;
        $slide->save();

        Session::flash('message', 'Slide has been created!');
        return redirect('admin/slide?lang='.$request->lang_code);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.edit')->with('slide', $slide);
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
        $this->validate($request, [
            "slide_img" => 'required',
            "Img_mobile" => 'required',
            "order" => 'required'
        ]
        );
        
        $slide = Slide::findOrFail($id);
        $slide->user_id = Auth::id();
        $slide->title = $request->title;
        $slide->slide_img = $request->slide_img;
        $slide->Img_mobile = $request->Img_mobile;
        $slide->order = $request->order;
        $slide->lang_code = $request->lang_code;
        $slide->description = $request->description;
        $slide->slide_btn = $request->slide_btn;
        $slide->slide_link = $request->slide_link;
        $slide->save();

        Session::flash('message', 'Slide updated successfully');
        return redirect('admin/slide/?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
        return redirect('admin/slide?lang='.$this->lang)->with('message','Slide has been deleted!');
    }
}