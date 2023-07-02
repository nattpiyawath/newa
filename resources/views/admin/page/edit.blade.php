@extends('template')

@section('title', 'Edit - '.$pages->title)

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

@if(isset($_GET['type']))
    <?php $type = $_GET['type'];?>
@else
    <?php $type = '';?>
@endif

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />


<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 1280px;margin: 0 auto;}
    .color-image{width:180px!important;height:42px;}
    button#addMore {
        position: absolute;
        top: 31%;
        right: 7%;
    }
    .form-group.close-x {
        margin-top: 10px;
    }
    img#cover-image {
        max-width: 100%;
        height: auto;
    }      
</style>

<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">{{$type}} Setting</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">

                                                    {!! Form::open(['route' => ['pages.update', $pages->id], 'method' => 'PATCh']) !!}

                                                        <input type="hidden" name="lang_code" value="{{$lang}}">

                                                        {{ csrf_field() }}

                                                        <div class="form-body">

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="page-status">Status</label>
                                                                        <select class="form-control" id="page-status2" data-placeholder="Status" name="is_published">
                                                                             
                                                                            @php 
                                                                                $status = $pages->is_published;
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
                                                                <div class="<?php if($type == 'product'){ echo 'col-md-3';}else{echo 'col-md-5';}?>"> 
                                                                    <div class="form-group">
                                                                    <label for="select-country">Translate Of </label>

                                                                    <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">
                                                                        <option value="0">Select...</option>
                                                                        @foreach($pagelang as $pg)
                                                                        <option <?= $pages->slug==$pg->slug?'selected':''?> data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <input type="hidden" name="type" value="{{$type}}"/>
                                                                
                                                                <?php if($type == 'product'){
                                                                    $model = $pages->model;
                                                                ?>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group" id="pro-model">
                                                                            <label for="page-status">Model</label>
                                                                            <select class="form-control" id="page-model" data-placeholder="Model" name="model">
                                                                                    <option <?php if($model == 'sedan'){echo 'selected';}?> value="sedan">SEDAN</option>
                                                                                    <option <?php if($model == 'suv'){echo 'selected';}?> value="suv">SUV</option>
                                                                                    
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php } else {echo '<input type="hidden" name="model" value="0"/>';}?>
                                                                
                                                                <script>
                                                                    jQuery(document).ready(function(){

                                                                        jQuery("#page-status").change(function() {
                                                                            var type = jQuery(this).children(":selected").attr("value");
                                                                            console.log(type);
                                                                            if (type == 'product'){
                                                                                $('#pro-model').fadeIn();
                                                                            } else {
                                                                                $('#pro-model').fadeOut();
                                                                            }
                                                                    
                                                                        });
                                                                    })
                                                                </script>

                                                                <div class="col-md-5">
                                                                    <div class="form-group">                    
                                                                        <div class="form-actions mt-10" style="text-align: right;padding-top: 10px;">
                                                                        <a target="_blank" class="btn btn-default btn-close" href="{{url('').'/'.$lang.'/'.$pages->slug}}"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                                                        <a class="btn btn-default btn-close" href="{{URL('/pagemanager')}}/pagebuilder?page={{ $pages->id }}&lang={{$lang}}"><i class="fa fa-columns" aria-hidden="true"></i> Layout</a>
                                                                        <a class="btn btn-default btn-close" href="{{url('admin/pages?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                                                        {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Information</h6>
                                                            <hr class="light-grey-hr">

                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group @if($errors->has('title')) has-error @endif">
                                                                        <label class="control-label mb-10">{{$type}} Title</label>
                                                                        {!! Form::text('title', $pages->title, ['class' => 'form-control', 'placeholder' => 'Title here']) !!}
                                                                        @if ($errors->has('title'))
                                                                            <span class="help-block">{!! $errors->first('title') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Choose Parent</label>
                                                                        <select class="form-control selectpicker" data-placeholder="Choose a Parent" data-live-search="true" name="parent">
                                                                            <option value="0">Select...</option>
                                                                            @foreach($page as $pg)
                                                                                <option <?= $pages->parent==$pg->id?'selected':''?> value="{{$pg->id}}">{{$pg->title}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- /Row -->
                                                            <div class="row">

                                                                <div class="col-md-8">
                                                                    <div class="form-group @if($errors->has('slug')) has-error @endif">
                                                                        <label class="control-label mb-10">Slug</label>
                                                                        {!! Form::text('slug', $pages->slug, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
                                                                        @if ($errors->has('slug'))
                                                                        <span class="help-block">{!! $errors->first('slug') !!}</span>
                                                                        @endif
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Choose Layout</label>
                                                                        <select class="form-control" name="layout">
                                                                            <option value="page" <?= $pages->layout=='page'?'selected':''?> >Simple Page</option>
                                                                            <option value="master" <?= $pages->layout=='master'?'selected':''?> >Master</option>
                                                                            <option value="event" <?= $pages->layout=='event'?'selected':''?> >Event</option>
                                                                            <option value="careers" <?= $pages->layout=='careers'?'selected':''?> >Careers</option>
                                                                            <option value="news" <?= $pages->layout=='news'?'selected':''?> >News</option>
                                                                            <option value="contact_ride_book" <?= $pages->layout=='contact_ride_book'?'selected':''?> >Book Drive</option>
                                                                            <option value="contact_us" <?= $pages->layout=='contact_us'?'selected':''?> >Contact Us</option>
                                                                            <option value="product" <?= $pages->layout=='product'?'selected':''?> >Product</option>
                                                                            <option value="single_product" <?= $pages->layout=='single_product'?'selected':''?> >Single Product</option>
                                                                            <option value="spare" <?= $pages->layout=='spare'?'selected':''?> >Spare Part</option>
                                                                            <option value="dealer" <?= $pages->layout=='dealer'?'selected':''?> >Dealer</option>
                                                                            <option value="single_news" <?= $pages->layout=='single_news'?'selected':''?> >Single News</option>
                                                                            <option value="single_event" <?= $pages->layout=='single_event'?'selected':''?> >Single Event</option>
                                                                            <option value="list_product" <?= $pages->layout=='list_product'?'selected':''?> >List All Model</option>
                                                                            <option value="safety" <?= $pages->layout=='safety'?'selected':''?> >Safety Riding</option>
                                                                            <option value="technology" <?= $pages->layout=='technology'?'selected':''?> >Technology</option>
                                                                            <option value="single_promotions" <?= $pages->layout=='single_promotions'?'selected':''?> >Single Promotions</option>
                                                                            <option value="promotions" <?= $pages->layout=='promotions'?'selected':''?> >Promotions</option>
                                                                            <option value="service_appointment" <?= $pages->layout=='service_appointment'?'selected':''?> >Service Appointment</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!-- /Row -->
                                                            
                                                            
                                                            <br>
                                                            
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
            															<label class="control-label mb-10">Created Date</label>
            															<div class="input-group date" id="datetimepicker1">
            																<input type="text" class="form-control" name="created_at" value="{{$pages->created_at}}">
            																<span class="input-group-addon">
            																	<span class="fa fa-calendar"></span>
            																</span>
            															</div>
            														</div>

                                                                </div>
                                                                
                                                                <input type="hidden" name="type" value="{{$type}}"/>
                                                                
                                                                <?php if($type == 'product'){
                                                                    $newmodel = $pages->newmodel;
                                                                ?>
 
                                                                <div class="col-md-4">
                                                                    <div class="form-group"> 
                                                                    
                                                                            <label class="control-label mb-10">New Model</label>
                                                                            <select class="form-control" id="page-model" data-placeholder="New Model" name="newmodel">
                                                                                
                                                                            @php 
                                                                                $new = $pages->newmodel;
                                                                            @endphp

                                                                            @if ($new == 1)
                                                                                <option value="1" selected>New</option>
                                                                                <option value="0">No</option>
                                                                            @else
                                                                                <option value="0" selected>No</option>
                                                                                <option value="1">New</option>
                                                                            @endif                                                                                

                                                                            </select>                                                                  
                                                                    
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group @if($errors->has('product_code')) has-error @endif">
                                                                        <label class="control-label mb-10">Product Code</label>
                                                                        <input type="text" class="form-control" id="model-code" name="product_code" value="{{$pages->product_code}}" placeholder="Code Here" />
                                                                        @if ($errors->has('product_code'))
                                                                            <span class="help-block">{!! $errors->first('product_code') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>                                                                 
                                                                
                                                                <?php } else {echo '<input type="hidden" name="newmodel" value="0"/>';}?> 

                                                            </div>
                                                            
                                                            
                                                            <br>
                                                            
                                                            <?php if($type == 'product'){?>
                                                            
                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-adjust" aria-hidden="true"></i> Color Chat</h6>
                                                            <hr class="light-grey-hr">
    
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div id="addRow">
                                                                    
                                                                            <div class="row">
                                                                                <div class="col-md-1">
                                                                                      <div class="form-group" style="margin-bottom:0;">
                                                                                        <label class="control-label mb-10">Order</label>
                                                                                      </div>
                                                                                  </div>
                                                                                  
                                                                                  <div class="col-md-2">
                                                                                      <div class="form-group" style="margin-bottom:0;">
                                                                                        <label class="control-label mb-10">Color Code</label>
                                                                                      </div>
                                                                                  </div>
                                                                                  
                                                                                  <div class="col-md-2">
                                                                                      <div class="form-group" style="margin-bottom:0;">
                                                                                        <label class="control-label mb-10">Related Color</label>
                                                                                      </div>
                                                                                  </div>
                
                                                                                  <div class="col-md-6">
                                                                                      <div class="form-group" style="margin-bottom:0;">
                                                                                          <label class="control-label mb-10">Color Image</label>
                                                                                      </div>
                                                                                  </div>
                                                                                  
                                                                                  <div class="col-md-1">
                                                                                      <div class="form-group" style="margin-bottom:0;">
                                                                                        
                                                                                      </div>
                                                                                  </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                            
                                                                                <?php if(!empty($pages->color)){
                                                                                  
                                                                                  foreach(json_decode($pages->color) as $index => $val){
                    
                                                                                  ?>
                    
                                                                                  @if($index == 0)
                                                              
            
                                                                                    <div class="row">
                                                                                        <div class="col-md-1">
                                                                                              <div class="form-group" style="margin-bottom:0;">
                                                                                                <input type="number" class="form-control" name="color_order[]" value="{{$val->color_order}}" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-2">
                                                                                              <div class="form-group">
                                                                                                    <input type="text" class="form-control" name="color_code[]" value="{{$val->color_code}}" placeholder="Enter Color Code" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-2">
                                                                                              <div class="form-group" style="margin-bottom:0;">
                                                                                                <input type="text" class="form-control" name="related_color[]" value="{{$val->related_color}}" placeholder="Enter Related Color Code" />
                                                                                              </div>
                                                                                          </div>
                        
                                                                                          <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                                              <div class="form-group">
                                                                                                    <img class="cover-image color-image" height="150" src="{{URL('').$myStorage.$val->image_url }}"/>
                                                                                                    <input type="hidden" id="feature_image" name="image_url[]" value="{{ $val->image_url }}" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-1">
                                                                                              <div class="form-group">
                                                                                                
                                                                                              </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    
                                                                                @else
                                                                                
                                                                                <div class="row delete_add_more_item" id="delete_add_more_item">
                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-1">
                                                                                              <div class="form-group" style="margin-bottom:0;">
                                                                                                <input type="number" class="form-control" name="color_order[]" value="{{$val->color_order}}" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-2">
                                                                                              <div class="form-group">
                                                                                                    <input type="text" class="form-control" name="color_code[]" value="{{$val->color_code}}" placeholder="Enter Color Code" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-2">
                                                                                              <div class="form-group" style="margin-bottom:0;">
                                                                                                <input type="text" class="form-control" name="related_color[]" value="{{$val->related_color}}" placeholder="Enter Related Color Code" />
                                                                                              </div>
                                                                                          </div>
                        
                                                                                          <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                                              <div class="form-group">
                                                                                                    <img class="cover-image color-image" height="150" src="{{URL('').$myStorage.$val->image_url }}"/>
                                                                                                    <input type="hidden" id="feature_image" name="image_url[]" value="{{ $val->image_url }}" />
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div class="col-md-1">
                                                                                                <div class="form-group close-x">
                                                                                                    <span class="removeaddmore" style="cursor:pointer;color:red;padding: 4px 10px;border-radius: 90%;border: solid 1px;"><i class="fa fa-times" aria-hidden="true"></i><span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                @endif
                                                                                
                                                                             <?php } } ?>
                                                                             
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                            <?php } else { echo '<input type="hidden" value="" name="color"/>';}?>
                                                            
                                                            <br>
                                                            
                                                            <div class="row">
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model Catalog</label> 
                                                                        
                                                                        <input type="text" class="form-control" id="model-catalog" name="catalog" value="{{$pages->catalog}}" placeholder="Model Catalog" />
                                                                        @if ($errors->has('catalog'))
                                                                            <span class="help-block">{!! $errors->first('catalog') !!}</span>
                                                                        @endif
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="catalog" value="1"/></div>';}?>                                                            
                                                            </div>
                                                            <br>
                                                            
                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-picture-o" aria-hidden="true"></i> Media</h6>
                                                            <hr class="light-grey-hr">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                        <label class="control-label mb-10">Thumbnail</label>
                                                                       
                                                                        <div class="form-group">
                                                                            @php 
                                                                                $thumb = $pages->thumbnail;
                                                                            @endphp

                                                                            @if ($thumb != '')
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$pages->thumbnail}}"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{$pages->thumbnail}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                            @endif
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Cover Image</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                            @php 
                                                                                $header_img = $pages->header_img;
                                                                            @endphp

                                                                            @if ($header_img != '')
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$pages->header_img}}"/>
                                                                                <input type="hidden" id="feature_image" name="header_img" value="{{$pages->header_img}}" />
                                                                            @else
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="header_img" value="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model KV</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                            @php 
                                                                                $model_kv = $pages->model_kv;
                                                                            @endphp

                                                                            @if ($model_kv != '')
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{URL('').$myStorage.$pages->model_kv}}"/>
                                                                                <input type="hidden" id="feature_image" name="model_kv" value="{{$pages->model_kv}}" />
                                                                            @else
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="model_kv" value="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="model_kv" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>
                                                                
                                                                
                                                                            <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model TVC (PC)</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                            @php 
                                                                                $model_tvc = $pages->model_tvc;
                                                                            @endphp

                                                                            @if ($model_tvc != '')
                                                                                <img class="cover-image" id="cover-image" height="150" alt="Video" src="{{URL('').$myStorage.$pages->model_tvc}}"/>
                                                                                <input type="hidden" id="feature_image" name="model_tvc" value="{{$pages->model_tvc}}" />
                                                                            @else
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="model_tvc" value="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="model_tvc" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>                                                                

                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model TVC (Mobile)</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                            @php 
                                                                                $mo_tvc = $pages->mo_tvc;
                                                                            @endphp

                                                                            @if ($mo_tvc != '')
                                                                                <img class="cover-image" id="cover-image" height="150" alt="Video" src="{{URL('').$myStorage.$pages->mo_tvc}}"/>
                                                                                <input type="hidden" id="feature_image" name="mo_tvc" value="{{$pages->mo_tvc}}" />
                                                                            @else
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="mo_tvc" value="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="mo_tvc" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>                                                    
                                                                
                                                                <!--/span-->
                                                            </div>
                                                            <!-- /Row -->
                                                            <br>

                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-list-alt" aria-hidden="true"></i> SEO</h6>
                                                            <hr class="light-grey-hr">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group @if($errors->has('meta_keywords')) has-error @endif">
                                                                        <label class="control-label mb-10">Meta Keywords</label>
                                                                        {!! Form::textarea('meta_keywords', $pages->meta_keywords, ['class' => 'form-control', 'placeholder' => 'Meta keywords']) !!}
                                                                        @if ($errors->has('meta_keywords'))
                                                                        <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-8">
                                                                    <div class="form-group @if($errors->has('meta_description')) has-error @endif">
                                                                        <label class="control-label mb-10">Meta Description</label>
                                                                        {!! Form::textarea('meta_description', $pages->meta_description, ['class' => 'form-control', 'placeholder' => 'Meta Description']) !!}
                                                                        @if ($errors->has('meta_description'))
                                                                            <span class="help-block">{!! $errors->first('meta_description') !!}</span>@endif
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                            <br>
                                                            <hr class="light-grey-hr">

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="panel panel-default card-view">
                                                                        <div class="panel-heading">
                                                                            <div class="pull-left">
                                                                                <h6 class="panel-title txt-dark"><i class="fa fa-code" aria-hidden="true"></i> Custom Code</h6>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div class="panel-wrapper collapse in">
                                                                            <div class="panel-body">
                                                                                <div class="panel-group accordion-struct" id="accordion_1" role="tablist" aria-multiselectable="true">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="heading_1">
                                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="false" class="collapsed">CSS</a> 
                                                                                        </div>
                                                                                        <div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                                                                            <div class="panel-body pa-15"> 
                                                                                            {!! Form::textarea('cus_css', $pages->cus_css, ['class' => 'form-control', 'placeholder' => 'CSS Code Here']) !!}
                                                                                             </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="heading_2">
                                                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="false">JS</a>
                                                                                        </div>
                                                                                        <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                                                                            <div class="panel-body pa-15">
                                                                                                {!! Form::textarea('cus_js', $pages->cus_js, ['class' => 'form-control', 'placeholder' => 'JS Code Here']) !!}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    {!! Form::close() !!}
                                                    
                                                    <?php if($type == 'product'){?><button id="addMore" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Color</button><?php }?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
