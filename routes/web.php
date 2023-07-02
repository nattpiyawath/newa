<?php
use App\Pages;
use App\Post;
use App\Locale;
use App\Careers;
use App\Award;
use App\Year;
use App\Merchant;
use App\Merchant_cate;
use App\Region;
use App\Sparts;
use App\Sparts_cate;
use App\Branch;
use App\Type;
use App\Feature;
use App\Gallery;
use App\Specification;
use App\Milestones;
use App\Team;

use HansSchouten\LaravelPageBuilder\LaravelPageBuilder;
use PHPageBuilder\PHPageBuilder;
use Illuminate\Support\Facades\Route;

use PHPageBuilder\Theme;
use PHPageBuilder\Modules\GrapesJS\PageRenderer;
use PHPageBuilder\Repositories\PageRepository;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::post('/send-service', 'EmailController@sendService')->name('send.service');
Route::post('/send-test', 'EmailController@sendTest')->name('send.test');
Route::post('/send-service', 'EmailController@sendService')->name('send.service');


Route::post('/token', function(){
    $token_url = 'https://websiteapi.lolc.com.kh:8443/GenerateOauthToken/1.0';
    $params = array(
        'grant_type' => 'client_credentials',
        'client_secret' => 'KQjuuyHEjUFQLDgxBdoBkioutUJfzLCnzTh-',
        'client_id' => '-YIhWzmdHHgcjbLZJKEJAjgp', 
     );
     $response = Http::asForm()->withHeaders(['Authorization' => 'No'])->post($token_url, $params);
    return $response->json();
})->name('token');

Route::post('/get-ex-rate', function(){
    $token = $_POST['token'];
    $token_url = 'https://websiteapi.lolc.com.kh:8443/website/1.0/exchange?access_token='.$token;
    $response = Http::withHeaders(['Content-Type' => 'application/json'])
    ->send('POST', $token_url, ['body' => '{ rate_date: 20221101 }']);
    return $response->json();
})->name('get_rate');


Route::post('/send-contact', 'EmailController@sendContact')->name('send.contact');
//Route::post('/send-careers', 'EmailController@sendCareers')->name('send.careers');

//Ajax Get Model by Type
Route::post('/get-model', function(){
    $type = $_POST['model_type'];
    $lang = app()->getLocale();
    $all = Pages::where('lang_code', $lang)->where('model', $type)->orderBy('created_at', 'desc')->get();
    
    echo '<option value="">Select Model</option>';
    foreach($all as $v){
            echo '<option value='.$v->product_code.'>'.$v->title.'</option>';
    }

})->name('get-model-type');

Route::post('kh/get-model', function(){
    $type = $_POST['model_type'];
    $lang = app()->getLocale();
    $all = Pages::where('lang_code', $lang)->where('model', $type)->orderBy('created_at', 'desc')->get();
    
    echo '<option value="">ជ្រើសរើសម៉ូឌែល</option>';
    foreach($all as $v){
            echo '<option value='.$v->product_code.'>'.$v->title.'</option>';
    }

})->name('get-model-typekh');

//Payment Calculator
Route::post('/payment-calculator', function(){
    //$file = fopen('file.csv', 'r');
    $csv = array_map("str_getcsv", file('file.csv', FILE_SKIP_EMPTY_LINES));    
    $header = array_shift($csv); // get header from array
    
    $model_post = $_POST['model'];
    $down = $_POST['down'];
    $term = $_POST['term'];
    
    foreach ($csv as $key => $value) {    
        $csv[$key] = array_combine($header, $value);
        $model = $csv[$key]['Model'];
        $downpay = $csv[$key]['Down Payment Percentage'];
        
        if($model == $model_post && $downpay == $down){
            //echo $csv[$key]['ID'].' | '.$csv[$key]['Down Payment'];
            $data = array("down_payment" => $csv[$key]['Down Payment Amount'], "loan_amount" => $csv[$key]['Loan Amount'], "monthly_payment" => $csv[$key][$term]);
            //return json_encode($data);
            
            echo '<h3 class="result-title">RESULTS</h3>';
            
            $model_thumb = Pages::where('product_code', $model_post)->first();
            echo '<img src="/storage/app/uploads/'.$model_thumb->thumbnail.'"/>';
            echo '<p><strong>From '.$model_thumb->price.' </strong></p>';
            echo '<p>For '.$term.' Term</p>';
               echo '<div class="result-group">';
                  echo '<p><strong>Down Payment</strong></p>';
                  echo '<p class="down-payment-result">'.$csv[$key]['Down Payment Amount'].'</p>';
               echo '</div>';
               
               echo '<div class="result-group">';
                  echo '<p><strong>Loan Amount</strong></p>';
                  echo '<p>'.$csv[$key]['Loan Amount'].'</p>';
               echo '</div>';
               
               echo '<div class="result-group">';
                echo '<p><strong>Estimated Monthly Payment</strong></p>';
                  echo '<p>'.$csv[$key][$term].'</p>';
               echo '</div>';
        }
    }
})->name('payment-calen');

