@extends('template')

@section('title', 'Create A Slide')

@section('content')

<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 880px;left:0;}
    .category-main{margin-top: 10px;}
</style>


<div class="row category-main" >
      <div class="col-md-12">
            <div class="panel panel-default card-view">
                  <div class="panel-heading">
                        <div class="pull-left">
                              <h6 class="panel-title txt-dark">Create A Slide</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                <form action="{{ route('slide.store') }}" method="POST">
                                                        
                                                    {{ csrf_field() }}

                                                      <input type="hidden" name="lang_code" value="{{$lang}}">

                                                    <div class="form-group">
                                                        
                                                         <div class="form-group">
                                                            <label class="control-label mb-10">Slide's Mobile</label> 
                                                            <a class="button secondary postfix image_selector_mobile" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                             <div class="form-group">
                                                                <img class="mobile-image" id="mobile-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                 <input type="hidden" id="feature_image2" name="Img_mobile" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Slide Image</label> 
                                                            <a class="button secondary postfix image_selector" style="float: right;" data-upateimage="feature_image"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                             <div class="form-group">
                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                 <input type="hidden" id="feature_image" name="slide_img" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                            </div>
                                                        </div>

                                                        <div class="modal fade in"><div id="elfinder"></div></div>

                                                                    <script type="text/javascript">
                                                                        $('.image_selector').click(function(event){
                                                                            event.preventDefault();

                                                                            $('.modal').show();

                                                                            updateID = $(this).attr('data-upateimage');

                                                                            // fire elfinder for image selection
                                                                            $('#elfinder').elfinder({
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
                                                                                        folders  : true
                                                                                    }
                                                                                },
                                                                                getFileCallback: function(url) {
                                                                                    var test = url.url;
                                                                                    
                                                                                    var new2 = test.replace("{{$myStorage}}","");
                                                                                    document.getElementById(updateID).value = new2;
                                                                                    var full_img = '{{$myStorage}}'+new2;
                                                                                    $('#cover-image').attr('src', full_img);
                                                                                    $('.modal').hide();
                                                                                    //console.log(new2);
                                                                                }
                                                                            }).elfinder('instance');

                                                                        });
                                                                        
                                                                        $('.image_selector_mobile').click(function(event){
                                                                            event.preventDefault();

                                                                            $('.modal').show();

                                                                            updateID = $(this).attr('data-upateimage');

                                                                            // fire elfinder for image selection
                                                                            $('#elfinder').elfinder({
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
                                                                                        folders  : true
                                                                                    }
                                                                                },
                                                                                getFileCallback: function(url) {
                                                                                    var test = url.url;
                                                                                    
                                                                                    var new2 = test.replace("{{$myStorage}}","");
                                                                                    document.getElementById(updateID).value = new2;
                                                                                    var full_img = '{{$myStorage}}'+new2;
                                                                                    $('#mobile-image').attr('src', full_img);
                                                                                    $('.modal').hide();
                                                                                    //console.log(new2);
                                                                                }
                                                                            }).elfinder('instance');

                                                                        });
                                                                        

                                                                    </script>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" name="title" placeholder="Enter Title" class="form-control text-danger" value="{{old('title')}}">
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" placeholder="Describe here..." class="form-control text-danger"> {{old('description')}}</textarea>
                                                      </div>

                                                    <div class="form-group">
                                                        <label for="slide_btn">Button Name</label>
                                                         {!! Form::text('slide_btn', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) !!}
                                                    </div>

                                                      <div class="form-group">
                                                        <label for="slide_btn">Button Link</label>
                                                         {!! Form::text('slide_link', null, ['class' => 'form-control', 'placeholder' => 'Enter Url']) !!}
                                                    </div>



                                                      <div class="form-group">
                                                        <label for="order">Order</label>
                                                        <input type="number" name="order" class="form-control text-danger" value="{{old('order')}}">
                                                      </div>

                                                      <div class="from-group">
                                                         <div class="text-right">
                                                            <a class="btn btn-default btn-close" href="{{url('admin/slide?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                                            <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                                         </div>
                                                      </div>

                                                </form>
                                          </div>

                                    </div>

                              </div>

                        </div>
                  </div>

            </div>
      </div>
</div>

@endsection