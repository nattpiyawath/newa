<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sparts;
use App\Sparts_cate;

class SpartsController extends Controller
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
        
        $sparts = Sparts::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.spart.index')->with('sparts_cate',Sparts_cate::all())->with('sparts',$sparts);
        
        // $sparts = Sparts::orderBy('id', 'DESC')->get();
        // return view('admin.spart.index')->with('sparts_cate',Sparts_cate::all())
        //                                 ->with('sparts',$sparts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return view('admin.spart.create');
        //$sparts = Sparts::all(['id','title']);
        $sparts_lang = Sparts::where('lang_code', '!=' , $this->lang)->get();
        $sparts_cate = Sparts_cate::all();
        return view('admin.spart.create')->with('sparts_cate',Sparts_cate::all())
                                         ->with('sparts',$sparts_lang);
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
            "title" => 'required',
            
        ]
        );

        $sparts = new Sparts();
        $sparts->user_id = Auth::id();
        $sparts->title = $request->title;
        $sparts->slug = $this->createSlug($request->slug);
        $sparts->spart_cate_id = $request->spart_cate_id;
        $sparts->details = $request->details;
        $sparts->sprice = $request->sprice;
        $sparts->title_accordion1 = $request->title_accordion1;
        $sparts->title_accordion2 = $request->title_accordion2;
        $sparts->title_accordion3 = $request->title_accordion3;
        $sparts->title_accordion4 = $request->title_accordion4;
        $sparts->title_accordion5 = $request->title_accordion5;
        $sparts->lang_code = $request->lang_code;
        $sparts->accordion_description1 = $request->accordion_description1;
        $sparts->accordion_description2 = $request->accordion_description2;
        $sparts->accordion_description3 = $request->accordion_description3;
        $sparts->accordion_description4 = $request->accordion_description4;
        $sparts->accordion_description5 = $request->accordion_description5;
        $sparts->thumbnail = $request->thumbnail;
        $sparts->header_img = $request->header_img;
        $sparts->is_published = $request->is_published;
        $sparts->save();

        Session::flash('message', 'Spare Parts has been Add!');
        // return redirect()->route('merchant.index');
        return redirect('admin/spart/'.$sparts->id.'/edit?lang='.$request->lang_code);
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
            return Sparts::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Sparts::select('slug')->where('id', $id)
            ->get();
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

public function duplicate($id){
        $copypage = Sparts::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Sparts::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';
        
        $update_title = Sparts::where('id', $newTask->id)->update(array('title' => $getTitle));

        if($update_title){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/spart/?lang='.$this->lang)->with('message','Spare Part has been Duplicated!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$sparts = Sparts::all(['id','title']);
        $sparts = Sparts::find($id);
        $spartslang = Sparts::where('lang_code', '!=' , $this->lang)->get();
        $sparts_cate = Sparts_cate::all();
        //return view('admin.page.edit',compact('pages'));

        return view('admin.spart.edit')->with('sparts',$sparts)->with('allsparts',$spartslang)
                                       ->with('sparts_cate', $sparts_cate);
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
            "title" => 'required',
           
        ]
        );

        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Slug is alredy Used!');
            return redirect('admin/spart/'.$id.'/edit?lang='.$request->lang_code);
        }   

        $sparts = Sparts::findOrFail($id);
        $sparts->user_id = Auth::id();
        $sparts->title = $request->title;
        $sparts->slug = $request->slug;
        $sparts->spart_cate_id = $request->spart_cate_id;
        $sparts->details = $request->details;
        $sparts->sprice = $request->sprice;
        $sparts->title_accordion1 = $request->title_accordion1;
        $sparts->title_accordion2 = $request->title_accordion2;
        $sparts->title_accordion3 = $request->title_accordion3;
        $sparts->title_accordion4 = $request->title_accordion4;
        $sparts->title_accordion5 = $request->title_accordion5;
        $sparts->lang_code = $request->lang_code;
        $sparts->accordion_description1 = $request->accordion_description1;
        $sparts->accordion_description2 = $request->accordion_description2;
        $sparts->accordion_description3 = $request->accordion_description3;
        $sparts->accordion_description4 = $request->accordion_description4;
        $sparts->accordion_description5 = $request->accordion_description5;
        $sparts->thumbnail = $request->thumbnail;
        $sparts->header_img = $request->header_img;
        $sparts->is_published = $request->is_published;
        $sparts->save();

        Session::flash('message', 'Spare Parts has updated Successfully!');
        // return redirect()->route('merchant.index');
        return redirect('admin/spart/'.$sparts->id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sparts = Sparts::find($id);
        $sparts->delete();
        Session::flash('success', 'You succesfully deleted a Spart Part.');
        return redirect()->back();
    }

}