Route::post('kh/payment-calculator', function(){
    //$file = fopen('file.csv', 'r');
    $csv = array_map("str_getcsv", file('file.csv', FILE_SKIP_EMPTY_LINES));    
    $header = array_shift($csv); // get header from array
    
    $model_post = $_POST['model'];
    $down = $_POST['down'];
    $term = $_POST['term'];
    
    foreach ($csv as $key => $value) {    
        $csv[$key] = array_combine($header, $value);
        $model = $csv[$key]['Model'];
        $downpay = $csv[$key]['Down Payment Percentage'];
        
        if($model == $model_post && $downpay == $down){
            //echo $csv[$key]['ID'].' | '.$csv[$key]['Down Payment'];
            $data = array("down_payment" => $csv[$key]['Down Payment Amount'], "loan_amount" => $csv[$key]['Loan Amount'], "monthly_payment" => $csv[$key][$term]);
            //return json_encode($data);
            
            echo '<h3 class="result-title">លទ្ធផល</h3>';
            
            $model_thumb = Pages::where('product_code', $model_post)->first();
            echo '<img src="/storage/app/uploads/'.$model_thumb->thumbnail.'"/>';
            echo '<p><strong>តម្លៃ '.$model_thumb->price.' </strong></p>';
            echo '<p>សំរាប់រយៈពេល '.$term.' </p>';
               echo '<div class="result-group">';
                  echo '<p><strong>ចំនួនទឹកប្រាក់បង់មុន</strong></p>';
                  echo '<p class="down-payment-result">'.$csv[$key]['Down Payment Amount'].'</p>';
               echo '</div>';
               
               echo '<div class="result-group">';
                  echo '<p><strong>ប្រាក់កម្ជីពីធនាគារ</strong></p>';
                  echo '<p>'.$csv[$key]['Loan Amount'].'</p>';
               echo '</div>';
               
               echo '<div class="result-group">';
                echo '<p><strong>ចំនួនប្រាក់បង់ប្រចាំខែ</strong></p>';
                  echo '<p>'.$csv[$key][$term].'</p>';
               echo '</div>';
        }
    }
})->name('payment-cal');

Route::get('/', function () {
    $default = Locale::where('default', 1)->first();
    $current_lang = $default->lang_code;
    app()->setLocale($current_lang);
            //$single = Pages::where('slug', $slug)->first();
            $single = Pages::where('slug', 'home')->where('lang_code', $current_lang)->first();
    
            if(!empty($single)){            
                //return view('layout.andro.page', ['single'=>$single]);
    
                $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
                $page = (new PageRepository)->findWithId($single->id);
                $pageRenderer = new PageRenderer($theme, $page);
                $html = $pageRenderer->render();
                return $html;
            }
            else{
                abort(404);
            }  
})->name('home');

Route::get('/kh', function () {
            app()->setLocale('kh');
            $single = Pages::where('slug', 'home')->where('lang_code', 'kh')->first();
            if(!empty($single)){
                $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
                $page = (new PageRepository)->findWithId($single->id);
                $pageRenderer = new PageRenderer($theme, $page);
                $html = $pageRenderer->render();
                return $html;
            }
            else{
                abort(404);
            }  
})->name('home');


