<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class MilestonesController extends Controller
{
       public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }
    
    function index(){

      
        
        $milestone = Milestones::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);


        return view('admin.milestione.index')->with([
            'milestones'  => $milestone
        ]);
        
    }

    public function viewPage($pageId)
    {
        $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
        $page = (new PageRepository)->findWithId($pageId);
        $pageRenderer = new PageRenderer($theme, $page);
        $html = $pageRenderer->render();
        return $html;
    }


    public function create(){

        //return view('admin.milestione.create');
        
        //$milestone_lang = Milestones::where('lang_code', '!=' , $this->lang)->get();
        
        // $milestone = Milestones::where('lang_code', $this->lang)->get();
        
        //return view('admin.milestione.create')>with('milestone',$milestone_lang);
        
        $milestones = Milestones::where('lang_code', '=' , $this->lang)->get();

        $milestone = Milestones::where('lang_code', '!=' , $this->lang)->get();

        return view('admin.milestione.create', ['milestones'=>$milestone, 'milestonelang'=>$milestones]);
        
    }

    public function show($id){

        $milestone = Milestones::find($id);
        $milestone_lang = Milestones::where('lang_code', '!=', $this->lang)->get();
        
        return view('admin.milestione.show', ['milestone_lang'=>$milestone_lang, 'milestone'=>$milestone]);


        // $Milestone = Milestones::findOrFail($id);
        // return view('admin.milestione.show', ['Milestones'=>$Milestone]);
    }

    public function store(Request $request){

        $user = Auth::user();

        $this->validate($request, [
            "title" => 'required',
            "description" => 'required',
            "thumbnail" => 'required',
        ]);

        $Milestones = new Milestones();
        $Milestones->title = $request->title;
        $Milestones->description = $request->description;
        $Milestones->thumbnail = $request->thumbnail;
        $Milestones->lang_code = $request->lang_code;
        
        $Milestones->is_published = $request->is_published;

        $Milestones->save();
        Session::flash('message', 'Training Course has been Add!');
        return redirect('admin/milestione/?lang='.$request->lang_code);
    }

    public function edit($id){
        //$Milestone = Milestones::findOrFail($id);
        //return view('admin.milestione.edit')->with('Milestones',$Milestone);
        
        
        $milestone = Milestones::find($id);
        $milestone_lang = Milestones::where('lang_code', '!=', $this->lang)->get();
        
        return view('admin.milestione.edit', ['milestone_lang'=>$milestone_lang, 'milestone'=>$milestone]);
        
        
    }

    public function update(Request $request, $id){
        $user = Auth::user();

        $this->validate($request, [
            "title" => 'required',
            "description" => 'required',
            "thumbnail" => 'required',
        ]);

        $Milestones = Milestones::findOrFail($id);
        $Milestones->title = $request->title;
        $Milestones->description = $request->description;
        $Milestones->thumbnail = $request->thumbnail;
        $Milestones->lang_code = $request->lang_code;
        
        $Milestones->is_published = $request->is_published;

        $Milestones->save();
        Session::flash('message', 'Trainning has updated Successfully!');
        return redirect('admin/milestione/?lang='.$request->lang_code);
    }

    public function destroy($id)
    {
        $milestone = Milestones::find($id);
        $milestone->delete();
        Session::flash('success', 'You succesfully deleted a Trainning.');
        return redirect('admin/milestione?lang='.$this->lang)->with('message','Trainning has been deleted!');
    }

}
