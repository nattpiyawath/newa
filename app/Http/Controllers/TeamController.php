<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;


class TeamController extends Controller
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
        
        //$sparts = Sparts::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        //return view('admin.spart.index')->with('sparts_cate',Sparts_cate::all())->with('sparts',$sparts);
        
        $team = Team::orderBy('id', 'DESC')->get();
        return view('admin.team.index')->with('team',$team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $team = Team::where('lang_code', '!=', $this->lang)->get();
        return view('admin.team.create', ['team'=>$team]);
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
            "name" => 'required',
            
        ]
        );

        $team = new Team();
        $team->user_id = Auth::id();
        $team->name = $request->name;
        $team->slug = $this->createSlug($request->slug);
        $team->details = $request->details;
        $team->lang_code = $request->lang_code;
        $team->thumbnail = $request->thumbnail;
        $team->is_published = $request->is_published;
        $team->save();

        Session::flash('message', 'Team has been Add!');
        // return redirect()->route('merchant.index');
        return redirect('admin/team/'.$team->id.'/edit?lang='.$request->lang_code);
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
            return Team::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Team::select('slug')->where('id', $id)
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
        $copypage = Team::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Team::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';
        
        $update_title = Team::where('id', $newTask->id)->update(array('name' => $getTitle));

        if($update_title){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/team/?lang='.$this->lang)->with('message',' Team has been Duplicated!');
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

        $team = Team::find($id);
        $teamlang = Team::where('lang_code', '!=' , $this->lang)->get();

        return view('admin.team.edit')->with('team',$team)->with('allteam',$teamlang);
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
            "name" => 'required',
           
        ]
        );

        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Slug is alredy Used!');
            return redirect('admin/team/'.$id.'/edit?lang='.$request->lang_code);
        }   

        $team = Team::findOrFail($id);
        $team->user_id = Auth::id();
        $team->name = $request->name;
        $team->slug = $request->slug;
        $team->details = $request->details;
        $team->lang_code = $request->lang_code;
        $team->thumbnail = $request->thumbnail;
        $team->is_published = $request->is_published;
        $team->save();

        Session::flash('message', 'Team has updated Successfully!');
        return redirect('admin/team/'.$team->id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        Session::flash('message', 'You succesfully deleted a Team.');
        return redirect()->back();
    }

}
