@extends('template')

@section('title', 'Edit Spare Part Category' .$sparts_cate->sparts_cate)

@section('content')

<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 680px;left:0;}
    .category-main{margin-top: 10px;}
</style>


<div class="row category-main" >
      <div class="col-md-12">
            <div class="panel panel-default">

                  <div class="panel-heading">
                        <div class="pull-left">
                              <h6 class="panel-title txt-dark">Update Spare Part Category: {{$sparts_cate->sparts_cate}}</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>

                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
      	

                                                    {!! Form::open(['route' => ['spart_cate.update', $sparts_cate->id], 'method' => 'PATCh']) !!}
                                                		
                                                	{{ csrf_field() }}

                                                       <input type="hidden" name="lang_code" value="{{$lang}}">

                                                      <div class="col-md-9">   
                                                          <div class="form-group">
                                                          	<label class="control-label mb-10" for="name">Spare Part Category</label>
                                                          	<input type="text" name="sparts_cate" value="{{ $sparts_cate->sparts_cate }}" placeholder="Enter Spare Part Category" class="form-control">
                                                          </div>
                                                      </div> 
                                                      
                                                      
                                                      <div class="col-md-3">
                                                         <div class="form-group">
                                                            <label class="control-label mb-10" for="select-country">Translate Of </label>
                                                                <select class="form-control selectpicker" id="sparts_cate" data-live-search="true">
                                                                          
                                                                <option value="0">Select...</option>
                                                                @foreach($allsparts_cate as $pg)
                                                                <option <?= $sparts_cate->id==$pg->slug?'selected':''?> data-tokens="{{$pg->sparts_cate}}" value="{{$pg->id}}">{{$pg->sparts_cate}}</option>
                                                                @endforeach
                                                                </select>
                                                                <script type="text/javascript">
                                                                 $(function() {
                                                                 $('.selectpicker').selectpicker();
                                                                });
                                                                                                       
                                                                </script>

                                                         </div>
                                                      </div>
                                                      
                                                       <div class="row" style="padding: 0 15px;">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Image icon</label>
                                                                        <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                                        <div class="form-group">
                                                                            @php 
                                                                                $thumb = $sparts_cate->thumbnail;
                                                                            @endphp

                                                                            @if ($thumb != '')
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$sparts_cate->thumbnail}}"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{$sparts_cate->thumbnail}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                            @endif
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-8">
                                                                    

                                                                    <div class="modal fade in"><div id="elfinder"></div></div>

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

                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                      <div class="from-group">
                                                      	 <div class="text-right">
                                                      	 	<button class="btn btn-success" type="submit">Update Spare Part</button>
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

<script>
      //Add Active to admin menu
      $('#spart').attr('aria-expanded','true');
      $('#spart').parent().addClass('active');
      $('#spart').next().addClass('in');

</script>

@endsection