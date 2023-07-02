@extends('template')
@section('title', 'Add Spare Part')
@section('content')
<style type="text/css">
   textarea.form-control {height: 80px;}
   .card-view {max-width: 1280px;margin: 0 auto;}
   .ck-editor__editable {min-height: 200px;}
   .checkbox input[type="checkbox"]{opacity: 1;position: unset;margin-left: 0;}
</style>

<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Spare Part</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => 'spart.store']) !!}
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
                                        @foreach($sparts as $pg)
                                        <option data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
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
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Spare Part</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="form-group @if($errors->has('title')) has-error @endif">
                                 <label class="control-label mb-10">Title</label>
                                 <input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="title" value="{{ old('title') }}" placeholder="Spare Part's Title" />
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

                                    <option value="{{$sparts_cate->id}}">{{$sparts_cate->sparts_cate}}</option>

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
                        <div class="col-md-4">
                            
                              <div class="form-group @if($errors->has('sprice')) has-error @endif">
                                 <label class="control-label mb-10">Spare Part Price</label>
                                 <input type="text" class="form-control" name="sprice" placeholder="Price" />
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
                     <hr class="light-grey-hr">

                     <div class="row">
                     <div class="col-md-12">
                     <div class="form-group @if($errors->has('details')) has-error @endif">
                               <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                                    <label class="control-label mb-10">Description</label>
                                        <textarea id="editor" class="ckeditor form-control" name="details"></textarea>
                                            <script>
                                                 ClassicEditor
                                                 .create( document.querySelector( '#editor' ) )
                                                  .then( editor => {
                                                        console.log( editor );
                                                       editor.ui.view.editable.element.style.height = '200px';
                                                        } )
                                                     .catch( error => {
                                                        console.error( error );
                                                    } );
                                             </script>
                            </div> 
                        </div>
                           <!--/span-->
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion1')) has-error @endif">
                                 <input type="text" class="form-control" name="title_accordion1" placeholder="Accordion Title" />
                                 @if ($errors->has('title_accordion1'))
                                 <span class="help-block">{!! $errors->first('title_accordion1') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description1')) has-error @endif">
                              <div class="form-group">
                                 
                                 <input type="text" class="form-control" name="accordion_description1" placeholder="Accordion Description" />
                                 @if ($errors->has('accordion_description1'))
                                 <span class="help-block">{!! $errors->first('accordion_description1') !!}</span>
                                 @endif
                              </div>
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion2')) has-error @endif">
                                 <input type="text" class="form-control" name="title_accordion2" placeholder="Accordion Title" />
                                 @if ($errors->has('title_accordion2'))
                                 <span class="help-block">{!! $errors->first('title_accordion2') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description2')) has-error @endif">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="accordion_description2" placeholder="Accordion Description" />
                                 @if ($errors->has('accordion_description2'))
                                 <span class="help-block">{!! $errors->first('accordion_description2') !!}</span>
                                 @endif
                              </div>
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion3')) has-error @endif">
                                 <input type="text" class="form-control" name="title_accordion3" placeholder="Accordion Title" />
                                 @if ($errors->has('title_accordion3'))
                                 <span class="help-block">{!! $errors->first('title_accordion3') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description3')) has-error @endif">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="accordion_description3" placeholder="Accordion Description" />
                                 @if ($errors->has('accordion_description3'))
                                 <span class="help-block">{!! $errors->first('accordion_description3') !!}</span>
                                 @endif
                              </div>
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion4')) has-error @endif">
                                 <input type="text" class="form-control" name="title_accordion4" placeholder="Accordion Title" />
                                 @if ($errors->has('title_accordion4'))
                                 <span class="help-block">{!! $errors->first('title_accordion4') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description4')) has-error @endif">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="accordion_description4" placeholder="Accordion Description" />
                                 @if ($errors->has('accordion_description4'))
                                 <span class="help-block">{!! $errors->first('accordion_description4') !!}</span>
                                 @endif
                              </div>
                           </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('title_accordion5')) has-error @endif">
                                 <input type="text" class="form-control" name="title_accordion5" placeholder="Accordion Title" />
                                 @if ($errors->has('title_accordion5'))
                                 <span class="help-block">{!! $errors->first('title_accordion5') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-8 @if($errors->has('accordion_description5')) has-error @endif">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="accordion_description5" placeholder="Accordion Description" />
                                 @if ($errors->has('accordion_description5'))
                                 <span class="help-block">{!! $errors->first('accordion_description5') !!}</span>
                                 @endif
                              </div>
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