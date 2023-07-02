<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use App\Tag;
use App\Category;
use App\Post;
use App\Locale;
use DB;
use Pages;

use Illuminate\Http\Request;

class BlockController extends Controller
{

    public $lang;
    
    public function __construct(){
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }
    
    public function news_setting(Request $request){
        
        $find_page = DB::table('block_setting')->where('page_id', '=', $request->page_id)->where('block_name', 'News-Listing')->first();

        if($find_page === null){
            DB::table('block_setting')->insert(array('page_id' => $request->page_id, 'show_number' => $request->show_number, 'block_name' => 'News-Listing', 'order_by' => $request->order_by, 'sort_by' => $request->sort_by));
            $response = array(
                  'status' => 'success'
            );
        } else{
            $id = $find_page->id;
            DB::table('block_setting')->where('id', $id)->update(array('show_number' => $request->show_number, 'order_by' => $request->order_by, 'sort_by' => $request->sort_by));
            $response = array(
                  'status' => $id,
            );
        }

        return response()->json($response);
   }
   
    public function video_setting(Request $request){
        
        $find_page = DB::table('block_setting')->where('page_id', '=', $request->page_id)->where('block_name', 'Video')->first();

        if($find_page === null){
            DB::table('block_setting')->insert(array('page_id' => $request->page_id, 'show_number' => $request->show_number, 'block_name' => 'Video', 'order_by' => $request->order_by, 'sort_by' => $request->sort_by, 'sort_by_mobile' => $request->sort_by_mobile));
            $response = array(
                  'status' => 'success'
            );
        } else{
            $id = $find_page->id;
            DB::table('block_setting')->where('id', $id)->update(array('show_number' => $request->show_number, 'order_by' => $request->order_by, 'sort_by' => $request->sort_by, 'sort_by_mobile' => $request->sort_by_mobile));
            $response = array(
                  'status' => $id,
            );
        }

        return response()->json($response);
   }

}