@extends('template')
@section('title', 'Edit Branch')
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
</style>
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default card-view">
         <div class="panel-heading">
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Setting</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => ['branchs.update', $branchs->id], 'method' => 'PATCh']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        {{ csrf_field() }}
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" id="page-status" data-placeholder="Status" name="is_published">
                                       @php 
                                       $status = $branchs->is_published;
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
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="select-country">Translate Of </label>
                                    <select class="form-control selectpicker" id="select-merchant" data-live-search="true">
          
                                       <option value="0">Select...</option>
                                       @foreach($branchslang as $pg)
                                       <option <?= $branchs->slug==$pg->slug?'selected':''?> data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <!--/span-->
                              
                              <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="page-status">Type</label>
                                            <select class="form-control" id="page-status" data-placeholder="Status" name="type">
                                                <option value="0" <?= $branchs->type=='0'?'selected':''?> >Select...</option>                             
                                                <option value="1" <?= $branchs->type=='1'?'selected':''?> >Dealer</option>
                                                <option value="2" <?= $branchs->type=='2'?'selected':''?> >Mini Dealer</option>
                                                                             
                                            </select>
                                                                    </div>
                              </div>
                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;padding-top: 10px;">
                                       <a class="btn btn-default btn-close" href="{{url('admin/branchs?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
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
                                    {!! Form::text('title', $branchs->title, ['class' => 'form-control', 'placeholder' => 'Branch Name']) !!}
                                    @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label mb-10">City / Province</label>
                                    <select class="form-control selectpicker" data-placeholder="Choose City / Province" data-live-search="true" name="province">
                                         <?php $currentLocale = app()->getLocale();?>
                    <option value="" lat="" long=""><?php if($currentLocale == 'kh'){echo'ជ្រើសរើសទីតាំង';}else{echo 'Select Province';}?></option>
                    <option value="1" <?php if($branchs->province == 1){echo 'selected';} ?> lat="13.7989147" long="102.8862666"><?php if($currentLocale == 'kh'){echo'បន្ទាយមានជ័យ';}else{echo 'Banteay Meanchey';}?></option>
                	<option value="2" <?php if($branchs->province == 2){echo 'selected';} ?> lat="12.9256791" long="103.23171364"><?php if($currentLocale == 'kh'){echo'បាត់ដំបង';}else{echo 'Battambang';}?></option>
                	<option value="3" <?php if($branchs->province == 3){echo 'selected';} ?> lat="12.00708458" long="105.37811279"><?php if($currentLocale == 'kh'){echo'កំពង់ចាម';}else{echo 'Kampong Cham';}?></option>
                	<option value="4" <?php if($branchs->province == 4){echo 'selected';} ?> lat="12.24339151" long="104.71343994"><?php if($currentLocale == 'kh'){echo'កំពង់ឆ្នាំង';}else{echo 'Kampong Chhnang';}?></option>
                	<option value="5" <?php if($branchs->province == 5){echo 'selected';} ?> lat="11.56748917" long="104.2691803"><?php if($currentLocale == 'kh'){echo'កំពង់ស្ពឺ';}else{echo 'Kampong Speu';}?></option>
                	<option value="6" <?php if($branchs->province == 6){echo 'selected';} ?> lat="12.81715766" long="104.98397827"><?php if($currentLocale == 'kh'){echo'កំពង់ធំ';}else{echo 'Kampong Thom';}?></option>
                	<option value="7" <?php if($branchs->province == 7){echo 'selected';} ?> lat="10.76579845" long="104.31350361"><?php if($currentLocale == 'kh'){echo'កំពត';}else{echo 'Kampot';}?></option>
                	<option value="8" <?php if($branchs->province == 8){echo 'selected';} ?> lat="11.39459395" long="105.01840978"><?php if($currentLocale == 'kh'){echo'កណ្តាល';}else{echo 'Kandal';}?></option>
                	<option value="9" <?php if($branchs->province == 9){echo 'selected';} ?> lat="11.36964612" long="103.23989868"><?php if($currentLocale == 'kh'){echo'កោះកុង';}else{echo 'Koh Kong';}?></option>
                	<option value="10" <?php if($branchs->province == 10){echo 'selected';} ?> lat="12.6783017" long="106.0581733"><?php if($currentLocale == 'kh'){echo'ក្រចេះ';}else{echo 'Kratie';}?></option>
                	<option value="11" <?php if($branchs->province == 11){echo 'selected';} ?> lat="10.4026321" long="104.26541726"><?php if($currentLocale == 'kh'){echo'ក្រុងកែប';}else{echo 'Krong Kep';}?></option>
                	<option value="12" <?php if($branchs->province == 12){echo 'selected';} ?> lat="12.85515098" long="102.60915041"><?php if($currentLocale == 'kh'){echo'ក្រុងប៉ៃលិន';}else{echo 'Krong Pailin';}?></option>
                	<option value="13" <?php if($branchs->province == 13){echo 'selected';} ?> lat="10.5045515" long="103.25784114"><?php if($currentLocale == 'kh'){echo'ក្រុងព្រះសីហនុ';}else{echo 'Krong Preah Sihanouk';}?></option>
                	<option value="14" <?php if($branchs->province == 14){echo 'selected';} ?> lat="12.7396454" long="107.00882593"><?php if($currentLocale == 'kh'){echo'មណ្ឌលគីរី';}else{echo 'Mondul Kiri';}?></option>
                	<option value="15" <?php if($branchs->province == 15){echo 'selected';} ?> lat="14.1585631" long="103.78279596"><?php if($currentLocale == 'kh'){echo'ឩត្តមានជ័យ';}else{echo 'Otdar Meanchey';}?></option>
                	<option value="16" <?php if($branchs->province == 16){echo 'selected';} ?> lat="11.5730391" long="104.857807"><?php if($currentLocale == 'kh'){echo'ភ្នំពេញ';}else{echo 'Phnom Penh';}?></option>
                	<option value="17" <?php if($branchs->province == 17){echo 'selected';} ?> lat="14.3989367" long="104.6758555"><?php if($currentLocale == 'kh'){echo'ព្រះវិហារ';}else{echo 'Preah Vihear';}?></option>
                	<option value="18" <?php if($branchs->province == 18){echo 'selected';} ?> lat="11.4856226" long="105.3363606"><?php if($currentLocale == 'kh'){echo'ព្រៃវែង';}else{echo 'Prey Veng';}?></option>
                	<option value="19" <?php if($branchs->province == 19){echo 'selected';} ?> lat="12.53311536" long="103.92242432"><?php if($currentLocale == 'kh'){echo'ពោធិ៍សាត់';}else{echo 'Pursat';}?></option>
                	<option value="20" <?php if($branchs->province == 20){echo 'selected';} ?> lat="13.9311155" long="107.0391499"><?php if($currentLocale == 'kh'){echo'រតនៈគីរី';}else{echo 'Ratanak Kiri';}?></option>
                	<option value="21" <?php if($branchs->province == 21){echo 'selected';} ?> lat="13.3719067" long="103.99265045"><?php if($currentLocale == 'kh'){echo'សៀមរាប';}else{echo 'Siem Reap';}?></option>
                	<option value="22" <?php if($branchs->province == 22){echo 'selected';} ?> lat="13.852468" long="106.0889849"><?php if($currentLocale == 'kh'){echo'ស្ទឹងត្រែង';}else{echo 'Stung Treng';}?></option>
                	<option value="23" <?php if($branchs->province == 23){echo 'selected';} ?> lat="11.080095" long="105.7974874"><?php if($currentLocale == 'kh'){echo'ស្វាយរៀង';}else{echo 'Svay Rieng';}?></option>
                	<option value="24" <?php if($branchs->province == 24){echo 'selected';} ?> lat="10.93539205" long="104.789883"><?php if($currentLocale == 'kh'){echo'តាកែវ';}else{echo 'Takeo';}?></option>
                	<option value="25" <?php if($branchs->province == 25){echo 'selected';} ?> lat="11.8891023" long="105.876004"><?php if($currentLocale == 'kh'){echo' ត្បូងឃ្មុំ ';}else{echo 'Tboung khmom';}?></option>

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
                                 {!! Form::text('address', $branchs->address, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                                 @if ($errors->has('address'))
                                 <span class="help-block">{!! $errors->first('address') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('number')) has-error @endif">
                                 <label class="control-label mb-10">Phone Number</label>
                                 {!! Form::text('number', $branchs->number, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                 @if ($errors->has('number'))
                                 <span class="help-block">{!! $errors->first('number') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!-- /Row -->
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('email')) has-error @endif">
                                 <label class="control-label mb-10">Email</label>
                                 {!! Form::text('email', $branchs->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                 @if ($errors->has('email'))
                                 <span class="help-block">{!! $errors->first('email') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('latitude')) has-error @endif">
                                 <label class="control-label mb-10">Latitude</label>
                                 {!! Form::text('latitude', $branchs->latitude, ['class' => 'form-control', 'placeholder' => 'Latitude']) !!}
                                 @if ($errors->has('latitude'))
                                 <span class="help-block">{!! $errors->first('latitude') !!}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('longitude')) has-error @endif">
                                 <label class="control-label mb-10">Longitude</label>
                                 {!! Form::text('longitude', $branchs->longitude, ['class' => 'form-control', 'placeholder' => 'Longitude']) !!}
                                 @if ($errors->has('longitude'))
                                 <span class="help-block">{!! $errors->first('longitude') !!}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label mb-10">Thumbnail</label>
                                 <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                 <div class="form-group">
                                    @php 
                                    $thumb = $branchs->thumbnail;
                                    @endphp
                                    @if ($thumb != '')
                                    <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$branchs->thumbnail}}"/>
                                    <input type="hidden" id="feature_image2" name="thumbnail" value="{{$branchs->thumbnail}}" />
                                    @else
                                    <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                    <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                    @endif
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