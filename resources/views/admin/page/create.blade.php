@if(isset($_GET['type']))
    <?php $type = $_GET['type'];?>
@else
    <?php $type = '';?>
@endif

@extends('template')

@section('title', 'Create A '.$type)

@section('content')


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
                                        <h6 class="panel-title txt-dark">Create A {{$type}}</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">

                                                        {!! Form::open(['route' => 'pages.store']) !!}

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
                                                                            @foreach($pages as $pg)
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
                                                                
                                                                <input type="hidden" name="type" value="{{$type}}"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-2">
                                                                    <div class="form-group" id="pro-model">
                                                                        <label for="page-status">Model</label>
                                                                        <select class="form-control" id="page-model" data-placeholder="Model" name="model">
                                                                                <option value="sedan" selected>SEDAN</option>
                                                                                <option value="suv">SUV</option>
                                                                                <!--<option value="sport">SPORT</option>-->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="model" value="0"/></div>';}?>
                                                                
                                                                <script>
                                                                    jQuery(document).ready(function(){

                                                                        jQuery("#page-status").change(function() {
                                                                            var type = jQuery(this).children(":selected").attr("value");
                                                                            if (type == 'product'){
                                                                                $('#pro-model').fadeIn();
                                                                            } else {
                                                                                $('#pro-model').fadeOut();
                                                                            }
                                                                    
                                                                        });
                                                                    })
                                                                </script>
                                                                
                                                                <!--/span-->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <div class="form-actions mt-10" style="text-align: right;">
                                                                        <a class="btn btn-default btn-close" href="{{url('admin/pages?lang='.$lang.'&type='.$type)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
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
                                                                        <label class="control-label mb-10">Post Title</label>

                                                                        <input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title Here" />

                                                                        @if ($errors->has('title'))
                                                                            <span class="help-block">{!! $errors->first('title') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Parent</label>
                                                                        <select class="form-control selectpicker" data-placeholder="Choose a Parent" data-live-search="true"  name="parent">
                                                                            <option value="0">Select...</option>
                                                                            @foreach($pagelang as $pages)
                                                                                <option value="{{$pages->id}}">{{$pages->title}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            </div>
                                                            <!-- /Row -->
                                                            
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
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Layout</label>
                                                                        <select class="form-control" name="layout">
                                                                            <option value="page" selected>Page</option>
                                                                            <option value="master">Master</option>
                                                                            <option value="event">Event</option>
                                                                            <option value="careers">Careers</option>
                                                                            <option value="promotions">Promotions</option>
                                                                            <option value="promotions">News</option>
                                                                            <option value="contact_ride_book">Book Drive</option>
                                                                            <option value="contact_us">Contact Us</option>
                                                                            <option value="product">Product</option>
                                                                            <option value="single_product">Single Product</option>
                                                                            <option value="spare">Spare Part</option>
                                                                            <option value="dealer">Dealer</option>
                                                                            <option value="single_news">Single News</option>
                                                                            <option value="single_event">Single Event</option>
                                                                            <option value="list_product">List All Model</option>
                                                                            <option value="safety">Safety Riding</option>
                                                                            <option value="service_appointment">Service Appointment</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!-- /Row -->
                                                            <br>
                                                            
                                                            <!--If New Model-->
                                                        
                                                            <div class="row">
                                                        
                                                                <input type="hidden" name="type" value="{{$type}}"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-sm-8">
                                                                  <div class="form-group">
                                                                        <label class="control-label mb-10">New Model</label>
                                                                        <select class="form-control" data-placeholder="New Model" name="newmodel">
                                                                           <option value="0" selected>No</option>
                                                                           <option value="1">New</option>
                                                                        </select>
                                                                  </div>
                                                                </div>
                                                                
                                                            <div class="col-md-4">
                                                                    <div class="form-group @if($errors->has('product_code')) has-error @endif">
                                                                        <label class="control-label mb-10">Product Code</label>
                                                                        <input type="text" class="form-control" id="model-code" name="product_code" value="{{old('product_code')}}" placeholder="Code Here" />
                                                                        @if ($errors->has('product_code'))
                                                                            <span class="help-block">{!! $errors->first('product_code') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>                                                                 
                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="newmodel" value="0"/></div>';}?>                                                            
                                                            </div>
                                                            </br>
                                                            <!--End If New-->
                                                            
                                                            <?php if($type == 'product'){?>
                                                            
                                                            <div id="product-colors">
                                                            
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
            
                                                                            <div class="row">
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
                
                                                                                  <div class="col-md-2 image-item-upload" data-upateimage="feature_image">
                                                                                      <div class="form-group">
                                                                                            <img class="cover-image color-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                            <input type="hidden" id="feature_image" name="image_url[]" value="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg" />
                                                                                      </div>
                                                                                  </div>
                                                                                  
                                                                                  <div class="col-md-1">
                                                                                      <div class="form-group">
                                                                                        
                                                                                      </div>
                                                                                  </div>
                                                                            </div>
                                                                        </div>
                                                                    <div>
                                                            </div>
                                                            <input type="hidden" value="1" name="color"/>
                                                             <?php } else { echo '<input type="hidden" value="" name="color"/>';}?>
                                                            
                                                            <br>
                                                            
                                                            <div class="row">
                                                            
                                                                <input type="hidden" value="1" name="catalog"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model Catalog</label> 
                                                                        <input type="text" class="form-control" id="model-catalog" name="catalog" value="{{old('catalog')}}" placeholder="Model Catalog" />
                                                                        @if ($errors->has('catalog'))
                                                                            <span class="help-block">{!! $errors->first('catalog') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="catalog" value="1"/></div>';}?>                                                            
                                                            
                                                            </div>
                                                            
                                                            <br>
                                                            
                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-picture-o" aria-hidden="true"></i> Post Media</h6>
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
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Cover Image</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="header_img" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <input type="hidden" value="1" name="model_kv"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model KV</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="model_kv" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="model_kv" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>
                                                                
                                                                <!--/span-->
                                                            </div>
                                                            
                                                            <div class="row">
                                                                
                                                                <input type="hidden" value="1" name="model_tvc"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model TVC (PC)</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="model_tvc" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="model_tvc" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>                                                                  
                                                                
                                                                
                                                                <input type="hidden" value="1" name="mo_tvc"/>
                                                                
                                                                <?php if($type == 'product'){?>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Model TVC (Mobile)</label> 
                                                                        
                                                                        <div class="form-group image-item-upload" data-upateimage="feature_image">
                                                                                <img class="cover-image" id="cover-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                                                                <input type="hidden" id="feature_image" name="mo_tvc" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <?php }else {echo '<div class="col-md-2"><input type="hidden" name="mo_tvc" value="{{ URL("assets/pagebuilder/images") }}/cover-1920x400.jpg"/></div>';}?>                                                                  
                                                                
                                                            </div>                                                            
                                                            
                                                            <!-- /Row -->
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
                                                            <!-- /Row -->

                                                                </div>
                                                            </div>

                                                            <br>
                                                            <h6 class="txt-dark capitalize-font">
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
                                                                                        {!! Form::textarea('cus_css', null, ['class' => 'form-control', 'placeholder' => 'CSS Code Here']) !!}
                                                                                         </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab" id="heading_2">
                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="false">JS</a>
                                                                                    </div>
                                                                                    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                                                                        <div class="panel-body pa-15">
                                                                                            {!! Form::textarea('cus_js', null, ['class' => 'form-control', 'placeholder' => 'JS Code Here']) !!}
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


@endsection
