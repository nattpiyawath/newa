<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Response;

class GalleryController extends Controller
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
        
        $gallery = Gallery::where('lang_code', $this->lang)->orderBy('id', 'desc')->paginate(20);
        if(isset($_GET['keyword'])){
            $gallery = Gallery::where('lang_code', $this->lang)->where('gallery_name',  'like', '%' . $_GET['keyword'] . '%')->orderBy('id', 'desc')->paginate(20);
            return view('admin.gallery.index', compact('gallery'));
        }
        if(isset($_GET['type'])){
            $gallery = Gallery::where('lang_code', $this->lang)->where('post_type', $_GET['type'])->orderBy('id', 'desc')->paginate(20);
            return view('admin.gallery.index', compact('gallery'));
        }
        if(isset($_GET['status'])){
            $gallery = Gallery::where('lang_code', $this->lang)->where('is_published', $_GET['status'])->orderBy('id', 'desc')->paginate(20);
            return view('admin.gallery.index', compact('gallery'));
        }
        return view('admin.gallery.index', compact('gallery'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$pages = Pages::where('lang_code', $this->lang)->get();
        $gallery = Gallery::where('lang_code', '!=', $this->lang)->get();

        return view('admin.gallery.create', ['page'=>$pages, 'gallery'=>$gallery]);
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
            'gallery_name' => 'required',
            'page_id' => 'required',
        ]
        );

        $image_url_mobile = $request->input('image_url_mobile');
        $image_url_desktop = $request->input('image_url_desktop');
        $image_title = $request->input('image_title');
        $image_caption = $request->input('image_caption');
        $image_order = $request->input('image_order');
        $image_link = $request->input('image_link');

        for($count = 0; $count < count($image_url_desktop); $count++)
		{
		        $data = array(
		                'image_order' => $image_order[$count],
		                'image_url_mobile' => $image_url_mobile[$count],
		                'image_url_desktop' => $image_url_desktop[$count],
		                'image_title' => $image_title[$count],
		                'image_caption' => $image_caption[$count],
		                'image_link' => $image_link[$count]
		              );

		        $insert_images[] = $data; 
		}
		//dd($insert_schedule);
    
        $gallery = new Gallery();

        $gallery->gallery_name = $request->gallery_name;
        $gallery->user_id = Auth::id();
        $gallery->page_id = $request->page_id;
        $gallery->post_type = $request->post_type;
        $gallery->layout = $request->layout;
        $gallery->translate_id = uniqid();
        $gallery->lang_code = $request->lang_code;
        $gallery->data = json_encode($insert_images);
        $gallery->save();
        Session::flash('message', 'You succesfully added slider.');
        return redirect('admin/gallery/?lang='.$request->lang_code);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $gallery_lang = Gallery::where('lang_code', '!=', $this->lang)->get();
        $pages = Pages::where('lang_code', $this->lang)->get();
        return view('admin.gallery.edit', ['gallery_lang'=>$gallery_lang, 'gallery'=>$gallery, 'pages'=>$pages]);
    }


    public function duplicate($id){
        $copypage = Gallery::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Gallery::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';
        
        $update_title = Gallery::where('id', $newTask->id)->update(array('gallery_name' => $getTitle));

        if($update_title){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/gallery/?lang='.$this->lang)->with('message','Page has been Duplicated!');
        }
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
            'gallery_name' => 'required',
            'page_id' => 'required',
        ]
        );

        $image_url_mobile = $request->input('image_url_mobile');
        $image_url_desktop = $request->input('image_url_desktop');
        $image_title = $request->input('image_title');
        $image_caption = $request->input('image_caption');
        $image_order = $request->input('image_order');
        $image_link = $request->input('image_link');

        for($count = 0; $count < count($image_url_desktop); $count++)
		{
		        $data = array(
		                'image_order' => $image_order[$count],
		                'image_url_mobile' => $image_url_mobile[$count],
		                'image_url_desktop' => $image_url_desktop[$count],
		                'image_title' => $image_title[$count],
		                'image_caption' => $image_caption[$count],
		                'image_link' => $image_link[$count]
		              );

		        $insert_images[] = $data; 
		}

        $gallery = Gallery::find($id);
        $gallery->gallery_name = $request->gallery_name;
        $gallery->user_id = Auth::id();
        $gallery->page_id = $request->page_id;
        $gallery->post_type = $request->post_type;
        $gallery->layout = $request->layout;
        $gallery->translate_id = uniqid();
        $gallery->lang_code = $request->lang_code;
        $gallery->data = json_encode($insert_images);
        $gallery->save();
        Session::flash('message', 'Slider has been updated.');
		return redirect('admin/gallery/'.$id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect('admin/gallery?lang='.$this->lang)->with('message','Slider has been deleted!');
    }
}
