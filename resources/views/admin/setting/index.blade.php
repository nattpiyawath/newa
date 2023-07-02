@extends('template')

@section('title', 'Site Setting Management')

@section('content')

<style type="text/css">
    .width-200{width:216px;}
    nav{max-height: 60px;}
    .panel.panel-default.card-view{max-width: 1000px;}
    .card-view.panel .panel-body{padding: 0;}
    .pagination {margin: 8px 0;}
    .pagination > li.active > a, .pagination > li.active > span {background: #4aa23c;}
    .open>.dropdown-menu {min-width: 228px;}
    .name-default{border: none;text-align: right;}
    .succe_setting{display: none;border: solid 1px #8b9f8a;
    color: #095708;
    max-width: 220px;
    border-radius: 6px;
    padding: 4px 10px;
    text-align: center;
    font-size: 12px;
    margin: 4px 20px;}
</style>

<!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark"> &nbsp; Site Setting</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="active"><span>Setting</span></li>
        			</ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
<!-- /Title -->

<div class="succe_setting"><i class="fa fa-check" aria-hidden="true"></i> Setting has been changed.</div>

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-wrap">

                        <form id="update-nav-menu" action="{{route('updatesetting')}}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="form-group">
                                    
                                     <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="myMenu" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose A Menu Top</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="myMenu" name="menu_top">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $menu_top==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="myMenu" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose A Header Menu</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="myMenu" name="menu">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $menu_id==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="footer_1" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Footer Column 1</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="footer_1" name="footer_1">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $footer_1==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="footer_2" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Footer Column 2</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="footer_2" name="footer_2">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $footer_2==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="footer_3" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Footer Column 3</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="footer_3" name="footer_3">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $footer_3==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="footer_4" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Footer Column 4</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="footer_4" name="footer_4">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $footer_4==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="footer_5" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Footer Column 5</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="footer_5" name="footer_5">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $footer_5==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" style="padding-right: 0;">
                                            <label class="form-control name-default" for="right_sidebar" style="padding-top: 10px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Choose Right Sidebar Menu</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <select class="form-control" id="right_sidebar" name="right_sidebar">
                                                @if($menus->count())
                                                    @foreach($menus as $value)
                                                        <option <?= $right_sidebar==$value->id?'selected':''?> value="{{$value->id}}">{{$value->name}}</option>
                                                     @endforeach
                                                @else 
                                                       <option>Menu is Empty</option>   
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                          <div class="form-group">

                                                                            @if ($logo != '')
                                                                                <img class="thum-image" id="thum-image" onerror="imgError(this);" height="150" src="{{URL('').$upload_url.$logo}}"/>
                                                                                <input type="hidden" id="feature_image2" name="logo" value="{{$logo}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" onerror="imgError(this);" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="logo" value="/assets/pagebuilder/images/thumbnail_600x400.jpg" />
                                                                            @endif
                                                                            
                                                                        </div>
                                                                      </div>
                                                                      <br>
                                                                      <div class="modal fade in"><div id="elfinder"></div></div>


<script type="text/javascript">
    $(document).on('click','.image-item-upload',function(event){
        event.preventDefault();
    
        $this = $(this);
    
        $('.modal').show();
    
        updateID = $this.attr('data-upateimage');
    
        $('#elfinder').elfinder({
                    customData: { 
                        _token: '{{ csrf_token() }}'
                    },
        url : '{{ route("elfinder.connector") }}',
    
        commandsOptions: {
          getfile: {
          oncomplete: 'destroy' 
          }
        },
        dialog: {width: 900, modal: true, title: 'Select a file'},
        resizable: false,
        commandsOptions: {
          getfile: {
          oncomplete: 'destroy',
          folders  : false
          }
        },
        getFileCallback: function(url) {
            var site_url = '{{URL('')}}';
            var test = url.url;
            var new2 = test.replace(site_url+"/storage/app/uploads/","");
            $this.find("img").attr('src', url.url);
            $this.find("img").next().attr('value', new2);
            $('.modal').hide();
        }
        }).elfinder('instance');

    });
  
    $(document).on('keyup', function(e) {
        if (e.key == "Escape") $('.modal').hide();
    });

    $('#post-type').on('change', function() {
        var type = this.value;
        $('#post-list option').hide();
        $('.post-page, .post-event, .post-product, .post-news').hide();
        $('.post-'+type).show();
    });
    
    $('#choose-layout').on('change', function() {
        var type = this.value;
        //console.log(type);
        if(type == 5){
           $('.banner-choose').show();
        } else if(type != 2 ) {
            $('.banner-choose').hide();
        } else if( type !=3 ){
            $('.banner-choose').hide();
        } else if( type !=4 ){
            $('.banner-choose').hide();
        } else {
            $('.banner-choose').show();
        } 
    });
    
    function checkBanner(){
        var banner = $('#choose-layout').val();
        if(banner != 1){
            $('.banner-choose').hide();
        } else {
            $('.banner-choose').show();
        }   
    }
    
    var banner = $('#choose-layout').val();
    if(banner != 1){
        $('.banner-choose').hide();
    } else {
            $('.banner-choose').show();
    } 
    
</script>
                                </div>
                                <input type="submit" name="submit" class="btn btn-success" value="Save Setting">
                            </div>
                        </form>
                    </div>
            </div>
    </div>
</div>

@endsection