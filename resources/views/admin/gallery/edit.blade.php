@extends('template')

@section('title', 'Edit Slider - '.$gallery->gallery_name)

@section('content')

@php
$lang = 'en';
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
}
@endphp

@php
$myStorage = '/storage/app/uploads/';
@endphp

<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 1280px;margin: 0 auto;}
    button#addMore {
        right: 0;
        margin-top: -22px;
        float: right;
        position: absolute;
        margin-right: 16px;
     }
    .close-x{display: flex;}
    .cover-image {
        width: 184px!important;
        height: 42px!important;
    }
    span.removeaddmore {
        margin-top: 6px;
        margin-left: -16px;
    }
    #addRow{padding: 0 18px;}
</style>

<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Edit Slider - {{$gallery->gallery_name}}</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">

                                                   {!! Form::open(['route' => ['gallery.update', $gallery->id], 'method' => 'PATCh']) !!}
                                                   
                                                   @csrf

                                                        <input type="hidden" name="lang_code" value="{{$lang}}">
                                                        
                                                        <div class="form-body">

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="page-status" class="control-label mb-10">Status</label>
                                                                        <select class="form-control" id="page-status" data-placeholder="Status" name="is_published">
                                                                            @php 
                                                                                $status = $gallery->is_published;
                                                                            @endphp

                                                                            @if ($status == 1)
                                                                                <option value="1" selected>Publish</option>
                                                                                <option value="0">Draft</option>
                                                                            @else
                                                                                <option value="0" selected>Draft</option>
                                                                                <option value="1">Publish</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2"> 
                                                                    <div class="form-group">
                                                                    <label for="post-type" class="control-label mb-10">Select Post Type</label>
                                                                        <select class="form-control" id="post-type" id="post-type" name="post_type">
                                                                                <option <?php if($gallery->post_type == 'page'){echo 'selected';}?> value="page">Page</option>
                                                                                <option <?php if($gallery->post_type == 'product'){echo 'selected';}?> value="product">Product</option>
                                                                                <option <?php if($gallery->post_type == 'news'){echo 'selected';}?> value="news">News</option>
                                                                                <option <?php if($gallery->post_type == 'events'){echo 'selected';}?> value="events">Event</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-3 post-list-main"> 
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Post List</label>
                                                                        <select class="form-control selectpicker" data-live-search="true" data-placeholder="Choose a Post" name="page_id">
                                                                            <option value="0">Select...</option>
                                                                            @foreach($pages as $val)
                                                                                <option class="post-{{$val->type}}" <?php if($gallery->page_id == $val->id){echo 'selected';}?> value="{{$val->id}}">{{$val->title}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-md-2"> 
                                                                    <div class="form-group">
                                                                        
                                                                         <label class="control-label mb-10">Layout</label>
                                                                        <select class="form-control selectpicker" id="choose-layout" name="layout">
                                                                            <option <?php if($gallery->layout == 1){echo 'selected';}?> value="1">Banners 1, 2,..</option>
                                                                            <option <?php if($gallery->layout == 2){echo 'selected';}?> value="2">Product Feature</option>
                                                                            <option <?php if($gallery->layout == 3){echo 'selected';}?> value="3">Event Gallery</option>
                                                                            <option <?php if($gallery->layout == 4){echo 'selected';}?> value="4">Model KV</option>
                                                                            <option <?php if($gallery->layout == 5){echo 'selected';}?> value="5">4JOYS</option>
                                                                        </select>
                                                                        

                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <div class="form-actions mt-10" style="text-align: right;">
                                                                        <a class="btn btn-default btn-close" href="{{url('admin/gallery?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                                                        {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group @if($errors->has('gallery_name')) has-error @endif">
                                                                        <label class="control-label mb-10">Slider Name</label>

                                                                        {!! Form::text('gallery_name', $gallery->gallery_name, ['class' => 'form-control', 'placeholder' => 'Enter name here']) !!}
                                                                        @if ($errors->has('gallery_name'))
                                                                            <span class="help-block">{!! $errors->first('gallery_name') !!}</span>
                                                                        @endif

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                   
                                                                   <label for="select-country" class="control-label mb-10">Translate Of </label>

                                                                    <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">
                                                                        <option value="0">Select...</option>
                                                                        @foreach($gallery_lang as $pg)
                                                                            <option <?= $gallery->gallery_name==$pg->gallery_name?'selected':''?> data-tokens="{{$pg->gallery_name}}" value="{{$pg->translate_id}}">{{$pg->gallery_name}}</option>
                                                                        @endforeach

                                                                    </select> 
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                
                                                            </div>

                                                        <div id="addRow">
                                                            
                                                            <div class="row" style="padding-top:20px!important">
                                                                    <div class="col-md-1">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <label class="control-label mb-10">Order</label>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 banner-choose">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <label class="control-label mb-10">Image <span class="banner-choose">Mobile</span></label>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <label class="control-label mb-10">Image <span class="banner-choose">Desktop</span></label>
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-3">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                              <label class="control-label mb-10"> Title</label>
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-2">
                                                                          <div class="form-group">
                                                                              <label class="control-label mb-10"> Caption</label>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-1">
                                                                          <div class="form-group">
                                                                              <label class="control-label mb-10"> Link</label>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-1">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            
                                                                          </div>
                                                                      </div>
                                                                </div>
                                                            
                                                            <?php if(!empty($gallery->data)){
                                                              $galleries = collect(json_decode($gallery->data))->sortByDesc('image_order')->reverse()->toArray();
                                                              foreach($galleries as $index => $val){

                                                              ?>

                                                              @if($index == 0)

                                                              <div class="row delete_add_more_item">

                                                                <div class="row">
                                                                    <div class="col-md-1">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <input type="number" min="1" class="form-control" name="image_order[]" value="{{$val->image_order}}" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload banner-choose" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$val->image_url_mobile}}"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_mobile[]" value="{{$val->image_url_mobile}}" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$val->image_url_desktop}}"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_desktop[]" value="{{$val->image_url_desktop}}" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-3">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_title[]" value="{{$val->image_title}}" placeholder="Enter Title" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-2">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_caption[]" value="{{$val->image_caption}}" placeholder="Enter Caption" />
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-1">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_link[]" value="{{$val->image_link}}" placeholder="Enter URL" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-1">
                                                                          <div class="form-group">
                                                                            
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                
                                                                </div>

                                                                @else
                                                                <div class="row delete_add_more_item" id="delete_add_more_item">
                                                                    <div class="row">
                                                                        <div class="col-md-1">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <input type="number" min="1" class="form-control" name="image_order[]" value="{{$val->image_order}}" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload banner-choose" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$val->image_url_mobile}}"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_mobile[]" value="{{$val->image_url_mobile}}" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$val->image_url_desktop}}"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_desktop[]" value="{{$val->image_url_desktop}}" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-3">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_title[]" value="{{$val->image_title}}" placeholder="Enter Title" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-2">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_caption[]" value="{{$val->image_caption}}" placeholder="Enter Caption" />
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-1">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_link[]" value="{{$val->image_link}}" placeholder="Enter URL" />
                                                                          </div>
                                                                      </div>
                                                                        <div class="col-md-1">
                                                                              <div class="form-group">
                                                                                    <div class="form-group close-x">
                                                                                      <span class="removeaddmore" style="cursor:pointer;color:red;padding: 4px 10px;border-radius: 90%;border: solid 1px;"><i class="fa fa-times" aria-hidden="true"></i><span>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                        </div>
                                                                    </div>
                                                                

                                                                @endif
                                                            
                                                              <?php } } ?>
                                                             
                                                             </div>

                                                        </div>

                                                    {!! Form::close() !!}

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button id="addMore" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
</div>

<div class="modal fade in"><button class="close-filemana">x</button><div id="elfinder"></div></div>


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
        
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 

<script id="document-template" type="text/x-handlebars-template">
<div class="row delete_add_more_item">

                                                                <div class="row">
                                                                    <div class="col-md-1">
                                                                          <div class="form-group" style="margin-bottom:0;">
                                                                            <input type="number" min="1" class="form-control" name="image_order[]" value="{{ old('image_order') }}" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload banner-choose" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_mobile[]" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                          <div class="form-group">
                                                                            <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                            <input type="hidden" id="feature_image" name="image_url_desktop[]" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-3">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_title[]" value="{{ old('image_title') }}" placeholder="Enter Title" />
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-md-2">
                                                                          <div class="form-group">
                                                                              <input type="text" class="form-control" name="image_caption[]" value="{{ old('image_caption') }}" placeholder="Enter Caption" />
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-1">
                                                                          <div class="form-group">
                                                                             <input type="text" class="form-control" name="image_link[]" value="{{ old('image_link') }}" placeholder="Enter URL" />
                                                                          </div>
                                                                      </div>
                                                                      
                                                                      <div class="col-md-1">
                                                                          <div class="form-group close-x">
                                                                                <span class="removeaddmore" style="cursor:pointer;color:red;padding: 4px 10px;border-radius: 90%;border: solid 1px;"><i class="fa fa-times" aria-hidden="true"></i><span>
                                                                            </div>
                                                                      </div>
                                                                    </div>
                                                                
                                                                </div>
 </script>

 <script type="text/javascript">

  $(function() {
    $('.selectpicker').selectpicker();
  });

</script>


<script type="text/javascript">
 
     $(document).on('click','#addMore',function(){
    
         var image_url = $("#image_url").val();
         var image_title = $("#image_title").val();
         var image_caption = $("#image_caption").val();
         var source = $("#document-template").html();
         var template = Handlebars.compile(source);
    
         var data = {
            image_url: image_url,
            image_title: image_title,
            image_caption: image_caption
         }
    
         var html = template(data);
         $("#addRow").append(html);
         checkBanner();
     });
    
      $(document).on('click','.removeaddmore',function(event){
        $(this).closest('.delete_add_more_item').remove();
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
        if(type != 1){
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

@endsection