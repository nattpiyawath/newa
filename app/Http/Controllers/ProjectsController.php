<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectsRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Projects;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth', ['except' => array('show')]);
    }

    function index(){

        $recentProjects = Projects::orderBy('id','desc')->take(5)->get();

        //$projects = Projects::Active();
        //$projects = Projects::InActive();

        //$projects = Projects::where('active', 1)->orderBy('id','desc')->paginate(10);
        $projects = Projects::all();

        return view('admin.projects.index')->with(['projects'=>$projects, 'recentProjects'=>$recentProjects]);
    }

    public function show($id){

        $project = Projects::findOrFail($id);
        return view('admin.projects.show', ['project'=>$project]);
    }

    public function create(){

        return view('admin.projects.create');
    }

    public function store(CreateProjectsRequest $request){

        $user = Auth::user();

        $project = new Projects();

        $project->user_id = $user->id;
        $project->pro_title = $request->pro_title;
        $project->pro_slug = $request->pro_slug;
        $project->pro_remark = $request->pro_remark;

        //$project->create($request->all()); request all fields from database
        if($request->active != null){
            $project->active = $request->active;
        } else{
            $project->active = 0;
        }

        $project->save();
        return redirect('admin/projects');
    }

    public function edit($id){
        $project = Projects::findOrFail($id);
        return view('admin.projects.edit')->with('project',$project);
    }

    public function update(Request $request, $id){
        $project = Projects::findOrFail($id);
        $this->validate($request,[
            'pro_title'=>'required|max:255|min:3',
            'pro_slug'=>'required|max:55|min:2|unique:projects,pro_slug,'.$project->id.',id',
            'active'=>'boolean'
        ]);
        $project->update($request->all());
        return redirect('admin/projects');
    }

    public function destroy($id)
    {
        $project = Projects::findOrFail($id);
        $project->delete();
        return redirect('admin/projects');
    }

}