</div>


<script>
$(function() {
    $('.selectpicker').selectpicker();
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 

<script id="document-template" type="text/x-handlebars-template">

<div class="row delete_add_more_item" id="delete_add_more_item">
    <div class="col-md-1">
        <div class="form-group" style="margin-bottom:0;">
            <input type="number" class="form-control" name="color_order[]" value="{{ old('color_order') }}" />
        </div>
    </div>
                                                                                  
    <div class="col-md-2">
        <div class="form-group">
            <input type="text" class="form-control" name="color_code[]" value="{{ old('color_code') }}" placeholder="Enter Color Code" />
        </div>
    </div>
                                                                                  
    <div class="col-md-2">
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" class="form-control" name="related_color[]" value="{{ old('related_color') }}" placeholder="Enter Related Color Code" />
        </div>
    </div>
                
    <div class="col-md-2">
        <div class="form-group image-item-upload" data-upateimage="feature_image">
            <img class="cover-image color-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
            <input type="hidden" id="feature_image" name="image_url[]" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
        </div>
    </div>
                                                                                  
    <div class="col-md-1">
        <div class="form-group close-x">
        <span class="removeaddmore" style="cursor:pointer;color:red;padding: 4px 10px;border-radius: 90%;border: solid 1px;"><i class="fa fa-times" aria-hidden="true"></i><span>
        </div>
    </div>
</div>

 </script>
 
 <script type="text/javascript">
 
 $(document).on('click','#addMore',function(){

     var image_url = $("#image_url").val();
     var image_title = $("#image_title").val();
     var image_caption = $("#image_caption").val();
     var source = $("#document-template").html();
     var template = Handlebars.compile(source);

     var data = {
        image_url: image_url,
        image_title: image_title,
        image_caption: image_caption
     }

     var html = template(data);
     $("#addRow").append(html)
 });

  $(document).on('click','.removeaddmore',function(event){
    $(this).closest('.delete_add_more_item').remove();
  });
                    
</script>



<div class="modal fade in"><button class="close-filemana">x</button><div id="elfinder"></div></div>



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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>

    var timer = moment().format("h:mm:ss");

      $("#datetimepicker1").datepicker({ 
           autoclose: true,
           todayHighlight: true,
           //2021-05-11 09:01:54
           format: 'yyyy-mm-dd ' + timer,
      });

</script>

@endsection