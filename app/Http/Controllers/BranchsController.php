<?php

namespace App\Http\Controllers;

use App\Branchs;
use App\Type;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchsController extends Controller
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
        $branchs = Branchs::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        if(isset($_GET['status'])){
            $branchs = Branchs::where('lang_code', $this->lang)->where('is_published', $_GET['status'])->orderBy('id', 'desc')->paginate(20);
            return view('admin.branchs.index', compact('branchs'));
        }

        return view('admin.branchs.index', compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $branchs = Branchs::all(['id','title']);
        // return view('admin.branchs.create',compact('branchs'));
        
        $branchs_lang = Branchs::where('lang_code', '!=' , $this->lang)->get();
        
        $types = Type::where('lang_code', $this->lang)->get();
        return view('admin.branchs.create') ->with('types',$types)
                                            ->with('branchs',$branchs_lang);
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
            "address" => 'required',
            "number" => 'required',
        ],
            [
                'title.required' => 'Enter title',
                'address.required' => 'Enter details',
                'number.required' => 'Enter phone number',
            ]
        );

        $branchs = new Branchs();
        $branchs->user_id = Auth::id();
        $branchs->thumbnail = $request->thumbnail;
        $branchs->title = $request->title;
        $branchs->type = $request->type;
        $branchs->address = $request->address;
        $branchs->number = $request->number;
        $branchs->email = $request->email;
        $branchs->is_published = $request->is_published;
        $branchs->province = $request->province;
        $branchs->latitude = $request->latitude;
        $branchs->longitude = $request->longitude;
        $branchs->lang_code = $request->lang_code;
        $branchs->save();
        Session::flash('message', 'Branch has been created!');
        return redirect('admin/branchs/?lang='.$request->lang_code);
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
        $branchs = Branchs::find($id);
        $branchs_lang = Branchs::where('lang_code', '!=', $this->lang)->get();
        $types = Type::all();
        return view('admin.branchs.edit')->with('branchs',$branchs)->with('branchslang',$branchs_lang)
                                       ->with('types', $types);
        
        // $branchs = Branchs::all(['id','title']);
        // $branchs = Branchs::findOrFail($id);
        // return view('admin.branchs.edit',compact('branchs'));

        // return view('admin.branchs.edit');
        
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
            "address" => 'required',
            "number" => 'required',
        ],
            [
                'title.required' => 'Enter title',
                'address.required' => 'Enter details',
                'number.required' => 'Enter phone number',
            ]
        );

        $branchs = Branchs::findOrFail($id);
        $branchs->user_id = Auth::id();
        $branchs->thumbnail = $request->thumbnail;
        $branchs->title = $request->title;
        $branchs->type = $request->type;
        $branchs->address = $request->address;
        $branchs->number = $request->number;
        $branchs->email = $request->email;
        $branchs->is_published = $request->is_published;
        $branchs->province = $request->province;
        $branchs->latitude = $request->latitude;
        $branchs->longitude = $request->longitude;
        $branchs->lang_code = $request->lang_code;
        $branchs->save();

        Session::flash('message', 'Branch has been Updated!');
        return redirect('admin/branchs/?lang='.$request->lang_code);
        // return redirect()->route('branchs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branchs = Branchs::find($id);
        $branchs->delete();
        Session::flash('success', 'You succesfully deleted a Dealer.');
        return redirect('admin/branchs?lang='.$this->lang)->with('message','Dealer has been deleted!');
    }
    
    public function get_Dealers(){

        //echo 'test';

        $province = $_GET['type'];
        $branchs = Branchs::where('lang_code', $this->lang)->where('province', $province)->where('is_published', 1)->orderBy('created_at', 'desc')->get();
        $i = 1;
        $lang = $this->lang;
        foreach($branchs as $val){
            $province = $val->province;

            echo '<tr>';

            echo '<td>'.$i.'</td><td>'.$val->title.'</td><td>'.$val->address.'</td><td>'.$val->number.'</td><td>'.'<a target="_blank" href="https://www.google.com/maps/search/?api=1&query='.$val->latitude.','.$val->longitude.'">Get Direct</a>'.'</td></tr>';

$i++;
            }
            
        
        }

}
