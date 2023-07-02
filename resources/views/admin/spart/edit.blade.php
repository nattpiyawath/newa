@extends('template')
@section('title', 'Edit - '.$sparts->title)
@section('content')
<style type="text/css">
   textarea.form-control {height: 80px;}
   .card-view {max-width: 1280px;margin: 0 auto;}
   .ck-editor__editable {min-height: 200px;}
   .checkbox input[type="checkbox"]{opacity: 1;position: unset;margin-left: 0;}
</style>

@php
$lang = 'en';
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
}
@endphp

@php
$myStorage = '/storage/app/uploads/';
@endphp
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Edit {{$sparts->title}}</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => ['spart.update', $sparts->id], 'method' => 'PATCh']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" data-placeholder="Status" name="is_published">
                                        @php 
                                       $status = $sparts->is_published;
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
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="select-country">Translate Of </label>
                                    <select class="form-control selectpicker" id="select-merchant" data-live-search="true">
          
                                        <option value="0">Select...</option>
                                       @foreach($allsparts as $pg)
                                       <option <?= $sparts->slug==$pg->slug?'selected':''?> data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
                                       @endforeach
                                    </select>
                                    <script type="text/javascript">
                                       $(function() {
                                         $('.selectpicker').selectpicker();
                                       });
                                       
                                    </script>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;">
                                       <a class="btn btn-default btn-close" href="{{url('admin/spart?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                        </div>
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Spare Part Informations</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="form-group @if($errors->has('title')) has-error @endif">
                                 <label class="control-label mb-10">Title</label>
                                 {!! Form::text('title', $sparts->title, ['class' => 'form-control', 'placeholder' => 'Spare Part Title']) !!}
                                    @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                              </div>
                           </div>
                    
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label mb-10">Spare Part's Category</label>
                                 <select class="form-control" data-placeholder="Spare Part's Category" name="spart_cate_id">
                                 
                                       <option value="0">Select...</option>
                                       @foreach($sparts_cate as $sparts_cate)
                                       <option value="{{$sparts_cate->id}}"
                                       @if ($sparts->spart_cate_id == $sparts_cate->id)
                                       selected 
                                       @endif
                                       > {{$sparts_cate->sparts_cate}}</option>
                                       @endforeach 

                                 </select>
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="row">
                         
                        <div class="col-md-8">
                           <div class="form-group @if($errors->has('slug')) has-error @endif">
                              <label class="control-label mb-10">Slug</label>
                              {!! Form::text('slug', $sparts->slug, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
                                 @if ($errors->has('slug'))
                                 <span class="help-block">{!! $errors->first('slug') !!}</span>
                                 @endif
                           </div>
                        </div>
                        
                        <div class="col-md-4">
                           <div class="form-group @if($errors->has('sprice')) has-error @endif">
                              <label class="control-label mb-10">Spare Part Price</label>
                              {!! Form::text('sprice', $sparts->sprice, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
                                 @if ($errors->has('sprice'))
                                 <span class="help-block">{!! $errors->first('sprice') !!}</span>
                                 @endif
                           </div>
                        </div>                        

                     </div>
                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-picture-o" aria-hidden="true"></i> Media</h6>
                     <hr class="light-grey-hr">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                           <label class="control-label mb-10">Thumbnail</label>
                                 <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                 <div class="form-group">
                                    @php 
                                    $thumb = $sparts->thumbnail;
                                    @endphp
                                    @if ($thumb != '')
                                    <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$sparts->thumbnail}}"/>
                                    <input type="hidden" id="feature_image2" name="thumbnail" value="{{$sparts->thumbnail}}" />
                                    @else
                                    <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                    <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                    @endif
                                 </div>
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-8">
                            
                             <div class="form-group">
                                                                        <label class="control-label mb-10">Cover Image</label> 
                                                                        <a class="button secondary postfix image_selector" style="float: right;" data-upateimage="feature_image"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                                        <div class="form-group">
                                                                            @php 
                                                                                $header_img = $sparts->header_img;
                                                                            @endphp

                                                                            @if ($header_img != '')
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$sparts->header_img}}"/>
                                                                                <input type="hidden" id="feature_image" name="header_img" value="{{$sparts->header_img}}" />
                                                                            @else
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="header_img" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    
                        <div class="modal fade in">
                                 <div id="elfinder"></div>
                              </div>
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
                                             var site_url = '{{URL('')}}';
                                             var test = url.url;
                                             
                                             var new2 = test.replace(site_url+"/storage/app/uploads/","");
                                             document.getElementById(updateID).value = new2;
                                             var full_img = site_url+'{{$myStorage}}'+new2;
                                             $('#cover-image').attr('src', full_img);
                                             $('.modal').hide();
                                             //console.log(new2);
                                         }
                                     }).elfinder('instance');
                                 
                                 });
                                 
                                 $('.image_selector2').click(function(event){
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
                                             //console.log(url)
                                             var site_url = '{{URL('')}}';
                                             var test = url.url;
                                             
                                             var new2 = test.replace(site_url+"/storage/app/uploads/","");
                                             document.getElementById(updateID).value = new2;
                                             var full_img = site_url+'{{$myStorage}}'+new2;
                                             $('#thum-image').attr('src', full_img);
                                             $('.modal').hide();
                                         }
                                     }).elfinder('instance');
                                 
                                 });
                                 
                              </script>
                        </div>
                        <!--/span-->
                     </div>
                     <hr class="light-grey-hr">

                     <div class="row">
                     <div class="col-md-12">
                     <div class="form-group @if($errors->has('details')) has-error @endif">
                               <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                               <label class="control-label mb-10">Description</label>
                               <textarea id="editor" class="ckeditor form-control" name="details">{{$sparts->details}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'details' );
                                    CKEDITOR.config.toolbar = [
  { name: 'paragraph', groups: [ 'list', 'indent'], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-'] },
    { name: 'clipboard', groups: [ 'clipboard', 'undo', 'blocks', 'align'], items: ['PasteFromWord', '-', 'Undo', 'Redo', 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'Link', 'Unlink', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Styles', 'Format', 'FontSize', 'TextColor', 'BGColor', 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe' , 'Source'] }
];
                                    </script>
                            </div> 
                        </div>
                           <!--/span-->
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion1')) has-error @endif">
                                {!! Form::label('Accordion Item #1') !!}
                                {!! Form::text('title_accordion1', $sparts->title_accordion1, ['class' => 'form-control', 'placeholder' => 'Accordion Item #1']) !!}
                                @if ($errors->has('title_accordion1'))
                                <span class="help-block">{!! $errors->first('title_accordion1') !!}</span>@endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description1')) has-error @endif">
                                {!! Form::label('Accordion Description #1') !!}
                                {!! Form::text('accordion_description1', $sparts->accordion_description1, ['class' => 'form-control', 'placeholder' => 'Accordion Description #1']) !!}
                                @if ($errors->has('accordion_description1'))
                                <span class="help-block">{!! $errors->first('accordion_description1') !!}</span>@endif
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion2')) has-error @endif">
                                {!! Form::label('Accordion Item #2') !!}
                                {!! Form::text('title_accordion2', $sparts->title_accordion2, ['class' => 'form-control', 'placeholder' => 'Accordion Item #2']) !!}
                                @if ($errors->has('title_accordion2'))
                                <span class="help-block">{!! $errors->first('title_accordion2') !!}</span>@endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description2')) has-error @endif">
                                {!! Form::label('Accordion Description #2') !!}
                                {!! Form::text('accordion_description2', $sparts->accordion_description2, ['class' => 'form-control', 'placeholder' => 'Accordion Description #2']) !!}
                                @if ($errors->has('accordion_description2'))
                                <span class="help-block">{!! $errors->first('accordion_description2') !!}</span>@endif
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion3')) has-error @endif">
                                {!! Form::label('Accordion Item #3') !!}
                                {!! Form::text('title_accordion3', $sparts->title_accordion3, ['class' => 'form-control', 'placeholder' => 'Accordion Item #3']) !!}
                                @if ($errors->has('title_accordion3'))
                                <span class="help-block">{!! $errors->first('title_accordion3') !!}</span>@endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description3')) has-error @endif">
                                {!! Form::label('Accordion Description #3') !!}
                                {!! Form::text('accordion_description3', $sparts->accordion_description3, ['class' => 'form-control', 'placeholder' => 'Accordion Description #3']) !!}
                                @if ($errors->has('accordion_description3'))
                                <span class="help-block">{!! $errors->first('accordion_description3') !!}</span>@endif
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion4')) has-error @endif">
                                {!! Form::label('Accordion Item #4') !!}
                                {!! Form::text('title_accordion4', $sparts->title_accordion4, ['class' => 'form-control', 'placeholder' => 'Accordion Item #4']) !!}
                                @if ($errors->has('title_accordion4'))
                                <span class="help-block">{!! $errors->first('title_accordion4') !!}</span>@endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description4')) has-error @endif">
                                {!! Form::label('Accordion Description #4') !!}
                                {!! Form::text('accordion_description4', $sparts->accordion_description4, ['class' => 'form-control', 'placeholder' => 'Accordion Description #4']) !!}
                                @if ($errors->has('accordion_description4'))
                                <span class="help-block">{!! $errors->first('accordion_description4') !!}</span>@endif
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion5')) has-error @endif">
                                {!! Form::label('Accordion Item #5') !!}
                                {!! Form::text('title_accordion5', $sparts->title_accordion5, ['class' => 'form-control', 'placeholder' => 'Accordion Item #5']) !!}
                                @if ($errors->has('title_accordion5'))
                                <span class="help-block">{!! $errors->first('title_accordion5') !!}</span>@endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description5')) has-error @endif">
                                {!! Form::label('Accordion Description #5') !!}
                                {!! Form::text('accordion_description5', $sparts->accordion_description5, ['class' => 'form-control', 'placeholder' => 'Accordion Description #5']) !!}
                                @if ($errors->has('accordion_description5'))
                                <span class="help-block">{!! $errors->first('accordion_description5') !!}</span>@endif
                           </div>
                     </div>

                     <input type="hidden" name="lang_code" value="{{$lang}}">
                     

                  </div>
               </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</div>
</div>      
</div>
</div>
@endsection