Route::get('/en', function () {
            app()->setLocale('en');
            $single = Pages::where('slug', 'home')->where('lang_code', 'en')->first();
            if(!empty($single)){
                $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
                $page = (new PageRepository)->findWithId($single->id);
                $pageRenderer = new PageRenderer($theme, $page);
                $html = $pageRenderer->render();
                return $html;
            }
            else{
                abort(404);
            }     
})->name('home');


Route::get('api/v1/getdealers', array('as' => 'getdealer', 'uses' => 'BranchsController@get_Dealers'));


Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function() {

    Route::get('/', 'HomeController@index')->name('home');
    //Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/career/view/{slug}', function () {
        $current_lang = app()->getLocale();
        $slug = Request::segment(4);
        $career = Careers::where('slug', $slug)->where('lang_code', $current_lang)->first();

        if(!empty($career)){            
            //return view('layout.andro.page', ['single'=>$single]);
    
            return view('admin/careers/show', ['career'=>$career]);
        }
        else{
            abort(404);
        }
    })->name('ViewCareer');
    
    Route::get('/spart/{slug}', function () {
        $current_lang = app()->getLocale();
        $slug = Request::segment(3);
        //return 'blog detail';
        
        $sparts = Sparts::where('slug', $slug)->where('lang_code', $current_lang)->first();

        if(!empty($sparts)){            
            //return view('layout.andro.page', ['single'=>$single]);
    
            return view('admin/spart/show', ['sparts'=>$sparts]);
        }
        else{
            abort(404);
        }
        
    })->name('Viewsparts');

    Route::get('/{slug}', function () {
        $current_lang = app()->getLocale();
        $slug = Request::segment(2);
        //$single = Pages::where('slug', $slug)->first();
        $single = Pages::where('slug', $slug)->where('lang_code', $current_lang)->where('is_published', 1)->first();

        if(!empty($single)){            
            //return view('layout.andro.page', ['single'=>$single]);

            $theme = new Theme(config('pagebuilder.theme'), config('pagebuilder.theme.active_theme'));
            $page = (new PageRepository)->findWithId($single->id);
            $pageRenderer = new PageRenderer($theme, $page);
            $html = $pageRenderer->render();
            return $html;
        }
        else{
            abort(404);
            //return redirect('/'.$current_lang.'/page-404');
        }
    })->name('viewpage');
    
});

// Route::get('admin', ['middleware'=>'myauth',function(){
//     return 'Route to admin page is worked!';
// }]);

