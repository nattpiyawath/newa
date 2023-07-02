@extends('template')
@section('Title', 'Create A Branch')
@section('content')
<style type="text/css">
   textarea.form-control {height: 80px;}
   .card-view {max-width: 1280px;margin: 0 auto;}
</style>
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Create A Branch</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => 'branchs.store']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" data-placeholder="Status" name="is_published">
                                       <option value="0" selected>Draft</option>
                                       <option value="1">Publish</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="select-country">Translate Of </label>
                                    <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">
                                       <option value="0">Select...</option>
                                        @foreach($branchs as $pg)

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
                              
                              <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="page-status">Types </label>
                                        <select class="form-control" id="page-status" data-placeholder="Status" name="type">
                                                
                                            <option value="1" selected>Dealer</option>
                                            <option value="2">Mini Dealer</option>  
                                                
                                        </select>
                                    </div>
                                </div>
                              
                              <!--/span-->
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;">
                                       <a class="btn btn-default btn-close" href="{{url('admin/branches?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                           <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Branch Information</h6>
                           <hr class="light-grey-hr">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="form-group @if($errors->has('title')) has-error @endif">
                                    <label class="control-label mb-10">Branch Name</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Branch Name" />
                                    @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label mb-10">City / Province</label>
                                    <select class="form-control selectpicker" data-live-search="true" data-placeholder="Choose City / Province" name="province">
                                        <?php $currentLocale = app()->getLocale();?>
                    <option value="" lat="" long=""><?php if($currentLocale == 'kh'){echo'ជ្រើសរើសទីតាំង';}else{echo 'Select Province';}?></option>
                    <option value="1" lat="13.7989147" long="102.8862666"><?php if($currentLocale == 'kh'){echo'បន្ទាយមានជ័យ';}else{echo 'Banteay Meanchey';}?></option>
                	<option value="2" lat="12.9256791" long="103.23171364"><?php if($currentLocale == 'kh'){echo'បាត់ដំបង';}else{echo 'Battambang';}?></option>
                	<option value="3" lat="12.00708458" long="105.37811279"><?php if($currentLocale == 'kh'){echo'កំពង់ចាម';}else{echo 'Kampong Cham';}?></option>
                	<option value="4" lat="12.24339151" long="104.71343994"><?php if($currentLocale == 'kh'){echo'កំពង់ឆ្នាំង';}else{echo 'Kampong Chhnang';}?></option>
                	<option value="5" lat="11.56748917" long="104.2691803"><?php if($currentLocale == 'kh'){echo'កំពង់ស្ពឺ';}else{echo 'Kampong Speu';}?></option>
                	<option value="6" lat="12.81715766" long="104.98397827"><?php if($currentLocale == 'kh'){echo'កំពង់ធំ';}else{echo 'Kampong Thom';}?></option>
                	<option value="7" lat="10.76579845" long="104.31350361"><?php if($currentLocale == 'kh'){echo'កំពត';}else{echo 'Kampot';}?></option>
                	<option value="8" lat="11.39459395" long="105.01840978"><?php if($currentLocale == 'kh'){echo'កណ្តាល';}else{echo 'Kandal';}?></option>
                	<option value="9" lat="11.36964612" long="103.23989868"><?php if($currentLocale == 'kh'){echo'កោះកុង';}else{echo 'Koh Kong';}?></option>
                	<option value="10" lat="12.6783017" long="106.0581733"><?php if($currentLocale == 'kh'){echo'ក្រចេះ';}else{echo 'Kratie';}?></option>
                	<option value="11" lat="10.4026321" long="104.26541726"><?php if($currentLocale == 'kh'){echo'ក្រុងកែប';}else{echo 'Krong Kep';}?></option>
                	<option value="12" lat="12.85515098" long="102.60915041"><?php if($currentLocale == 'kh'){echo'ក្រុងប៉ៃលិន';}else{echo 'Krong Pailin';}?></option>
                	<option value="13" lat="10.5045515" long="103.25784114"><?php if($currentLocale == 'kh'){echo'ក្រុងព្រះសីហនុ';}else{echo 'Krong Preah Sihanouk';}?></option>
                	<option value="14" lat="12.7396454" long="107.00882593"><?php if($currentLocale == 'kh'){echo'មណ្ឌលគីរី';}else{echo 'Mondul Kiri';}?></option>
                	<option value="15" lat="14.1585631" long="103.78279596"><?php if($currentLocale == 'kh'){echo'ឩត្តមានជ័យ';}else{echo 'Otdar Meanchey';}?></option>
                	<option value="16" lat="11.5730391" long="104.857807"><?php if($currentLocale == 'kh'){echo'ភ្នំពេញ';}else{echo 'Phnom Penh';}?></option>
                	<option value="17" lat="14.3989367" long="104.6758555"><?php if($currentLocale == 'kh'){echo'ព្រះវិហារ';}else{echo 'Preah Vihear';}?></option>
                	<option value="18" lat="11.4856226" long="105.3363606"><?php if($currentLocale == 'kh'){echo'ព្រៃវែង';}else{echo 'Prey Veng';}?></option>
                	<option value="19" lat="12.53311536" long="103.92242432"><?php if($currentLocale == 'kh'){echo'ពោធិ៍សាត់';}else{echo 'Pursat';}?></option>
                	<option value="20" lat="13.9311155" long="107.0391499"><?php if($currentLocale == 'kh'){echo'រតនៈគីរី';}else{echo 'Ratanak Kiri';}?></option>
                	<option value="21" lat="13.3719067" long="103.99265045"><?php if($currentLocale == 'kh'){echo'សៀមរាប';}else{echo 'Siem Reap';}?></option>
                	<option value="22" lat="13.852468" long="106.0889849"><?php if($currentLocale == 'kh'){echo'ស្ទឹងត្រែង';}else{echo 'Stung Treng';}?></option>
                	<option value="23" lat="11.080095" long="105.7974874"><?php if($currentLocale == 'kh'){echo'ស្វាយរៀង';}else{echo 'Svay Rieng';}?></option>
                	<option value="24" lat="10.93539205" long="104.789883"><?php if($currentLocale == 'kh'){echo'តាកែវ';}else{echo 'Takeo';}?></option>
                	<option value="25" lat="11.8891023" long="105.876004"><?php if($currentLocale == 'kh'){echo' ត្បូងឃ្មុំ ';}else{echo 'Tboung khmom';}?></option>

                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /Row -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('address')) has-error @endif">
                                 <label class="control-label mb-10">Address</label>
                                 {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                                 @if ($errors->has('address'))
                                 <span class="help-block">{!! $errors->first('address') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('number')) has-error @endif">
                                 <label class="control-label mb-10">Phone Number</label>
                                 {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                 @if ($errors->has('number'))
                                 <span class="help-block">{!! $errors->first('number') !!}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <!-- /Row -->
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('email')) has-error @endif">
                                 <label class="control-label mb-10">Email</label>
                                 {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                 @if ($errors->has('email'))
                                 <span class="help-block">{!! $errors->first('email') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('latitude')) has-error @endif">
                                 <label class="control-label mb-10">Latitude</label>
                                 {!! Form::text('latitude', null, ['class' => 'form-control', 'placeholder' => 'Latitude']) !!}
                                 @if ($errors->has('latitude'))
                                 <span class="help-block">{!! $errors->first('latitude') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('longitude')) has-error @endif">
                                 <label class="control-label mb-10">Longitude</label>
                                 {!! Form::text('longitude', null, ['class' => 'form-control', 'placeholder' => 'Longitude']) !!}
                                 @if ($errors->has('longitude'))
                                 <span class="help-block">{!! $errors->first('longitude') !!}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <!-- /Row -->
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