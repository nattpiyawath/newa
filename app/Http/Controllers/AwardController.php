<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Year;
use App\Award;

class AwardController extends Controller
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
        $awards = Award::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.awards.index')->with('years',Year::all())
                                        ->with('awards',$awards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $awards_lang = Award::where('lang_code', '!=' , $this->lang)->get();
        $years = Year::all();
        // if($categories->count() == 0)
        // {
        //     Session::flash('warning', 'You Must have Choose At least One Category');

        //     return redirect('admin/category?lang='.$this->lang);
        // }
        return view('admin.awards.create')->with('years',Year::all())
                                         ->with('awards',$awards_lang);
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
            "slug" => 'required',
        ]
        );

        $award = new Award();
        $award->user_id = Auth::id();
        $award->thumbnail = $request->thumbnail;
        $award->header_img = $request->header_img;
        $award->years_id = $request->years_id;
        $award->type = $request->type;
        $award->title = $request->title;
        $award->slug = $this->createSlug($request->slug);
        $award->lang_code = $request->lang_code;
        $award->meta_keywords = $request->meta_keywords;
        $award->meta_description = $request->meta_description;
        $award->is_published = $request->is_published;
        $award->save();

        Session::flash('message', 'Award has been Add!');
        return redirect('admin/awards/'.$award->id.'/edit?lang='.$request->lang_code);
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
            return Award::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Award::select('slug')->where('id', $id)
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $awards = Award::find($id);

        $awardlang = Award::where('lang_code', '!=' , $this->lang)->get();
        $years = Year::where('lang_code', '=' , $this->lang)->get();

        return view('admin.awards.edit')->with('awards',$awards)->with('allAward',$awardlang)
                                       ->with('years', $years);
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
            'title' => 'required',
            'slug' => 'required',
        ]
        );

        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Award Slug is alredy Used!');
            return redirect('admin/awards/'.$id.'/edit?lang='.$request->lang_code);
        }

        $award = Award::findOrFail($id);
        $award->user_id = Auth::id();
        $award->slug = $request->slug;
        $award->thumbnail = $request->thumbnail;
        $award->header_img = $request->header_img;
        $award->title = $request->title;
        $award->type = $request->type;
        $award->years_id = $request->years_id;
        $award->lang_code = $request->lang_code;
        $award->meta_keywords = $request->meta_keywords;
        $award->meta_description = $request->meta_description;
        $award->is_published = $request->is_published;
        $award->save();

        Session::flash('message', 'Awards has updated Successfully!');
        return redirect('admin/awards/'.$id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $awards = award::find($id);
        $awards->delete();
        Session::flash('success', 'You succesfully deleted a Award.');
        return redirect()->back();
    }
}