Route::group(['middleware' => ['auth']], function() {
    Route::post('/video-setting','BlockController@video_setting')->name('save_video_setting');
    Route::get('admin', 'DashboardController@index')->name('dashboard');
    Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('admin/users/roles','RoleController');
    Route::resource('admin/users','UserController');
    Route::resource('admin/products','ProductController');
    Route::resource('admin/posts','PostsController');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/gallery','GalleryController');
    Route::resource('admin/tags','TagsController');
    Route::resource('admin/pages','PagesController');
    Route::resource('admin/careers','CareersController');
    Route::resource('admin/slide','SlideController');
    Route::get('admin/pages/destroy/{id}','PagesController@destroy');
    Route::get('admin/gallery/destroy/{id}','GalleryController@destroy');
    Route::get('admin/posts/destroy/{id}','PostsController@destroy');
    Route::get('admin/slide/destroy/{id}','SlideController@destroy');
    Route::get('admin/tags/destroy/{id}','TagsController@destroy');
    Route::get('admin/category/destroy/{id}','CategoryController@destroy');
    Route::get('admin/pages/copy/{id}', 'PagesController@duplicate');
    Route::get('admin/posts/copy/{id}', 'PostsController@duplicate');
    Route::resource('admin/menu', 'MenuController');
    Route::resource('admin/menu/order', 'MenuController');
    Route::resource('admin/projects', 'ProjectsController');
    Route::resource('admin/locale', 'LocaleController');
    Route::resource('admin/awards','AwardController');
    Route::resource('admin/years','YearController');
    Route::resource('admin/milestione', 'MilestonesController');
    Route::get('admin/locale/destroy/{id}','LocaleController@destroy');
    Route::get('admin/milestione/destroy/{id}','MilestonesController@destroy');
    Route::get('admin/careers/destroy/{id}','CareersController@destroy');
    Route::resource('admin/merchant','MerchantController');
    Route::get('admin/merchant/destroy/{id}','MerchantController@destroy');
    Route::resource('admin/merchant_cate','Merchant_cateController');
    Route::resource('admin/regions','RegionController');
    Route::resource('admin/spart','SpartsController');
    Route::resource('admin/spart_cate','Sparts_cateController');
    Route::resource('admin/branchs','BranchsController');
    Route::resource('admin/types','TypeController');
    Route::resource('admin/feature','FeatureController');
    Route::resource('admin/specification','SpecificationController');
    Route::get('admin/gallery/copy/{id}', 'GalleryController@duplicate');
    Route::get('admin/specification/copy/{id}', 'SpecificationController@duplicate');
    Route::get('admin/spart/copy/{id}', 'SpartsController@duplicate');
    
    Route::resource('admin/team','TeamController');
    Route::get('admin/team/copy/{id}', 'TeamController@duplicate');
    Route::get('admin/team/destroy/{id}','TeamController@destroy');
    
    //Route Delete
    Route::get('admin/pages/destroy/{id}','PagesController@destroy');
    Route::get('admin/posts/destroy/{id}','PostsController@destroy');
    Route::get('admin/slide/destroy/{id}','SlideController@destroy');
    Route::get('admin/tags/destroy/{id}','TagsController@destroy');
    Route::get('admin/category/destroy/{id}','CategoryController@destroy');
    Route::get('admin/locale/destroy/{id}','LocaleController@destroy');
    Route::get('admin/careers/destroy/{id}','CareersController@destroy');
    Route::get('admin/type/destroy/{id}','TypeController@destroy');
    Route::get('admin/branchs/destroy/{id}','BranchsController@destroy');
    Route::get('admin/specification/destroy/{id}','SpecificationController@destroy');
    Route::get('admin/spart/destroy/{id}','SpartsController@destroy');
    Route::get('admin/spart_cate/destroy/{id}','Sparts_cateController@destroy');
    
    
    //Route Setting
    Route::resource('admin/setting','SettingController');
    Route::post('admin/setting/update', array('as' => 'updatesetting', 'uses' => 'SettingController@updateSetting'));
    
    //Clear All Caches
    Route::get('cache-clear', function(){
        \Artisan::call('config:cache');
        return "Cache & config were cleared";
    });

    // Route for Menu
    Route::get('admin/menu','MenuController@index');
    Route::post('admin/menu/addcustommenu', array('as' => 'addcustommenu', 'uses' => 'MenuController@addcustommenu'));
    Route::post('admin/menu/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => 'MenuController@deleteitemmenu'));
    Route::post('admin/menu/deletemenug', array('as' => 'hdeletemenug', 'uses' => 'MenuController@destroy'));
    Route::post('admin/menu/generatemenucontrol', array('as' => 'menucontrol', 'uses' => 'MenuController@generatemenucontrol'));
    Route::post('admin/menu/updateitem', array('as' => 'updateitemr', 'uses' => 'MenuController@updateitem'));
    Route::post('admin/menu/store', array('as' => 'storemenu', 'uses' => 'MenuController@store'));
    Route::post('admin/menu/destroy', array('as' => 'destroymenu', 'uses' => 'MenuController@destroy'));
    
    
    // Route for pagebuilder
    Route::any( config('pagebuilder.website_manager.url') . '{any}', function() {
        $builder = new LaravelPageBuilder(config('pagebuilder'));
        $builder->handleRequest();
    })->where('any', '.*');

    //Elfinder
    Route::get('admin/elfinder', 'Barryvdh\Elfinder\ElfinderController@showConnector');

});

use App\User;

Auth::routes([
        'register' => false
    ]);