@extends('template')
@section('title', 'Add Awards / Annual Reports')
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Add Awards</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => 'awards.store']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" data-placeholder="Status" name="is_published">
                                       <option value="0" selected>Draft</option>
                                       <option value="1">Publish</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="select-country">Translate Of </label>
                                    <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">
                                       <option value="0">Select...</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="col-md-2">
                                    <div class="form-group">
                                         <label for="page-status">Type</label>
                                            <select class="form-control" id="page-status" data-placeholder="Status" name="type">
                                                <option value="awards selected">Awards</option>
                                                <option value="annual_report">Annual Report</option>
                                            </select>
                                    </div>
                                </div>
                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;">
                                       <a class="btn btn-default btn-close" href="{{url('admin/awards?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                        </div>
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Post Information</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="form-group @if($errors->has('title')) has-error @endif">
                                 <label class="control-label mb-10">Award Title</label>
                                 <input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title Here" />
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

                                       <option value="{{$years->id}}">{{$years->year}}</option>

                                    @endforeach  

                                 </select>
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group @if($errors->has('slug')) has-error @endif">
                              <label class="control-label mb-10">Slug</label>
                              {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-text',  'placeholder' => 'Slug']) !!}
                              @if ($errors->has('slug'))
                              <span class="help-block">{!! $errors->first('slug') !!}</span>
                              @endif
                           </div>
                           <script type="text/javascript">
                              // /* Encode string to slug */
                                  function convertToSlug( str ) {
                                      
                                    //replace all special characters | symbols with a space
                                    str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
                                      
                                    // trim spaces at start and end of string
                                    str = str.replace(/^\s+|\s+$/gm,'');
                                      
                                    // replace space with dash/hyphen
                                    str = str.replace(/\s+/g, '-');
                                    document.getElementById("slug-text").setAttribute("value", str);
                                    //return str;
                                  }
                           </script>
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
                                 <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                 <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                              </div>
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label mb-10">Cover Image</label> 
                              <a class="button secondary postfix image_selector" style="float: right;" data-upateimage="feature_image"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                              <div class="form-group">
                                 <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                 <input type="hidden" id="feature_image" name="header_img" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
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
                                          //console.log(url)
                                          document.getElementById(updateID).value = url.url;
                                          $('#cover-image').attr('src', url.url);
                                          $('.modal').hide();
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
                                          document.getElementById(updateID).value = url.url;
                                          $('#thum-image').attr('src', url.url);
                                          $('.modal').hide();
                                      }
                                  }).elfinder('instance');
                              
                              });
                              
                           </script>
                        </div>
                        <!--/span-->
                     </div>
                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-address-card-o" aria-hidden="true"></i> SEO</h6>
                     <hr class="light-grey-hr">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group @if($errors->has('meta_keywords')) has-error @endif">
                              <label class="control-label mb-10">Meta Keyword</label>
                              {!! Form::textarea('meta_keywords', null, ['class' => 'form-control', 'placeholder' => 'Meta_keywords']) !!}
                              @if ($errors->has('meta_keywords'))
                              <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                              @endif
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-8">
                           <div class="form-group @if($errors->has('meta_description')) has-error @endif">
                              <label class="control-label mb-10">Meta Description</label>
                              {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta_Description']) !!}
                              @if ($errors->has('meta_description'))
                              <span class="help-block">{!! $errors->first('meta_description') !!}</span>@endif
                           </div>
                        </div>
                        <!--/span-->
                     </div>
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