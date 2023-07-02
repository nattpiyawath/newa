@extends('template')
@section('title', 'Edit - '.$awards->title)
@section('content')
<style type="text/css">
   textarea.form-control {height: 80px;}
   .card-view {max-width: 1280px;margin: 0 auto;}
   .ck-editor__editable {min-height: 200px;}
   .checkbox input[type="checkbox"]{opacity: 1;position: unset;margin-left: 0;}
</style>
@php
$myStorage = '/storage/app/uploads/';
@endphp
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Edit {{$awards->title}}</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => ['awards.update', $awards->id], 'method' => 'PATCh']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" data-placeholder="Status" name="is_published">
                                       @php 
                                       $status = $awards->is_published;
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
                                    <select class="form-control selectpicker" id="select-page" data-live-search="true">
                                       <option value="0">Select...</option>
                                       @foreach($allAward as $pg)
                                       <option <?= $awards->slug==$pg->slug?'selected':''?> data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
                                       @endforeach
                                    </select>
                                    <script type="text/javascript">
                                       $(function() {
                                         $('.selectpicker').selectpicker();
                                       });
                                       
                                    </script>
                                 </div>
                              </div>
                              <!--/span-->
                              
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="page-status">Type</label>
                                            <select class="form-control" id="page-status" data-placeholder="Status" name="type">
                                                                             
                                                @php 
                                                    $type = $awards->type;
                                                @endphp

                                                @if ($type == 'awards')
                                                    <option value="awards" selected>Awards</option>
                                                    <option value="annual_report">Annual Report</option>
                                                @else
                                                    <option value="annual_report" selected>Annual Report</option>
                                                    <option value="awards">Awards</option>
                                                 @endif
                                                                             
                                            </select>
                                    </div>
                                </div>
                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;">
                                       <a target="_blank" class="btn btn-default btn-close" href="{{url('').'/'.$lang.'/'.$awards->slug}}"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                       <a class="btn btn-default btn-close" href="{{url('admin/awards?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                           <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Award Information</h6>
                           <hr class="light-grey-hr">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="form-group @if($errors->has('title')) has-error @endif">
                                    <label class="control-label mb-10">Award Title</label>
                                    {!! Form::text('title', $awards->title, ['class' => 'form-control', 'placeholder' => 'Title here']) !!}
                                    @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label mb-10">Select Year</label>
                                    <select class="form-control" data-placeholder="Choose a Parent" name="years_id">
                                       <option value="0">Select...</option>
                                       @foreach($years as $years)
                                       <option value="{{$years->id}}"
                                       @if ($awards->years_id == $years->id)
                                       selected 
                                       @endif
                                       > {{$years->year}}</option>
                                       @endforeach 
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /Row -->
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group @if($errors->has('slug')) has-error @endif">
                                 <label class="control-label mb-10">Slug</label>
                                 {!! Form::text('slug', $awards->slug, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
                                 @if ($errors->has('slug'))
                                 <span class="help-block">{!! $errors->first('slug') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!-- /Row -->
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
                                    $thumb = $awards->thumbnail;
                                    @endphp
                                    @if ($thumb != '')
                                    <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$awards->thumbnail}}"/>
                                    <input type="hidden" id="feature_image2" name="thumbnail" value="{{$awards->thumbnail}}" />
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
                                    $header_img = $awards->header_img;
                                    @endphp
                                    @if ($header_img != '')
                                    <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$awards->header_img}}"/>
                                    <input type="hidden" id="feature_image" name="header_img" value="{{$awards->header_img}}" />
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
                        <!-- /Row -->
                        <br>
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-address-card-o" aria-hidden="true"></i> SEO</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('meta_keywords')) has-error @endif">
                                 <label class="control-label mb-10">Meta Keywords</label>
                                 {!! Form::textarea('meta_keywords', $awards->meta_keywords, ['class' => 'form-control', 'placeholder' => 'Meta keywords']) !!}
                                 @if ($errors->has('meta_keywords'))
                                 <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-8">
                              <div class="form-group @if($errors->has('meta_description')) has-error @endif">
                                 <label class="control-label mb-10">Meta Description</label>
                                 {!! Form::textarea('meta_description', $awards->meta_description, ['class' => 'form-control', 'placeholder' => 'Meta Description']) !!}
                                 @if ($errors->has('meta_description'))
                                 <span class="help-block">{!! $errors->first('meta_description') !!}</span>@endif
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!-- /Row -->
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