{!! Form::model($Milestones,['url' => 'admin/milestione/'.$Milestones->id, 'method'=>'PATCH']) !!}
<div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('description','Description')}}
                        {{Form::textarea('description',null,['class'=>'form-control'])}}
                </div>
         <div class="form-group">
                                                                        <label class="control-label mb-10">Thumbnail</label>
                                                                        <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                                        <div class="form-group">
                                                                            @php 
                                                                                $thumb = $Milestones->thumbnail;
                                                                            @endphp

                                                                            @if ($thumb != '')
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{$Milestones->thumbnail}}"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{$Milestones->thumbnail}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                            @endif
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                     <div class="modal fade in"><div id="elfinder"></div></div>

                                                                  
                <div class="form-group">
                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                </div>
                
            
                                                                  
{!! Form::close() !!}


    <script type="text/javascript">
                                                                    

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
