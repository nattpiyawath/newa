<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Merchant;
use App\Merchant_cate;
use App\Region;


class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchant = Merchant::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.merchant.index')->with('merchant_cate',Merchant_cate::all())
                                           ->with('regions',Region::all())
                                           ->with('merchant',$merchant);
    }


    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.merchant.create');
        $merchant_lang = Merchant::where('lang_code', '!=' , $this->lang)->get();
        $merchant_cate = Merchant_cate::all();
        // if($categories->count() == 0)
        // {
        //     Session::flash('warning', 'You Must have Choose At least One Category');

        //     return redirect('admin/category?lang='.$this->lang);
        // }
        return view('admin.merchant.create')->with('merchant_cate',Merchant_cate::all())
                                         ->with('regions',Region::all())
                                         ->with('merchant',$merchant_lang);
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

        $merchant = new Merchant();
        $merchant->user_id = Auth::id();
        $merchant->thumbnail = $request->thumbnail;
        $merchant->header_img = $request->header_img;
        $merchant->region_id = $request->region_id;
        $merchant->merchant_cate_id = $request->merchant_cate_id;
        $merchant->title = $request->title;
        $merchant->slug = $this->createSlug($request->slug);
        $merchant->discount = $request->discount;
        $merchant->contact = $request->contact;
        $merchant->lang_code = $request->lang_code;
        $merchant->meta_keywords = $request->meta_keywords;
        $merchant->meta_description = $request->meta_description;
        $merchant->is_published = $request->is_published;
        $merchant->save();

        Session::flash('message', 'Merchants has been Add!');
        // return redirect()->route('merchant.index');
        return redirect('admin/merchant/'.$merchant->id.'/edit?lang='.$request->lang_code);
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
            return Merchant::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    protected function getSlugsId($id)
    {
            return Merchant::select('slug')->where('id', $id)
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
        // $merchant = Merchant::all(['id','title']);
        // $merchant = Merchant::findOrFail($id);
        // //return view('admin.page.edit',compact('pages'));

        // return view('admin.merchant.edit', ['merchant'=>$merchant, 'merchant'=>$merchant,]);

        $merchant = Merchant::find($id);

        $merchantlang = Merchant::where('lang_code', '!=' , $this->lang)->get();
        $merchant_cate = Merchant_cate::where('lang_code', '=' , $this->lang)->get();

        return view('admin.merchant.edit')->with('merchant',$merchant)->with('allmerchant',$merchantlang)
                                       ->with('regions',Region::all())
                                       ->with('merchant_cate', $merchant_cate);
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
            return redirect('admin/merchant/'.$id.'/edit?lang='.$request->lang_code);
        }

        $merchant = Merchant::findOrFail($id);
        $merchant->user_id = Auth::id();
        $merchant->thumbnail = $request->thumbnail;
        $merchant->header_img = $request->header_img;
        $merchant->region_id = $request->region_id;
        $merchant->merchant_cate_id = $request->merchant_cate_id;
        $merchant->title = $request->title;
        $merchant->slug = $request->slug;
        $merchant->discount = $request->discount;
        $merchant->contact = $request->contact;
        $merchant->lang_code = $request->lang_code;
        $merchant->meta_keywords = $request->meta_keywords;
        $merchant->meta_description = $request->meta_description;
        $merchant->is_published = $request->is_published;
        $merchant->save();

        Session::flash('message', 'Merchant Partner has updated Successfully!');
        return redirect('admin/merchant/'.$id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merchant = Merchant::find($id);
        $merchant->delete();
        Session::flash('success', 'You succesfully deleted a Merchant Partner.');
        return redirect()->back();
    }
}
