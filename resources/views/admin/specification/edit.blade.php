@extends('template')
@section('title', 'Edit - '.$specification->title)
@section('content')
<style type="text/css">
   textarea.form-control {height: 80px;}
   .card-view {max-width: 1280px;margin: 0 auto;}
   .ck-editor__editable {min-height: 200px;}
   .checkbox input[type="checkbox"]{opacity: 1;position: unset;margin-left: 0;}
</style>

@php
$lang = 'en';
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
}
@endphp

@php
$myStorage = '/storage/app/uploads/';
@endphp

<div class="row">
   <div class="col-md-12">
       
      <div class="panel panel-default card-view">
          
         <div class="panel-heading">
             
            <div class="pull-left">
               <h6 class="panel-title txt-dark">Edit Specification</h6>
            </div>
            
            <div class="clearfix"></div>
            
         </div>
         
         <div class="panel-wrapper collapse in">
             
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                      
                     <div class="form-wrap">
                     {!! Form::open(['route' => ['specification.update', $specification->id], 'method' => 'PATCh']) !!}
                        <input type="hidden" name="lang_code" value="{{$lang}}">
                        
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label for="page-status">Status</label>
                                    <select class="form-control" data-placeholder="Status" name="is_published">
                                       @php 
                                       $status = $specification->is_published;
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
                                        <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">
                                            <option value="0">Select...</option>
                                                @foreach($specification_lang as $pg)
                                            <option <?= $specification->name==$pg->name?'selected':''?> data-tokens="{{$pg->name}}" value="{{$pg->translate_id}}">{{$pg->name}}</option>
                                                @endforeach
                                        </select>
                                    <script>
                                    $(function() {
                                        $('.selectpicker').selectpicker();
                                    });
                                    </script>
                                 </div>
                              </div>

    <?php
        //print_r($pages);
    ?>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Select Page</label>
                                    <select class="form-control selectpicker" data-live-search="true" data-placeholder="Select Page" name="page_id">
                                        
                                        <option value="0">Select...</option>
                                       @foreach($pages as $pages)
                                       <option value="{{$pages->id}}"
                                       @if ($specification->page_id == $pages->id)
                                       selected 
                                       @endif
                                       > {{$pages->title}}</option>
                                       @endforeach 

                                    </select>

                                </div>
                              </div>

                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="form-actions mt-10" style="text-align: right;">
                                       <a class="btn btn-default btn-close" href="{{url('admin/specification?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                       {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                    </div>
                                 </div>
                              </div>
                              <!--/span-->
                           </div>
                        </div>
                        
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i>Car Model</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group @if($errors->has('name')) has-error @endif">
                                 <label class="control-label mb-10">Model Name</label>
                                    {!! Form::text('name', $specification->name, ['class' => 'form-control', 'placeholder' => 'Model Name']) !!}
                                    @if ($errors->has('name'))
                                    <span class="help-block">{!! $errors->first('name') !!}</span>
                                    @endif
                              </div>
                           </div>
                        </div>
                     </div>

                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Dimensions & Weight</h6>
                     <hr class="light-grey-hr">
                     <div class="row">
                         
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('lwh')) has-error @endif">
                                 <label class="control-label mb-10">Length, Width, Height (mm)</label>
                                    {!! Form::text('lwh', $specification->lwh, ['class' => 'form-control', 'placeholder' => 'Length, Width, Height (mm)']) !!}
                                    @if ($errors->has('lwh'))
                                    <span class="help-block">{!! $errors->first('lwh') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('wheelbase')) has-error @endif">
                                 <label class="control-label mb-10">Wheelbase (mm)</label>
                                    {!! Form::text('wheelbase', $specification->wheelbase, ['class' => 'form-control', 'placeholder' => 'Wheelbase (mm)']) !!}
                                    @if ($errors->has('wheelbase'))
                                    <span class="help-block">{!! $errors->first('wheelbase') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ground')) has-error @endif">
                                 <label class="control-label mb-10">Ground Clearance (mm)</label>
                                    {!! Form::text('ground', $specification->ground, ['class' => 'form-control', 'placeholder' => 'Ground Clearance (mm)']) !!}
                                    @if ($errors->has('ground'))
                                    <span class="help-block">{!! $errors->first('ground') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('curb')) has-error @endif">
                                 <label class="control-label mb-10">Curb Weight (kg)</label>
                                    {!! Form::text('curb', $specification->curb, ['class' => 'form-control', 'placeholder' => 'Curb Weight (kg)']) !!}
                                    @if ($errors->has('curb'))
                                    <span class="help-block">{!! $errors->first('curb') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seating')) has-error @endif">
                                 <label class="control-label mb-10">Seating Capacity (Persons)</label>
                                    {!! Form::text('seating', $specification->seating, ['class' => 'form-control', 'placeholder' => 'Seating Capacity (Persons)']) !!}
                                    @if ($errors->has('seating'))
                                    <span class="help-block">{!! $errors->first('seating') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trunk')) has-error @endif">
                                 <label class="control-label mb-10">Trunk Capacity (Liters)</label>
                                    {!! Form::text('trunk', $specification->trunk, ['class' => 'form-control', 'placeholder' => 'Trunk Capacity (Liters)']) !!}
                                    @if ($errors->has('trunk'))
                                    <span class="help-block">{!! $errors->first('trunk') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('turning')) has-error @endif">
                                 <label class="control-label mb-10">Turning Radius (m)</label>
                                    {!! Form::text('turning', $specification->turning, ['class' => 'form-control', 'placeholder' => 'Turning Radius (m)']) !!}
                                    @if ($errors->has('turning'))
                                    <span class="help-block">{!! $errors->first('turning') !!}</span>
                                    @endif
                              </div>
                           </div>

                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Engine & Transmission</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('type')) has-error @endif">
                                 <label class="control-label mb-10">Type</label>
                                    {!! Form::text('type', $specification->type, ['class' => 'form-control', 'placeholder' => 'Type']) !!}
                                    @if ($errors->has('type'))
                                    <span class="help-block">{!! $errors->first('type') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fss')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Supply System</label>
                                    {!! Form::text('fss', $specification->fss, ['class' => 'form-control', 'placeholder' => 'Fuel Supply System']) !!}
                                    @if ($errors->has('fss'))
                                    <span class="help-block">{!! $errors->first('fss') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('engine_dis')) has-error @endif">
                                 <label class="control-label mb-10">Engine Displacement (cc)</label>
                                    {!! Form::text('engine_dis', $specification->engine_dis, ['class' => 'form-control', 'placeholder' => 'Engine Displacement (cc)']) !!}
                                    @if ($errors->has('engine_dis'))
                                    <span class="help-block">{!! $errors->first('engine_dis') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('max_power')) has-error @endif">
                                 <label class="control-label mb-10">Max. Power kW (ps) / rpm</label>
                                    {!! Form::text('max_power', $specification->max_power, ['class' => 'form-control', 'placeholder' => 'Max. Power kW (ps) / rpm']) !!}
                                    @if ($errors->has('max_power'))
                                    <span class="help-block">{!! $errors->first('max_power') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('max_tor')) has-error @endif">
                                 <label class="control-label mb-10">Max. Torque N-m (kg-m) / rpm</label>
                                    {!! Form::text('max_tor', $specification->max_tor, ['class' => 'form-control', 'placeholder' => 'Max. Torque N-m (kg-m) / rpm']) !!}
                                    @if ($errors->has('max_tor'))
                                    <span class="help-block">{!! $errors->first('max_tor') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bore_stroke')) has-error @endif">
                                 <label class="control-label mb-10">Bore & Stroke(mm)</label>
                                    {!! Form::text('bore_stroke', $specification->bore_stroke, ['class' => 'form-control', 'placeholder' => 'Bore & Stroke(mm)']) !!}
                                    @if ($errors->has('bore_stroke'))
                                    <span class="help-block">{!! $errors->first('bore_stroke') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('compression')) has-error @endif">
                                 <label class="control-label mb-10">Compression</label>
                                    {!! Form::text('compression', $specification->compression, ['class' => 'form-control', 'placeholder' => 'Compression']) !!}
                                    @if ($errors->has('compression'))
                                    <span class="help-block">{!! $errors->first('compression') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('drive_wire')) has-error @endif">
                                 <label class="control-label mb-10">Drive-by-Wire</label>
                                    {!! Form::text('drive_wire', $specification->drive_wire, ['class' => 'form-control', 'placeholder' => 'Drive-by-Wire']) !!}
                                    @if ($errors->has('drive_wire'))
                                    <span class="help-block">{!! $errors->first('drive_wire') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('transmission')) has-error @endif">
                                 <label class="control-label mb-10">Transmission</label>
                                    {!! Form::text('transmission', $specification->transmission, ['class' => 'form-control', 'placeholder' => 'Transmission']) !!}
                                    @if ($errors->has('transmission'))
                                    <span class="help-block">{!! $errors->first('transmission') !!}</span>
                                    @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('paddle_shift')) has-error @endif">
                                 <label class="control-label mb-10">Paddle Shifters</label>
                                    {!! Form::text('paddle_shift', $specification->paddle_shift, ['class' => 'form-control', 'placeholder' => 'Paddle Shifters']) !!}
                                    @if ($errors->has('paddle_shift'))
                                    <span class="help-block">{!! $errors->first('paddle_shift') !!}</span>
                                    @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fuel_tank')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Tank Capacity (li)</label>
                                    {!! Form::text('fuel_tank', $specification->fuel_tank, ['class' => 'form-control', 'placeholder' => 'Fuel Tank Capacity (li)']) !!}
                                    @if ($errors->has('fuel_tank'))
                                    <span class="help-block">{!! $errors->first('fuel_tank') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('emission')) has-error @endif">
                                 <label class="control-label mb-10">Emission Rating</label>
                                    {!! Form::text('emission', $specification->emission, ['class' => 'form-control', 'placeholder' => 'Emission Rating']) !!}
                                    @if ($errors->has('emission'))
                                    <span class="help-block">{!! $errors->first('emission') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('recommended')) has-error @endif">
                                 <label class="control-label mb-10">Recommended Fuel</label>
                                    {!! Form::text('recommended', $specification->recommended, ['class' => 'form-control', 'placeholder' => 'Recommended Fuel']) !!}
                                    @if ($errors->has('recommended'))
                                    <span class="help-block">{!! $errors->first('recommended') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('drive_sys')) has-error @endif">
                                 <label class="control-label mb-10">Drive System</label>
                                    {!! Form::text('drive_sys', $specification->drive_sys, ['class' => 'form-control', 'placeholder' => 'Drive System']) !!}
                                    @if ($errors->has('drive_sys'))
                                    <span class="help-block">{!! $errors->first('drive_sys') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('remote_engine')) has-error @endif">
                                 <label class="control-label mb-10">Remote Engine Start</label>
                                    {!! Form::text('remote_engine', $specification->remote_engine, ['class' => 'form-control', 'placeholder' => 'Remote Engine Start']) !!}
                                    @if ($errors->has('remote_engine'))
                                    <span class="help-block">{!! $errors->first('remote_engine') !!}</span>
                                    @endif
                              </div>
                           </div>                           

                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Steering</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('gear_type')) has-error @endif">
                                 <label class="control-label mb-10">Gear Type</label>
                                    {!! Form::text('gear_type', $specification->gear_type, ['class' => 'form-control', 'placeholder' => 'Gear Type']) !!}
                                    @if ($errors->has('gear_type'))
                                    <span class="help-block">{!! $errors->first('gear_type') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_steering')) has-error @endif">
                                 <label class="control-label mb-10">Power Steering</label>
                                    {!! Form::text('power_steering', $specification->power_steering, ['class' => 'form-control', 'placeholder' => 'Power Steering']) !!}
                                    @if ($errors->has('power_steering'))
                                    <span class="help-block">{!! $errors->first('power_steering') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swm')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Material</label>
                                    {!! Form::text('swm', $specification->swm, ['class' => 'form-control', 'placeholder' => 'Steering Wheel Material']) !!}
                                    @if ($errors->has('swm'))
                                    <span class="help-block">{!! $errors->first('swm') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('cruise_control')) has-error @endif">
                                 <label class="control-label mb-10">Cruise Control</label>
                                    {!! Form::text('cruise_control', $specification->cruise_control, ['class' => 'form-control', 'placeholder' => 'Cruise Control']) !!}
                                    @if ($errors->has('cruise_control'))
                                    <span class="help-block">{!! $errors->first('cruise_control') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swc')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Controls</label>
                                    {!! Form::text('swc', $specification->swc, ['class' => 'form-control', 'placeholder' => 'Steering Wheel Controls']) !!}
                                    @if ($errors->has('swc'))
                                    <span class="help-block">{!! $errors->first('swc') !!}</span>
                                    @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swa')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Adjustment</label>
                                    {!! Form::text('swa', $specification->swa, ['class' => 'form-control', 'placeholder' => 'Steering Wheel Adjustment']) !!}
                                    @if ($errors->has('swa'))
                                    <span class="help-block">{!! $errors->first('swa') !!}</span>
                                    @endif
                              </div>
                           </div>

                  </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Eco Assist System</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('econ')) has-error @endif">
                                 <label class="control-label mb-10">Econ Button</label>
                                    {!! Form::text('econ', $specification->econ, ['class' => 'form-control', 'placeholder' => 'Econ Button']) !!}
                                    @if ($errors->has('econ'))
                                    <span class="help-block">{!! $errors->first('econ') !!}</span>
                                    @endif
                              </div>
                           </div>
                           
                            <div class="col-md-6">
                              <div class="form-group @if($errors->has('eco')) has-error @endif">
                                 <label class="control-label mb-10">Eco-Coaching</label>
                                    {!! Form::text('eco', $specification->eco, ['class' => 'form-control', 'placeholder' => 'Eco-Coaching']) !!}
                                    @if ($errors->has('eco'))
                                    <span class="help-block">{!! $errors->first('eco') !!}</span>
                                    @endif
                              </div>
                           </div>


                  </div>
               

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Exterior</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('headlight')) has-error @endif">
                                 <label class="control-label mb-10">Headlights</label>
                                 {!! Form::text('headlight', $specification->headlight, ['class' => 'form-control', 'placeholder' => 'Headlights']) !!}
                                 @if ($errors->has('headlight'))
                                 <span class="help-block">{!! $errors->first('headlight') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('led')) has-error @endif">
                                 <label class="control-label mb-10">LED Daytime Running Lights (DRL)</label>
                                 {!! Form::text('led', $specification->led, ['class' => 'form-control', 'placeholder' => 'LED Daytime Running Lights (DRL)']) !!}
                                 @if ($errors->has('led'))
                                 <span class="help-block">{!! $errors->first('led') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fog')) has-error @endif">
                                 <label class="control-label mb-10">Fog Lights</label>
                                 {!! Form::text('fog', $specification->fog, ['class' => 'form-control', 'placeholder' => 'Fog Lights']) !!}
                                 @if ($errors->has('fog'))
                                 <span class="help-block">{!! $errors->first('fog') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('stsl')) has-error @endif">
                                 <label class="control-label mb-10">Side Turn Signal Lights</label>
                                 {!! Form::text('stsl', $specification->stsl, ['class' => 'form-control', 'placeholder' => 'Side Turn Signal Lights']) !!}
                                 @if ($errors->has('stsl'))
                                 <span class="help-block">{!! $errors->first('stsl') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('tail')) has-error @endif">
                                 <label class="control-label mb-10">Tail Lamp</label>
                                 {!! Form::text('tail', $specification->tail, ['class' => 'form-control', 'placeholder' => 'Tail Lamp']) !!}
                                 @if ($errors->has('tail'))
                                 <span class="help-block">{!! $errors->first('tail') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('hmsl')) has-error @endif">
                                 <label class="control-label mb-10">High-Mount Stop Lamp</label>
                                 {!! Form::text('hmsl', $specification->hmsl, ['class' => 'form-control', 'placeholder' => 'High-Mount Stop Lamp']) !!}
                                 @if ($errors->has('hmsl'))
                                 <span class="help-block">{!! $errors->first('hmsl') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_hand')) has-error @endif">
                                 <label class="control-label mb-10">Door Handles</label>
                                 {!! Form::text('door_hand', $specification->door_hand, ['class' => 'form-control', 'placeholder' => 'Door Handles']) !!}
                                 @if ($errors->has('door_hand'))
                                 <span class="help-block">{!! $errors->first('door_hand') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_mirror')) has-error @endif">
                                 <label class="control-label mb-10">Door Mirror Color</label>
                                 {!! Form::text('door_mirror', $specification->door_mirror, ['class' => 'form-control', 'placeholder' => 'Door Mirror Color']) !!}
                                 @if ($errors->has('door_mirror'))
                                 <span class="help-block">{!! $errors->first('door_mirror') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('pfdm')) has-error @endif">
                                 <label class="control-label mb-10">Power Folding Door Mirrors</label>
                                 {!! Form::text('pfdm', $specification->pfdm, ['class' => 'form-control', 'placeholder' => 'Power Folding Door Mirrors']) !!}
                                 @if ($errors->has('pfdm'))
                                 <span class="help-block">{!! $errors->first('pfdm') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('antenna')) has-error @endif">
                                 <label class="control-label mb-10">Antenna</label>
                                 {!! Form::text('antenna', $specification->antenna, ['class' => 'form-control', 'placeholder' => 'Antenna']) !!}
                                 @if ($errors->has('antenna'))
                                 <span class="help-block">{!! $errors->first('antenna') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_wiper')) has-error @endif">
                                 <label class="control-label mb-10">Front Wipers</label>
                                 {!! Form::text('front_wiper', $specification->front_wiper, ['class' => 'form-control', 'placeholder' => 'Front Wipers']) !!}
                                 @if ($errors->has('front_wiper'))
                                 <span class="help-block">{!! $errors->first('front_wiper') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_rear_bump')) has-error @endif">
                                 <label class="control-label mb-10">Front & Rear Bumper</label>
                                 {!! Form::text('front_rear_bump', $specification->front_rear_bump, ['class' => 'form-control', 'placeholder' => 'Front & Rear Bumper']) !!}
                                 @if ($errors->has('front_rear_bump'))
                                 <span class="help-block">{!! $errors->first('front_rear_bump') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trailgate')) has-error @endif">
                                 <label class="control-label mb-10">Trailgate Spoiler</label>
                                 {!! Form::text('trailgate', $specification->trailgate, ['class' => 'form-control', 'placeholder' => 'Trailgate Spoiler']) !!}
                                 @if ($errors->has('trailgate'))
                                 <span class="help-block">{!! $errors->first('trailgate') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('side_sill')) has-error @endif">
                                 <label class="control-label mb-10">Side Sill Garnish</label>
                                 {!! Form::text('side_sill', $specification->side_sill, ['class' => 'form-control', 'placeholder' => 'Side Sill Garnish']) !!}
                                 @if ($errors->has('side_sill'))
                                 <span class="help-block">{!! $errors->first('side_sill') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_windshield')) has-error @endif">
                                 <label class="control-label mb-10">Rear Windshield Defogger</label>
                                 {!! Form::text('rear_windshield', $specification->rear_windshield, ['class' => 'form-control', 'placeholder' => 'Rear Windshield Defogger']) !!}
                                 @if ($errors->has('rear_windshield'))
                                 <span class="help-block">{!! $errors->first('rear_windshield') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_wiper')) has-error @endif">
                                 <label class="control-label mb-10">Rear Wipers</label>
                                 {!! Form::text('rear_wiper', $specification->rear_wiper, ['class' => 'form-control', 'placeholder' => 'Rear Wipers']) !!}
                                 @if ($errors->has('rear_wiper'))
                                 <span class="help-block">{!! $errors->first('rear_wiper') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_grille')) has-error @endif">
                                 <label class="control-label mb-10">Front Grille</label>
                                 {!! Form::text('front_grille', $specification->front_grille, ['class' => 'form-control', 'placeholder' => 'Front Grille']) !!}
                                 @if ($errors->has('front_grille'))
                                 <span class="help-block">{!! $errors->first('front_grille') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('exhaust')) has-error @endif">
                                 <label class="control-label mb-10">Exhaust Pipe</label>
                                 {!! Form::text('exhaust', $specification->exhaust, ['class' => 'form-control', 'placeholder' => 'Exhaust Pipe']) !!}
                                 @if ($errors->has('exhaust'))
                                 <span class="help-block">{!! $errors->first('exhaust') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_mirror_adj')) has-error @endif">
                                 <label class="control-label mb-10">Door Mirror Adjustment</label>
                                 {!! Form::text('door_mirror_adj', $specification->door_mirror_adj, ['class' => 'form-control', 'placeholder' => 'Door Mirror Adjustment']) !!}
                                 @if ($errors->has('door_mirror_adj'))
                                 <span class="help-block">{!! $errors->first('door_mirror_adj') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('headlight_adj')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Adjustment</label>
                                 {!! Form::text('headlight_adj', $specification->headlight_adj, ['class' => 'form-control', 'placeholder' => 'Headlight Adjustment']) !!}
                                 @if ($errors->has('headlight_adj'))
                                 <span class="help-block">{!! $errors->first('headlight_adj') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('headlight_auto')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Auto On/Off</label>
                                 {!! Form::text('headlight_auto', $specification->headlight_auto, ['class' => 'form-control', 'placeholder' => 'Headlight Auto On/Off']) !!}
                                 @if ($errors->has('headlight_auto'))
                                 <span class="help-block">{!! $errors->first('headlight_auto') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('haot')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Auto Off Timer</label>
                                 {!! Form::text('haot', $specification->haot, ['class' => 'form-control', 'placeholder' => 'Headlight Auto Off Timer']) !!}
                                 @if ($errors->has('haot'))
                                 <span class="help-block">{!! $errors->first('haot') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('flg')) has-error @endif">
                                 <label class="control-label mb-10">Fog Lights Garnish</label>
                                 {!! Form::text('flg', $specification->flg, ['class' => 'form-control', 'placeholder' => 'Fog Lights Garnish']) !!}
                                 @if ($errors->has('flg'))
                                 <span class="help-block">{!! $errors->first('flg') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bumper')) has-error @endif">
                                 <label class="control-label mb-10">Bumper Skid Garnish</label>
                                 {!! Form::text('bumper', $specification->bumper, ['class' => 'form-control', 'placeholder' => 'Bumper Skid Garnish']) !!}
                                 @if ($errors->has('bumper'))
                                 <span class="help-block">{!! $errors->first('bumper') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_sash')) has-error @endif">
                                 <label class="control-label mb-10">Door Sash Garnish</label>
                                 {!! Form::text('door_sash', $specification->door_sash, ['class' => 'form-control', 'placeholder' => 'Door Sash Garnish']) !!}
                                 @if ($errors->has('door_sash'))
                                 <span class="help-block">{!! $errors->first('door_sash') !!}</span>
                                 @endif
                              </div>
                           </div>


                     </div>


                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Interior</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('audio')) has-error @endif">
                                 <label class="control-label mb-10">Audio System</label>
                                 {!! Form::text('audio', $specification->audio, ['class' => 'form-control', 'placeholder' => 'Audio System']) !!}
                                 @if ($errors->has('audio'))
                                 <span class="help-block">{!! $errors->first('audio') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('connectivity')) has-error @endif">
                                 <label class="control-label mb-10">Connectivity</label>
                                 {!! Form::text('connectivity', $specification->connectivity, ['class' => 'form-control', 'placeholder' => 'Connectivity']) !!}
                                 @if ($errors->has('connectivity'))
                                 <span class="help-block">{!! $errors->first('connectivity') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('speakers')) has-error @endif">
                                 <label class="control-label mb-10">Speakers</label>
                                 {!! Form::text('speakers', $specification->speakers, ['class' => 'form-control', 'placeholder' => 'Speakers']) !!}
                                 @if ($errors->has('speakers'))
                                 <span class="help-block">{!! $errors->first('speakers') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('aircondition')) has-error @endif">
                                 <label class="control-label mb-10">Airconditioning System</label>
                                 {!! Form::text('aircondition', $specification->aircondition, ['class' => 'form-control', 'placeholder' => 'Airconditioning System']) !!}
                                 @if ($errors->has('aircondition'))
                                 <span class="help-block">{!! $errors->first('aircondition') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sewpss')) has-error @endif">
                                 <label class="control-label mb-10">Smart Entry with Push Start System</label>
                                 {!! Form::text('sewpss', $specification->sewpss, ['class' => 'form-control', 'placeholder' => 'Smart Entry with Push Start System']) !!}
                                 @if ($errors->has('sewpss'))
                                 <span class="help-block">{!! $errors->first('sewpss') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('tachometer')) has-error @endif">
                                 <label class="control-label mb-10">Tachometer & Speedometer</label>
                                 {!! Form::text('tachometer', $specification->tachometer, ['class' => 'form-control', 'placeholder' => 'Tachometer & Speedometer']) !!}
                                 @if ($errors->has('tachometer'))
                                 <span class="help-block">{!! $errors->first('tachometer') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('comsumption_meter')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Consumption Meter / Fuel Level</label>
                                 {!! Form::text('comsumption_meter', $specification->comsumption_meter, ['class' => 'form-control', 'placeholder' => 'Fuel Consumption Meter / Fuel Level']) !!}
                                 @if ($errors->has('comsumption_meter'))
                                 <span class="help-block">{!! $errors->first('comsumption_meter') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('trip_meter')) has-error @endif">
                                 <label class="control-label mb-10">Trip Meter</label>
                                 {!! Form::text('trip_meter', $specification->trip_meter, ['class' => 'form-control', 'placeholder' => 'Trip Meter']) !!}
                                 @if ($errors->has('trip_meter'))
                                 <span class="help-block">{!! $errors->first('trip_meter') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('accessory_socket')) has-error @endif">
                                 <label class="control-label mb-10">Accessory Socket (12V)</label>
                                 {!! Form::text('accessory_socket', $specification->accessory_socket, ['class' => 'form-control', 'placeholder' => 'Accessory Socket (12V)']) !!}
                                 @if ($errors->has('accessory_socket'))
                                 <span class="help-block">{!! $errors->first('accessory_socket') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('map_demo')) has-error @endif">
                                 <label class="control-label mb-10">Map & Dome Light</label>
                                 {!! Form::text('map_demo', $specification->map_demo, ['class' => 'form-control', 'placeholder' => 'Map & Dome Light']) !!}
                                 @if ($errors->has('map_demo'))
                                 <span class="help-block">{!! $errors->first('map_demo') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_mirrow')) has-error @endif">
                                 <label class="control-label mb-10">Rear View Mirror</label>
                                 {!! Form::text('rear_mirrow', $specification->rear_mirrow, ['class' => 'form-control', 'placeholder' => 'Rear View Mirror']) !!}
                                 @if ($errors->has('rear_mirrow'))
                                 <span class="help-block">{!! $errors->first('rear_mirrow') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('ticket_holder')) has-error @endif">
                                 <label class="control-label mb-10">Sunvisors (Ticket Holder)</label>
                                 {!! Form::text('ticket_holder', $specification->ticket_holder, ['class' => 'form-control', 'placeholder' => 'Sunvisors (Ticket Holder)']) !!}
                                 @if ($errors->has('ticket_holder'))
                                 <span class="help-block">{!! $errors->first('ticket_holder') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('grab_rail')) has-error @endif">
                                 <label class="control-label mb-10">Grab Rail</label>
                                 {!! Form::text('grab_rail', $specification->grab_rail, ['class' => 'form-control', 'placeholder' => 'Grab Rail']) !!}
                                 @if ($errors->has('grab_rail'))
                                 <span class="help-block">{!! $errors->first('grab_rail') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('inner_door')) has-error @endif">
                                 <label class="control-label mb-10">Inner Door Handles</label>
                                 {!! Form::text('inner_door', $specification->inner_door, ['class' => 'form-control', 'placeholder' => 'Inner Door Handles']) !!}
                                 @if ($errors->has('inner_door'))
                                 <span class="help-block">{!! $errors->first('inner_door') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_win')) has-error @endif">
                                 <label class="control-label mb-10">Power Windows</label>
                                 {!! Form::text('power_win', $specification->power_win, ['class' => 'form-control', 'placeholder' => 'Power Windows']) !!}
                                 @if ($errors->has('power_win'))
                                 <span class="help-block">{!! $errors->first('power_win') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_door_locks')) has-error @endif">
                                 <label class="control-label mb-10">Power Door Locks</label>
                                 {!! Form::text('power_door_locks', $specification->power_door_locks, ['class' => 'form-control', 'placeholder' => 'Power Door Locks']) !!}
                                 @if ($errors->has('power_door_locks'))
                                 <span class="help-block">{!! $errors->first('power_door_locks') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bottle_cup')) has-error @endif">
                                 <label class="control-label mb-10">Bottle & Cup Holders</label>
                                 {!! Form::text('bottle_cup', $specification->bottle_cup, ['class' => 'form-control', 'placeholder' => 'Bottle & Cup Holders']) !!}
                                 @if ($errors->has('bottle_cup'))
                                 <span class="help-block">{!! $errors->first('bottle_cup') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('temperature')) has-error @endif">
                                 <label class="control-label mb-10">Temperature</label>
                                 {!! Form::text('temperature', $specification->temperature, ['class' => 'form-control', 'placeholder' => 'Temperature']) !!}
                                 @if ($errors->has('temperature'))
                                 <span class="help-block">{!! $errors->first('temperature') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('ambient_light')) has-error @endif">
                                 <label class="control-label mb-10">Ambient Light</label>
                                 {!! Form::text('ambient_light', $specification->ambient_light, ['class' => 'form-control', 'placeholder' => 'Ambient Light']) !!}
                                 @if ($errors->has('ambient_light'))
                                 <span class="help-block">{!! $errors->first('ambient_light') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('shift_knob')) has-error @endif">
                                 <label class="control-label mb-10">Shift Knob Material</label>
                                 {!! Form::text('shift_knob', $specification->shift_knob, ['class' => 'form-control', 'placeholder' => 'Shift Knob Material']) !!}
                                 @if ($errors->has('shift_knob'))
                                 <span class="help-block">{!! $errors->first('shift_knob') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('instrument_clu')) has-error @endif">
                                 <label class="control-label mb-10">Instrument Cluster</label>
                                 {!! Form::text('instrument_clu', $specification->instrument_clu, ['class' => 'form-control', 'placeholder' => 'Instrument Cluster']) !!}
                                 @if ($errors->has('instrument_clu'))
                                 <span class="help-block">{!! $errors->first('instrument_clu') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('cost_hanger')) has-error @endif">
                                 <label class="control-label mb-10">Coat Hanger</label>
                                 {!! Form::text('cost_hanger', $specification->cost_hanger, ['class' => 'form-control', 'placeholder' => 'Coat Hanger']) !!}
                                 @if ($errors->has('cost_hanger'))
                                 <span class="help-block">{!! $errors->first('cost_hanger') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_color')) has-error @endif">
                                 <label class="control-label mb-10">Interior Color</label>
                                 {!! Form::text('interior_color', $specification->interior_color, ['class' => 'form-control', 'placeholder' => 'Interior Color']) !!}
                                 @if ($errors->has('interior_color'))
                                 <span class="help-block">{!! $errors->first('interior_color') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_trim_gar')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim Garnish</label>
                                 {!! Form::text('interior_trim_gar', $specification->interior_trim_gar, ['class' => 'form-control', 'placeholder' => 'Interior Trim Garnish']) !!}
                                 @if ($errors->has('interior_trim_gar'))
                                 <span class="help-block">{!! $errors->first('interior_trim_gar') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('trim_finish')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim Finish</label>
                                 {!! Form::text('trim_finish', $specification->trim_finish, ['class' => 'form-control', 'placeholder' => 'Interior Trim Finish']) !!}
                                 @if ($errors->has('trim_finish'))
                                 <span class="help-block">{!! $errors->first('trim_finish') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('outlet_type')) has-error @endif">
                                 <label class="control-label mb-10">Outlet Type</label>
                                 {!! Form::text('outlet_type', $specification->outlet_type, ['class' => 'form-control', 'placeholder' => 'Outlet Type']) !!}
                                 @if ($errors->has('outlet_type'))
                                 <span class="help-block">{!! $errors->first('outlet_type') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_trim')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim</label>
                                 {!! Form::text('interior_trim', $specification->interior_trim, ['class' => 'form-control', 'placeholder' => 'Interior Trim']) !!}
                                 @if ($errors->has('interior_trim'))
                                 <span class="help-block">{!! $errors->first('interior_trim') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_aircon')) has-error @endif">
                                 <label class="control-label mb-10">Rear Aircon Vents</label>
                                 {!! Form::text('rear_aircon', $specification->rear_aircon, ['class' => 'form-control', 'placeholder' => 'Rear Aircon Vents']) !!}
                                 @if ($errors->has('rear_aircon'))
                                 <span class="help-block">{!! $errors->first('rear_aircon') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('cargo_area')) has-error @endif">
                                 <label class="control-label mb-10">Cargo Area Light</label>
                                 {!! Form::text('cargo_area', $specification->cargo_area, ['class' => 'form-control', 'placeholder' => 'Cargo Area Light']) !!}
                                 @if ($errors->has('cargo_area'))
                                 <span class="help-block">{!! $errors->first('cargo_area') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sun_glass')) has-error @endif">
                                 <label class="control-label mb-10">Sun Glass Holder</label>
                                 {!! Form::text('sun_glass', $specification->sun_glass, ['class' => 'form-control', 'placeholder' => 'Sun Glass Holder']) !!}
                                 @if ($errors->has('sun_glass'))
                                 <span class="help-block">{!! $errors->first('sun_glass') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sunvisor')) has-error @endif">
                                 <label class="control-label mb-10">Sunvisor</label>
                                 {!! Form::text('sunvisor', $specification->sunvisor, ['class' => 'form-control', 'placeholder' => 'Sunvisor']) !!}
                                 @if ($errors->has('sunvisor'))
                                 <span class="help-block">{!! $errors->first('sunvisor') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('smartphone')) has-error @endif">
                                 <label class="control-label mb-10">Smartphone Mirroring</label>
                                 {!! Form::text('smartphone', $specification->smartphone, ['class' => 'form-control', 'placeholder' => 'Smartphone Mirroring']) !!}
                                 @if ($errors->has('smartphone'))
                                 <span class="help-block">{!! $errors->first('smartphone') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('display_cont')) has-error @endif">
                                 <label class="control-label mb-10">Display Contents</label>
                                 {!! Form::text('display_cont', $specification->display_cont, ['class' => 'form-control', 'placeholder' => 'Display Contents']) !!}
                                 @if ($errors->has('display_cont'))
                                 <span class="help-block">{!! $errors->first('display_cont') !!}</span>
                                 @endif
                              </div>
                           </div>  

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('meter_color')) has-error @endif">
                                 <label class="control-label mb-10">Meter Color</label>
                                 {!! Form::text('meter_color', $specification->meter_color, ['class' => 'form-control', 'placeholder' => 'Meter Color']) !!}
                                 @if ($errors->has('meter_color'))
                                 <span class="help-block">{!! $errors->first('meter_color') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('air_control')) has-error @endif">
                                 <label class="control-label mb-10">Airconditioning Controls</label>
                                 {!! Form::text('air_control', $specification->air_control, ['class' => 'form-control', 'placeholder' => 'Airconditioning Controls']) !!}
                                 @if ($errors->has('air_control'))
                                 <span class="help-block">{!! $errors->first('air_control') !!}</span>
                                 @endif
                              </div>
                           </div> 
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_decor')) has-error @endif">
                                 <label class="control-label mb-10">Interior Decoration</label>
                                 {!! Form::text('interior_decor', $specification->interior_decor, ['class' => 'form-control', 'placeholder' => 'Interior Decoration']) !!}
                                 @if ($errors->has('interior_decor'))
                                 <span class="help-block">{!! $errors->first('interior_decor') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('foot_rest')) has-error @endif">
                                 <label class="control-label mb-10">Foot Rest</label>
                                 {!! Form::text('foot_rest', $specification->foot_rest, ['class' => 'form-control', 'placeholder' => 'Foot Rest']) !!}
                                 @if ($errors->has('foot_rest'))
                                 <span class="help-block">{!! $errors->first('foot_rest') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('console_pock')) has-error @endif">
                                 <label class="control-label mb-10">Console Pocket Light</label>
                                 {!! Form::text('console_pock', $specification->console_pock, ['class' => 'form-control', 'placeholder' => 'Console Pocket Light']) !!}
                                 @if ($errors->has('console_pock'))
                                 <span class="help-block">{!! $errors->first('console_pock') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_pocket')) has-error @endif">
                                 <label class="control-label mb-10">Door Pockets</label>
                                 {!! Form::text('door_pocket', $specification->door_pocket, ['class' => 'form-control', 'placeholder' => 'Door Pockets']) !!}
                                 @if ($errors->has('door_pocket'))
                                 <span class="help-block">{!! $errors->first('door_pocket') !!}</span>
                                 @endif
                              </div> 
                           </div> 
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trunk_light')) has-error @endif">
                                 <label class="control-label mb-10">Trunk Light</label>
                                 {!! Form::text('trunk_light', $specification->trunk_light, ['class' => 'form-control', 'placeholder' => 'Trunk Light']) !!}
                                 @if ($errors->has('trunk_light'))
                                 <span class="help-block">{!! $errors->first('trunk_light') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_center_armr')) has-error @endif">
                                 <label class="control-label mb-10">Front Center Armrest</label>
                                 {!! Form::text('front_center_armr', $specification->front_center_armr, ['class' => 'form-control', 'placeholder' => 'Front Center Armrest']) !!}
                                 @if ($errors->has('front_center_armr'))
                                 <span class="help-block">{!! $errors->first('front_center_armr') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_seat_armr')) has-error @endif">
                                 <label class="control-label mb-10">Rear Seat Armrest</label>
                                 {!! Form::text('rear_seat_armr', $specification->rear_seat_armr, ['class' => 'form-control', 'placeholder' => 'Rear Seat Armrest']) !!}
                                 @if ($errors->has('rear_seat_armr'))
                                 <span class="help-block">{!! $errors->first('rear_seat_armr') !!}</span>
                                 @endif
                              </div>
                           </div>


                  </div>                  
                  

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Safety & Security</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('side_airbags')) has-error @endif">
                                 <label class="control-label mb-10">Side Airbags</label>
                                 {!! Form::text('side_airbags', $specification->side_airbags, ['class' => 'form-control', 'placeholder' => 'Side Airbags']) !!}
                                 @if ($errors->has('side_airbags'))
                                 <span class="help-block">{!! $errors->first('side_airbags') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('side_curtain')) has-error @endif">
                                 <label class="control-label mb-10">Side Curtain Airbags</label>
                                 {!! Form::text('side_curtain', $specification->side_curtain, ['class' => 'form-control', 'placeholder' => 'Side Curtain Airbags']) !!}
                                 @if ($errors->has('side_curtain'))
                                 <span class="help-block">{!! $errors->first('side_curtain') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('abs_sys')) has-error @endif">
                                 <label class="control-label mb-10">Anti-lock Braking System (ABS)</label>
                                 {!! Form::text('abs_sys', $specification->abs_sys, ['class' => 'form-control', 'placeholder' => 'Anti-lock Braking System (ABS)']) !!}
                                 @if ($errors->has('abs_sys'))
                                 <span class="help-block">{!! $errors->first('abs_sys') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ebd')) has-error @endif">
                                 <label class="control-label mb-10">Electronic Brake-force Distribution (EBD)</label>
                                 {!! Form::text('ebd', $specification->ebd, ['class' => 'form-control', 'placeholder' => 'Electronic Brake-force Distribution (EBD)']) !!}
                                 @if ($errors->has('ebd'))
                                 <span class="help-block">{!! $errors->first('ebd') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_tailgate')) has-error @endif">
                                 <label class="control-label mb-10">Power Tailgate</label>
                                 {!! Form::text('power_tailgate', $specification->power_tailgate, ['class' => 'form-control', 'placeholder' => 'Power Tailgate']) !!}
                                 @if ($errors->has('power_tailgate'))
                                 <span class="help-block">{!! $errors->first('power_tailgate') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('vsa')) has-error @endif">
                                 <label class="control-label mb-10">Vehicle Stability Assist (VSA)</label>
                                 {!! Form::text('vsa', $specification->vsa, ['class' => 'form-control', 'placeholder' => 'Vehicle Stability Assist (VSA)']) !!}
                                 @if ($errors->has('vsa'))
                                 <span class="help-block">{!! $errors->first('vsa') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('multi_view')) has-error @endif">
                                 <label class="control-label mb-10">Multi-view Reverse Camera</label>
                                 {!! Form::text('multi_view', $specification->multi_view, ['class' => 'form-control', 'placeholder' => 'Multi-view Reverse Camera']) !!}
                                 @if ($errors->has('multi_view'))
                                 <span class="help-block">{!! $errors->first('multi_view') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seatbelt')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt Reminder</label>
                                 {!! Form::text('seatbelt', $specification->seatbelt, ['class' => 'form-control', 'placeholder' => 'Seatbelt Reminder']) !!}
                                 @if ($errors->has('seatbelt'))
                                 <span class="help-block">{!! $errors->first('seatbelt') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sensor')) has-error @endif">
                                 <label class="control-label mb-10">Sensor</label>
                                 {!! Form::text('sensor', $specification->sensor, ['class' => 'form-control', 'placeholder' => 'Sensor']) !!}
                                 @if ($errors->has('sensor'))
                                 <span class="help-block">{!! $errors->first('sensor') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('body_structure')) has-error @endif">
                                 <label class="control-label mb-10">Body Structure</label>
                                 {!! Form::text('body_structure', $specification->body_structure, ['class' => 'form-control', 'placeholder' => 'Body Structure']) !!}
                                 @if ($errors->has('body_structure'))
                                 <span class="help-block">{!! $errors->first('body_structure') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('child_safety')) has-error @endif">
                                 <label class="control-label mb-10">Child Safety Lock &Seat Anchor (ISOFIX)</label>
                                {!! Form::text('child_safety', $specification->child_safety, ['class' => 'form-control', 'placeholder' => 'Child Safety Lock &Seat Anchor (ISOFIX)']) !!}
                                 @if ($errors->has('child_safety'))
                                 <span class="help-block">{!! $errors->first('child_safety') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ess')) has-error @endif">
                                 <label class="control-label mb-10">Emergency Stop Signal (ESS)</label>
                                 {!! Form::text('ess', $specification->ess, ['class' => 'form-control', 'placeholder' => 'Emergency Stop Signal (ESS)']) !!}
                                 @if ($errors->has('ess'))
                                 <span class="help-block">{!! $errors->first('ess') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('security_alarm')) has-error @endif">
                                 <label class="control-label mb-10">Security Alarm & Immobilizer</label>
                                 {!! Form::text('security_alarm', $specification->security_alarm, ['class' => 'form-control', 'placeholder' => 'Security Alarm & Immobilizer']) !!}
                                 @if ($errors->has('security_alarm'))
                                 <span class="help-block">{!! $errors->first('security_alarm') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('hsa')) has-error @endif">
                                 <label class="control-label mb-10">Hill Start Assist (HSA)</label>
                                 {!! Form::text('hsa', $specification->hsa, ['class' => 'form-control', 'placeholder' => 'Hill Start Assist (HSA)']) !!}
                                 @if ($errors->has('hsa'))
                                 <span class="help-block">{!! $errors->first('hsa') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('keyless')) has-error @endif">
                                 <label class="control-label mb-10">Keyless Entry System</label>
                                 {!! Form::text('keyless', $specification->keyless, ['class' => 'form-control', 'placeholder' => 'Keyless Entry System']) !!}
                                 @if ($errors->has('keyless'))
                                 <span class="help-block">{!! $errors->first('keyless') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('walk_away')) has-error @endif">
                                 <label class="control-label mb-10">Walk Away Auto Lock</label>
                                 {!! Form::text('walk_away', $specification->walk_away, ['class' => 'form-control', 'placeholder' => 'Walk Away Auto Lock']) !!}
                                 @if ($errors->has('walk_away'))
                                 <span class="help-block">{!! $errors->first('walk_away') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('dual_srs')) has-error @endif">
                                 <label class="control-label mb-10">Dual SRS Airbags</label>
                                 {!! Form::text('dual_srs', $specification->dual_srs, ['class' => 'form-control', 'placeholder' => 'Dual SRS Airbags']) !!}
                                 @if ($errors->has('dual_srs'))
                                 <span class="help-block">{!! $errors->first('dual_srs') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('auto_door')) has-error @endif">
                                 <label class="control-label mb-10">Auto Door Lock/Unlock</label>
                                 {!! Form::text('auto_door', $specification->auto_door, ['class' => 'form-control', 'placeholder' => 'Auto Door Lock/Unlock']) !!}
                                 @if ($errors->has('auto_door'))
                                 <span class="help-block">{!! $errors->first('auto_door') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_passenger')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt Driver & Front Passenger</label>
                                 {!! Form::text('front_passenger', $specification->front_passenger, ['class' => 'form-control', 'placeholder' => 'Seatbelt Driver & Front Passenger']) !!}
                                 @if ($errors->has('front_passenger'))
                                 <span class="help-block">{!! $errors->first('front_passenger') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_seat')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt (Rear Seat)</label>
                                 {!! Form::text('rear_seat', $specification->rear_seat, ['class' => 'form-control', 'placeholder' => 'Seatbelt (Rear Seat)']) !!}
                                 @if ($errors->has('rear_seat'))
                                 <span class="help-block">{!! $errors->first('rear_seat') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('agile_hand')) has-error @endif">
                                 <label class="control-label mb-10">Agile Handling Assist (AHA)</label>
                                 {!! Form::text('agile_hand', $specification->agile_hand, ['class' => 'form-control', 'placeholder' => 'Agile Handling Assist (AHA)']) !!}
                                 @if ($errors->has('agile_hand'))
                                 <span class="help-block">{!! $errors->first('agile_hand') !!}</span>
                                 @endif
                              </div>
                           </div>  

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('driver_attention')) has-error @endif">
                                 <label class="control-label mb-10">Driver Attention Monitor</label>
                                 {!! Form::text('driver_attention', $specification->driver_attention, ['class' => 'form-control', 'placeholder' => 'Driver Attention Monitor']) !!}
                                 @if ($errors->has('driver_attention'))
                                 <span class="help-block">{!! $errors->first('driver_attention') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('watch_camera')) has-error @endif">
                                 <label class="control-label mb-10">Lane Watch Camera</label>
                                 {!! Form::text('watch_camera', $specification->watch_camera, ['class' => 'form-control', 'placeholder' => 'Lane Watch Camera']) !!}
                                 @if ($errors->has('watch_camera'))
                                 <span class="help-block">{!! $errors->first('watch_camera') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('low_tire')) has-error @endif">
                                 <label class="control-label mb-10">Low Tire Pressure Warning</label>
                                 {!! Form::text('low_tire', $specification->low_tire, ['class' => 'form-control', 'placeholder' => 'Low Tire Pressure Warning']) !!}
                                 @if ($errors->has('low_tire'))
                                 <span class="help-block">{!! $errors->first('low_tire') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Suspension</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                            <div class="col-md-6">
                              <div class="form-group @if($errors->has('s_front')) has-error @endif">
                                 <label class="control-label mb-10">Front</label>
                                 {!! Form::text('s_front', $specification->s_front, ['class' => 'form-control', 'placeholder' => 'Front']) !!}
                                 @if ($errors->has('s_front'))
                                 <span class="help-block">{!! $errors->first('s_front') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('s_rear')) has-error @endif">
                                 <label class="control-label mb-10">Rear</label>
                                 {!! Form::text('s_rear', $specification->s_rear, ['class' => 'form-control', 'placeholder' => 'Rear']) !!}
                                 @if ($errors->has('s_rear'))
                                 <span class="help-block">{!! $errors->first('s_rear') !!}</span>
                                 @endif
                              </div>
                           </div>

                  </div>
                  
                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Brake</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('br_front')) has-error @endif">
                                 <label class="control-label mb-10">Front</label>
                                 {!! Form::text('br_front', $specification->br_front, ['class' => 'form-control', 'placeholder' => 'Front']) !!}
                                 @if ($errors->has('br_front'))
                                 <span class="help-block">{!! $errors->first('br_front') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('br_rear')) has-error @endif">
                                 <label class="control-label mb-10">Rear</label>
                                 {!! Form::text('br_rear', $specification->br_rear, ['class' => 'form-control', 'placeholder' => 'Rear']) !!}
                                 @if ($errors->has('br_rear'))
                                 <span class="help-block">{!! $errors->first('br_rear') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('parking_br')) has-error @endif">
                                 <label class="control-label mb-10">Parking Brake</label>
                                 {!! Form::text('parking_br', $specification->parking_br, ['class' => 'form-control', 'placeholder' => 'Parking Brake']) !!}
                                 @if ($errors->has('parking_br'))
                                 <span class="help-block">{!! $errors->first('parking_br') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('br_hold')) has-error @endif">
                                 <label class="control-label mb-10">Auto Brake Hold (ABH)</label>
                                 {!! Form::text('br_hold', $specification->br_hold, ['class' => 'form-control', 'placeholder' => 'Auto Brake Hold (ABH)']) !!}
                                 @if ($errors->has('br_hold'))
                                 <span class="help-block">{!! $errors->first('br_hold') !!}</span>
                                 @endif
                              </div>
                           </div>

                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Seating</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fr_seat')) has-error @endif">
                                 <label class="control-label mb-10">Front Seat</label>
                                 {!! Form::text('fr_seat', $specification->fr_seat, ['class' => 'form-control', 'placeholder' => 'Front Seat']) !!}
                                 @if ($errors->has('fr_seat'))
                                 <span class="help-block">{!! $errors->first('fr_seat') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('r_seat')) has-error @endif">
                                 <label class="control-label mb-10">Rear Seat (2nd Row)</label>
                                 {!! Form::text('r_seat', $specification->r_seat, ['class' => 'form-control', 'placeholder' => 'Rear Seat (2nd Row)']) !!}
                                 @if ($errors->has('r_seat'))
                                 <span class="help-block">{!! $errors->first('r_seat') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seat_material')) has-error @endif">
                                 <label class="control-label mb-10">Seat Material</label>
                                 {!! Form::text('seat_material', $specification->seat_material, ['class' => 'form-control', 'placeholder' => 'Seat Material']) !!}
                                 @if ($errors->has('seat_material'))
                                 <span class="help-block">{!! $errors->first('seat_material') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seatback_pock')) has-error @endif">
                                 <label class="control-label mb-10">Seatback Pocket</label>
                                 {!! Form::text('seatback_pock', $specification->seatback_pock, ['class' => 'form-control', 'placeholder' => 'Seatback Pocket']) !!}
                                 @if ($errors->has('seatback_pock'))
                                 <span class="help-block">{!! $errors->first('seatback_pock') !!}</span>
                                 @endif
                              </div>
                           </div>

                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Tires & Wheels</h6>
                     <hr class="light-grey-hr">
                     <div class="row">

                            <div class="col-md-4">
                              <div class="form-group @if($errors->has('tire_size')) has-error @endif">
                                 <label class="control-label mb-10">Tire Size </label>
                                 {!! Form::text('tire_size', $specification->tire_size, ['class' => 'form-control', 'placeholder' => 'Tire Size']) !!}
                                 @if ($errors->has('tire_size'))
                                 <span class="help-block">{!! $errors->first('tire_size') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('wheel_size')) has-error @endif">
                                 <label class="control-label mb-10">Wheel Size and Type</label>
                                 {!! Form::text('wheel_size', $specification->wheel_size, ['class' => 'form-control', 'placeholder' => 'Wheel Size and Type']) !!}
                                 @if ($errors->has('wheel_size'))
                                 <span class="help-block">{!! $errors->first('wheel_size') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('spare_tire')) has-error @endif">
                                 <label class="control-label mb-10">Spare Tire</label>
                                 {!! Form::text('spare_tire', $specification->spare_tire, ['class' => 'form-control', 'placeholder' => 'Spare Tire']) !!}
                                 @if ($errors->has('spare_tire'))
                                 <span class="help-block">{!! $errors->first('spare_tire') !!}</span>
                                 @endif
                              </div>
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

@endsection