<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use App\Tag;
use App\Category;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    public function index()
    {
        $posts = Post::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.posts.index')->with('categories',Category::all())
                                        ->with('tags',Tag::all())
                                        ->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts_lang = Post::where('lang_code', '!=' , $this->lang)->get();
        $categories = Category::all();
        // if($categories->count() == 0)
        // {
        //     Session::flash('warning', 'You Must have Choose At least One Category');

        //     return redirect('admin/category?lang='.$this->lang);
        // }
        return view('admin.posts.create')->with('categories',$categories)
                                         ->with('tags',Tag::all())
                                         ->with('posts',$posts_lang);
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

        $post = new Post();
        $post->user_id = Auth::id();
        $post->thumbnail = $request->thumbnail;
        $post->header_img = $request->header_img;
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->type = $request->type;
        $post->detail = $request->detail;
        $post->excerpt = $request->excerpt;
        $post->slug = $this->createSlug($request->slug);
        $post->lang_code = $request->lang_code;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;
        $post->is_published = $request->is_published;
        $post->save();

        $post->tags()->attach($request->tags);

        Session::flash('message', 'Post has been Created!');
        return redirect('admin/posts/'.$post->id.'/edit?lang='.$request->lang_code);

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
        $posts = Post::find($id);

        $postlang = Post::where('lang_code', '!=' , $this->lang)->get();
        $categories = Category::where('lang_code', '=' , $this->lang)->get();

        return view('admin.posts.edit')->with('posts',$posts)->with('allPosts',$postlang)
                                       ->with('categories', $categories)
                                       ->with('tags', Tag::all());
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

        $checkSlug = count($this->getRelatedSlugs($request->slug));

        if($checkSlug > 1){
            Session::flash('warning', 'Post Slug is alredy Used!');
            return redirect('admin/posts/'.$id.'/edit?lang='.$request->lang_code);
        }

        $post = Post::findOrFail($id);
        $post->user_id = Auth::id();
        $post->slug = $request->slug;
        $post->thumbnail = $request->thumbnail;
        $post->header_img = $request->header_img;
        $post->title = $request->title;
        $post->type = $request->type;
        $post->excerpt = $request->excerpt;
        $post->category_id = $request->category_id;
        $post->lang_code = $request->lang_code;
        $post->detail = $request->detail;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;
        $post->is_published = $request->is_published;
        $post->save();

        Session::flash('message', 'Post has updated Successfully!');
        return redirect('admin/posts/'.$id.'/edit?lang='.$request->lang_code);

         //$posts->tags()->sync($request->tags);
    }

    public function duplicate($id){
        $copypage = Post::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Post::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';

        $getslug = Post::getSlug($newTask->id);
        $getslug = $getslug.'-1';
        
        $update_slug = Post::where('id', $newTask->id)->update(array('title' => $getTitle, 'slug' => $getslug));

        if($update_slug){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/posts/?lang='.$this->lang)->with('message','Post has been Duplicated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        Session::flash('success', 'You succesfully deleted a Post.');
        return redirect()->back();
    }

    public function trashed()
    {
 
       $posts = Post::onlyTrashed()->get();
      

       return view('admin.posts.trashed')->with('posts', $posts);

    }

    public function kill($id)
    {
       $posts = Post::withTrashed()->where('id',$id)->first();
       $posts->forceDelete();
       Session::flash('success', 'You succesfully deleted a Post Permanently.');
       return redirect()->back();
      
    }

    public function restore($id)

    {
        $posts = Post::withTrashed()->where('id',$id)->first();
        $posts->restore();
        Session::flash('success', 'You succesfully Restore a Post.');
        return redirect()->route('posts');


    }

    protected function getRelatedSlugs($slug)
    {
            return Post::where('slug', $slug)->get();
    }

}
