<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class CategoryController extends Controller
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

        $categories = Category::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);


        return view('admin.categories.index')->with([
            'categories'  => $categories
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'name' => 'required|max:155|min:2|unique:categories,name',
                'slug' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $this->createSlug($request->slug);
        $category->lang_code = $request->lang_code;
        $category->save();
        Session::flash('success', 'You succesfully created a category.');
        return redirect('admin/category/?lang='.$request->lang_code);


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
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
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
            'name' => 'required|max:155|min:2',
            'slug' => 'required',
        ]
        );

        $checkSlug = count($this->getRelatedSlugs($request->slug, $id));

        if($checkSlug > 1){
            Session::flash('warning', 'Category slug is alredy used!');
            return redirect('admin/category/'.$id.'/edit?lang='.$request->lang_code);
        }
        
        $category = Category::find($id);
        $category->name = $request->name;
        $category->lang_code = $request->lang_code;
        $category->save();
        Session::flash('message', 'Category has been updated!');
        return redirect('admin/category/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/category?lang='.$this->lang)->with('message','Category has been deleted!');
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
            return Category::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
    
    protected function getSlugsId($id)
    {
            return Category::select('slug')->where('id', $id)
            ->get();
    }
}