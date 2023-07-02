<?php

namespace App\Http\Controllers;

use App\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CareersController extends Controller
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
        $careers = Careers::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers = Careers::where('lang_code', '!=' , $this->lang)->get();
        return view('admin.careers.create',compact('careers'));
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
            "title" => 'required',
            //"slug" => 'required',
            //"layout" => 'required',
            'details.required' => 'Enter details',
        ],
            [
                'title.required' => 'Enter title',
                'details.required' => 'Enter details',
                //'parent.required' => 'Select...',
            ]
        );

        $career = new Careers();
        $career->user_id = Auth::id();
        $career->title = $request->title;
        $career->slug = $this->createSlug($request->slug);
        $career->lang_code = $request->lang_code;
        $career->location = $request->location;
        $career->position = $request->position;
        $career->department = $request->department;
        $career->deadline = $request->deadline;
        $career->is_published = $request->is_published;
        $career->details = $request->details;
        $career->save();

        Session::flash('message', 'Career has been created!');
        return redirect('admin/careers/'.$career->id.'/edit?lang='.$request->lang_code);
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
            return Careers::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Careers::select('slug')->where('id', $id)
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
        $career = Careers::findOrFail($id);
        return view('admin/careers/show', ['career'=>$career]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Careers::all(['id','slug','title', 'details']);
        $careerlang = Careers::where('lang_code', '!=' , $this->lang)->get();
        $careers = Careers::findOrFail($id);
        //return view('admin.page.edit',compact('pages'));

        return view('admin.careers.edit', ['career'=>$career, 'careers'=>$careers, 'careerlang'=>$careerlang]);
        
        // $career = Careers::all(['id','title', 'details']);
        // $careers = Careers::findOrFail($id);
        //return view('admin.page.edit',compact('pages'));

        // return view('admin.careers.edit', ['career'=>$career, 'careers'=>$careers,]);
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
            "title" => 'required|unique:careers,title,' . $id . ',id',
            //"slug" => 'required',
            //"layout" => 'required',
            'details.required' => 'Enter details',
        ],
            [
                'title.required' => 'Enter title',
                'details.required' => 'Enter details',
                //'parent.required' => 'Select...',
            ]
        );
        
        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Careers Slug is alredy used!');
            return redirect('admin/careers/'.$id.'/edit?lang='.$request->lang_code);
        }

        $career = Careers::findOrFail($id);
        $career->user_id = Auth::id();
        $career->title = $request->title;
        $career->slug = $request->slug;
        $career->location = $request->location;
        $career->position = $request->position;
        $career->department = $request->department;
        $career->deadline = $request->deadline;
        $career->lang_code = $request->lang_code;
        $career->is_published = $request->is_published;
        $career->details = $request->details;
        $career->save();

        Session::flash('message', 'Career updated successfully');
        return redirect('admin/careers/'.$career->id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Careers::findOrFail($id);
        $career->delete();
        return redirect('admin/careers?lang='.$this->lang)->with('message','Careers has been deleted!');
    }
}
