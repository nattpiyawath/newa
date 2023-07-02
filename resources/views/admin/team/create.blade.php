@extends('template')
@section('title', 'Add Team')
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
               <h6 class="panel-title txt-dark">Team</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => 'team.store']) !!}
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
                                        @foreach($team as $pg)
                                        <option data-tokens="{{$pg->name}}" value="{{$pg->slug}}">{{$pg->name}}</option>
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
                                       <a class="btn btn-default btn-close" href="{{url('admin/team?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                        </div>
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Name</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="form-group @if($errors->has('name')) has-error @endif">
                                 <label class="control-label mb-10">Name</label>
                                 <input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" />
                                 @if ($errors->has('name'))
                                 <span class="help-block">{!! $errors->first('name') !!}</span>
                                 @endif
                              </div>
                           </div>
                    
                           <div class="col-md-4">

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
                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-picture-o" aria-hidden="true"></i> Media</h6>
                     <hr class="light-grey-hr">
                     <div class="row">
                        <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Thumbnail</label>
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                        </div>
                                                                    </div>
                        </div>
                        
                        <!--/span-->
                        <div class="col-md-8">
                             
                           <div class="modal fade in">
                              <div id="elfinder"></div>
                           </div>
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