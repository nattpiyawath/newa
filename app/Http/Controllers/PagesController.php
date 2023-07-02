<?php

namespace App\Http\Controllers;
use App\User;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Specification;

class PagesController extends Controller
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
        $pages = Pages::where('lang_code', $this->lang)->orderBy('id', 'desc')->paginate(20);
        if(isset($_GET['keyword'])){
            $pages = Pages::where('lang_code', $this->lang)->where('title',  'like', '%' . $_GET['keyword'] . '%')->orderBy('id', 'desc')->paginate(20);
            return view('admin.page.index', compact('pages'));
        }
        if(isset($_GET['type'])){
            $pages = Pages::where('lang_code', $this->lang)->where('type', $_GET['type'])->orderBy('id', 'desc')->paginate(20);
            return view('admin.page.index', compact('pages'));
        }
        if(isset($_GET['status'])){
            $pages = Pages::where('lang_code', $this->lang)->where('is_published', $_GET['status'])->orderBy('id', 'desc')->paginate(20);
            return view('admin.page.index', compact('pages'));
        }
        return view('admin.page.index', compact('pages'));
        
    }

    public function viewPage($pageId)
    {
        $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
        $page = (new PageRepository)->findWithId($pageId);
        $pageRenderer = new PageRenderer($theme, $page);
        $html = $pageRenderer->render();
        return $html;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Pages::where('lang_code', '=' , $this->lang)->get();

        $page = Pages::where('lang_code', '!=' , $this->lang)->get();

        return view('admin.page.create', ['pages'=>$page, 'pagelang'=>$pages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => 'required',
            "layout" => 'required',
        ]
        );
       

        $page = new Pages();
      
        $page->user_id = Auth::id();
        $page->thumbnail = $request->thumbnail;
        $page->header_img = $request->header_img;
        $page->title = $request->title;
        $page->slug = $this->createSlug($request->slug);
        $page->lang_code = $request->lang_code;
        $page->type = $request->type;
       
        $page->cus_css = $request->cus_css;
        $page->cus_js = $request->cus_js;
        $page->layout = $request->layout;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        $page->is_published = $request->is_published;
        $page->parent = $request->parent;
        $page->save();

        Session::flash('message', 'Page has been Created!');
        return redirect('admin/pages/'.$page->id.'/edit?lang='.$request->lang_code.'&type='.$page->type);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
        ]
        );
     



        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Page Slug is alredy used!');
            return redirect('admin/pages/'.$id.'/edit?lang='.$request->lang_code);
        }

        $page = Pages::findOrFail($id);
      
        $page->user_id = Auth::id();
        $page->slug = $request->slug;
        $page->thumbnail = $request->thumbnail;
        $page->header_img = $request->header_img;
        $page->title = $request->title;
        $page->lang_code = $request->lang_code;
        $page->layout = $request->layout;
       
        $page->type = $request->type;
        $page->created_at = $request->created_at;
      
        $page->cus_css = $request->cus_css;
        $page->cus_js = $request->cus_js;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        $page->is_published = $request->is_published;
        $page->parent = $request->parent;
        $page->save();

        Session::flash('message', 'Page updated Successfully!');
        //return redirect()->route('pages.edit', $id);
        return redirect('admin/pages/'.$id.'/edit?lang='.$request->lang_code.'&type='.$page->type);
    }

    public function duplicate($id){
        $copypage = Pages::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Pages::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';

        $getslug = Pages::getSlug($newTask->id);
        $getslug = $getslug.'-1';
        
        $update_slug = Pages::where('id', $newTask->id)->update(array('title' => $getTitle, 'slug' => $getslug));

        if($update_slug){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/pages/?lang='.$this->lang)->with('message','Page has been Duplicated!');
        }
    }

    public function createSlug($text, $id = 0)
    {
            $allSlugs = $this->getRelatedSlugs($text, $id);
            if (! $allSlugs->contains('slug', $text)){
                return $text;
            }
    
            $i = 1;
            $is_contain = true;
            do {
                $newSlug = $text . '-' . $i;
                if (!$allSlugs->contains('slug', $newSlug)) {
                    $is_contain = false;
                    return $newSlug;
                }
                $i++;
            } while ($is_contain);
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
            return Pages::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Pages::select('slug')->where('id', $id)
            ->get();
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = Pages::findOrFail($id);
        return view('admin/page/show', ['pages'=>$pages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::where('lang_code', '=' , $this->lang)->get();
        $pagelang = Pages::where('lang_code', '!=' , $this->lang)->get();
        $pages = Pages::findOrFail($id);
        //return view('admin.page.edit',compact('pages'));

        return view('admin.page.edit', ['page'=>$page, 'pages'=>$pages, 'pagelang'=>$pagelang]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Pages::findOrFail($id);
        $page->delete();
        return redirect('admin/pages?lang='.$this->lang)->with('message','Page has been deleted!');
    }

}
