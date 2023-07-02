@extends('template')
@section('title', 'Add Specification')
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
               <h6 class="panel-title txt-dark">Add Specification</h6>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="panel-wrapper collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-wrap">
                        {!! Form::open(['route' => 'specification.store']) !!}
                        
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
                                        @foreach($specification as $pg)

                                        <option data-tokens="{{$pg->code}}" value="{{$pg->slug}}">{{$pg->code}}</option>
                                        @endforeach
                                        
                                    </select>

                                    <script type="text/javascript">
                                            $(function() {
                                                $('.selectpicker').selectpicker();
                                            });

                                    </script>
                                 </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Select Page</label>
                                    <select class="form-control selectpicker" data-live-search="true" data-placeholder="Spare Part's Category" name="page_id">
                                        
                                        <option value="0">Select...</option>
        
                                         @foreach($pages as $pages)
        
                                            <option value="{{$pages->id}}">{{$pages->title}}</option>
        
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
                        
                        <br>
                        <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Car Model</h6>
                        <hr class="light-grey-hr">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group @if($errors->has('name')) has-error @endif">
                                 <label class="control-label mb-10">Model Name</label>
                                 <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Model Name" />
                                 @if ($errors->has('name'))
                                 <span class="help-block">{!! $errors->first('name') !!}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>

                     <br>
                     <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Dimensions & Weight</h6>
                     <hr class="light-grey-hr">
                     <div class="row">
                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('lwh')) has-error @endif">
                                 <label class="control-label mb-10">Length, Width, Height (mm)</label>
                                 <input type="text" class="form-control" name="lwh" value="{{ old('lwh') }}" placeholder="Length, Width, Height (mm)" />
                                 @if ($errors->has('lwh'))
                                 <span class="help-block">{!! $errors->first('lwh') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('wheelbase')) has-error @endif">
                                 <label class="control-label mb-10">Wheelbase (mm)</label>
                                 <input type="text" class="form-control" name="wheelbase" value="{{ old('wheelbase') }}" placeholder="Wheelbase (mm)" />
                                 @if ($errors->has('wheelbase'))
                                 <span class="help-block">{!! $errors->first('wheelbase') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ground')) has-error @endif">
                                 <label class="control-label mb-10">Ground Clearance (mm)</label>
                                 <input type="text" class="form-control" name="ground" value="{{ old('ground') }}" placeholder="Ground Clearance (mm)" />
                                 @if ($errors->has('ground'))
                                 <span class="help-block">{!! $errors->first('ground') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('curb')) has-error @endif">
                                 <label class="control-label mb-10">Curb Weight (kg)</label>
                                 <input type="text" class="form-control" name="curb" value="{{ old('curb') }}" placeholder="Curb Weight (kg)" />
                                 @if ($errors->has('curb'))
                                 <span class="help-block">{!! $errors->first('curb') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seating')) has-error @endif">
                                 <label class="control-label mb-10">Seating Capacity (Persons)</label>
                                 <input type="text" class="form-control" name="seating" value="{{ old('seating') }}" placeholder="Seating Capacity (Persons)" />
                                 @if ($errors->has('seating'))
                                 <span class="help-block">{!! $errors->first('seating') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trunk')) has-error @endif">
                                 <label class="control-label mb-10">Trunk Capacity / Cargo Capacity</label>
                                 <input type="text" class="form-control" name="trunk" value="{{ old('trunk') }}" placeholder="(Liters) / (Behind 2nd Row)" />
                                 @if ($errors->has('trunk'))
                                 <span class="help-block">{!! $errors->first('trunk') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('turning')) has-error @endif">
                                 <label class="control-label mb-10">Turning Radius (m)</label>
                                 <input type="text" class="form-control" name="turning" value="{{ old('turning') }}" placeholder="Turning Radius (m)" />
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
                                 <input type="text" class="form-control" name="type" value="{{ old('type') }}" placeholder="Type" />
                                 @if ($errors->has('type'))
                                 <span class="help-block">{!! $errors->first('type') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fss')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Supply System</label>
                                 <input type="text" class="form-control" name="fss" value="{{ old('fss') }}" placeholder="Fuel Supply System " />
                                 @if ($errors->has('fss'))
                                 <span class="help-block">{!! $errors->first('fss') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('engine_dis')) has-error @endif">
                                 <label class="control-label mb-10">Engine Displacement (cc)</label>
                                 <input type="text" class="form-control" name="engine_dis" value="{{ old('engine_dis') }}" placeholder="Engine Displacement (cc)" />
                                 @if ($errors->has('engine_dis'))
                                 <span class="help-block">{!! $errors->first('engine_dis') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('max_power')) has-error @endif">
                                 <label class="control-label mb-10">Max. Power kW (ps) / rpm</label>
                                 <input type="text" class="form-control" name="max_power" value="{{ old('max_power') }}" placeholder="Max. Power kW (ps) / rpm" />
                                 @if ($errors->has('max_power'))
                                 <span class="help-block">{!! $errors->first('max_power') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('max_tor')) has-error @endif">
                                 <label class="control-label mb-10">Max. Torque N-m (kg-m) / rpm</label>
                                 <input type="text" class="form-control" name="max_tor" value="{{ old('max_tor') }}" placeholder="Max. Torque N-m (kg-m) / rpm" />
                                 @if ($errors->has('max_tor'))
                                 <span class="help-block">{!! $errors->first('max_tor') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bore_stroke')) has-error @endif">
                                 <label class="control-label mb-10">Bore & Stroke(mm)</label>
                                 <input type="text" class="form-control" name="bore_stroke" value="{{ old('bore_stroke') }}" placeholder="Bore & Stroke(mm)" />
                                 @if ($errors->has('bore_stroke'))
                                 <span class="help-block">{!! $errors->first('bore_stroke') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('compression')) has-error @endif">
                                 <label class="control-label mb-10">Compression ratio(:1)</label>
                                 <input type="text" class="form-control" name="compression" value="{{ old('compression') }}" placeholder="Compression ratio(:1)" />
                                 @if ($errors->has('compression'))
                                 <span class="help-block">{!! $errors->first('compression') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('drive_wire')) has-error @endif">
                                 <label class="control-label mb-10">Drive-by-Wire</label>
                                 <input type="text" class="form-control" name="drive_wire" value="{{ old('drive_wire') }}" placeholder="Drive-by-Wire" />
                                 @if ($errors->has('drive_wire'))
                                 <span class="help-block">{!! $errors->first('drive_wire') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('transmission')) has-error @endif">
                                 <label class="control-label mb-10">Transmission</label>
                                 <input type="text" class="form-control" name="transmission" value="{{ old('transmission') }}" placeholder="Transmission" />
                                 @if ($errors->has('transmission'))
                                 <span class="help-block">{!! $errors->first('transmission') !!}</span>
                                 @endif
                              </div>
                           </div>
                          
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('paddle_shift')) has-error @endif">
                                 <label class="control-label mb-10">Paddle Shifters</label>
                                 <input type="text" class="form-control" name="paddle_shift" value="{{ old('paddle_shift') }}" placeholder="Paddle Shifters" />
                                 @if ($errors->has('paddle_shift'))
                                 <span class="help-block">{!! $errors->first('paddle_shift') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fuel_tank')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Tank Capacity (li)</label>
                                 <input type="text" class="form-control" name="fuel_tank" value="{{ old('fuel_tank') }}" placeholder="Fuel Tank Capacity (li)" />
                                 @if ($errors->has('fuel_tank'))
                                 <span class="help-block">{!! $errors->first('fuel_tank') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('emission')) has-error @endif">
                                 <label class="control-label mb-10">Emission Rating</label>
                                 <input type="text" class="form-control" name="emission" value="{{ old('emission') }}" placeholder="Emission Rating" />
                                 @if ($errors->has('emission'))
                                 <span class="help-block">{!! $errors->first('emission') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('recommended')) has-error @endif">
                                 <label class="control-label mb-10">Recommended Fuel</label>
                                 <input type="text" class="form-control" name="recommended" value="{{ old('recommended') }}" placeholder="Recommended Fuel" />
                                 @if ($errors->has('recommended'))
                                 <span class="help-block">{!! $errors->first('recommended') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('drive_sys')) has-error @endif">
                                 <label class="control-label mb-10">Drive System</label>
                                 <input type="text" class="form-control" name="drive_sys" value="{{ old('drive_sys') }}" placeholder="Drive System" />
                                 @if ($errors->has('drive_sys'))
                                 <span class="help-block">{!! $errors->first('drive_sys') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('remote_engine')) has-error @endif">
                                 <label class="control-label mb-10">Remote Engine Start</label>
                                 <input type="text" class="form-control" name="remote_engine" value="{{ old('remote_engine') }}" placeholder="Remote Engine Start" />
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
                                 <input type="text" class="form-control" name="gear_type" value="{{ old('gear_type') }}" placeholder="Gear Type" />
                                 @if ($errors->has('gear_type'))
                                 <span class="help-block">{!! $errors->first('gear_type') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_steering')) has-error @endif">
                                 <label class="control-label mb-10">Power Steering</label>
                                 <input type="text" class="form-control" name="power_steering" value="{{ old('power_steering') }}" placeholder="Power Steering" />
                                 @if ($errors->has('power_steering'))
                                 <span class="help-block">{!! $errors->first('power_steering') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swm')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Material</label>
                                 <input type="text" class="form-control" name="swm" value="{{ old('swm') }}" placeholder="Steering Wheel Material" />
                                 @if ($errors->has('swm'))
                                 <span class="help-block">{!! $errors->first('swm') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('cruise_control')) has-error @endif">
                                 <label class="control-label mb-10">Cruise Control</label>
                                 <input type="text" class="form-control" name="cruise_control" value="{{ old('cruise_control') }}" placeholder="Cruise Control" />
                                 @if ($errors->has('cruise_control'))
                                 <span class="help-block">{!! $errors->first('cruise_control') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swc')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Controls</label>
                                 <input type="text" class="form-control" name="swc" value="{{ old('swc') }}" placeholder="Steering Wheel Controls" />
                                 @if ($errors->has('swc'))
                                 <span class="help-block">{!! $errors->first('swc') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('swa')) has-error @endif">
                                 <label class="control-label mb-10">Steering Wheel Adjustment</label>
                                 <input type="text" class="form-control" name="swa" value="{{ old('swa') }}" placeholder="Steering Wheel Adjustment" />
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
                                 <input type="text" class="form-control" name="econ" value="{{ old('econ') }}" placeholder="Econ Button" />
                                 @if ($errors->has('econ'))
                                 <span class="help-block">{!! $errors->first('econ') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('eco')) has-error @endif">
                                 <label class="control-label mb-10">Eco-Coaching</label>
                                 <input type="text" class="form-control" name="eco" value="{{ old('eco') }}" placeholder="Eco-Coaching" />
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
                                 <input type="text" class="form-control" name="headlight" value="{{ old('headlight') }}" placeholder="Headlights" />
                                 @if ($errors->has('headlight'))
                                 <span class="help-block">{!! $errors->first('headlight') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('led')) has-error @endif">
                                 <label class="control-label mb-10">LED Daytime Running Lights (DRL)</label>
                                 <input type="text" class="form-control" name="led" value="{{ old('led') }}" placeholder="LED Daytime Running Lights (DRL)" />
                                 @if ($errors->has('led'))
                                 <span class="help-block">{!! $errors->first('led') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('fog')) has-error @endif">
                                 <label class="control-label mb-10">Fog Lights</label>
                                 <input type="text" class="form-control" name="fog" value="{{ old('fog') }}" placeholder="Fog Lights" />
                                 @if ($errors->has('fog'))
                                 <span class="help-block">{!! $errors->first('fog') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('stsl')) has-error @endif">
                                 <label class="control-label mb-10">Side Turn Signal Lights</label>
                                 <input type="text" class="form-control" name="stsl" value="{{ old('stsl') }}" placeholder="Side Turn Signal Lights" />
                                 @if ($errors->has('stsl'))
                                 <span class="help-block">{!! $errors->first('stsl') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('tail')) has-error @endif">
                                 <label class="control-label mb-10">Tail Lamp</label>
                                 <input type="text" class="form-control" name="tail" value="{{ old('tail') }}" placeholder="Tail Lamp" />
                                 @if ($errors->has('tail'))
                                 <span class="help-block">{!! $errors->first('tail') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('hmsl')) has-error @endif">
                                 <label class="control-label mb-10">High-Mount Stop Lamp</label>
                                 <input type="text" class="form-control" name="hmsl" value="{{ old('hmsl') }}" placeholder="High-Mount Stop Lamp" />
                                 @if ($errors->has('hmsl'))
                                 <span class="help-block">{!! $errors->first('hmsl') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_hand')) has-error @endif">
                                 <label class="control-label mb-10">Door Handles</label>
                                 <input type="text" class="form-control" name="door_hand" value="{{ old('door_hand') }}" placeholder="Door Handles" />
                                 @if ($errors->has('door_hand'))
                                 <span class="help-block">{!! $errors->first('door_hand') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_mirror')) has-error @endif">
                                 <label class="control-label mb-10">Door Mirror Color</label>
                                 <input type="text" class="form-control" name="door_mirror" value="{{ old('door_mirror') }}" placeholder="Door Mirror Color" />
                                 @if ($errors->has('door_mirror'))
                                 <span class="help-block">{!! $errors->first('door_mirror') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('pfdm')) has-error @endif">
                                 <label class="control-label mb-10">Power Folding Door Mirrors</label>
                                 <input type="text" class="form-control" name="pfdm" value="{{ old('pfdm') }}" placeholder="Power Folding Door Mirrors" />
                                 @if ($errors->has('pfdm'))
                                 <span class="help-block">{!! $errors->first('pfdm') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('antenna')) has-error @endif">
                                 <label class="control-label mb-10">Antenna</label>
                                 <input type="text" class="form-control" name="antenna" value="{{ old('antenna') }}" placeholder="Antenna" />
                                 @if ($errors->has('antenna'))
                                 <span class="help-block">{!! $errors->first('antenna') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_wiper')) has-error @endif">
                                 <label class="control-label mb-10">Front Wipers</label>
                                 <input type="text" class="form-control" name="front_wiper" value="{{ old('front_wiper') }}" placeholder="Front Wipers" />
                                 @if ($errors->has('front_wiper'))
                                 <span class="help-block">{!! $errors->first('front_wiper') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_rear_bump')) has-error @endif">
                                 <label class="control-label mb-10">Front & Rear Bumper</label>
                                 <input type="text" class="form-control" name="front_rear_bump" value="{{ old('front_rear_bump') }}" placeholder="Front & Rear Bumper" />
                                 @if ($errors->has('front_rear_bump'))
                                 <span class="help-block">{!! $errors->first('front_rear_bump') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trailgate')) has-error @endif">
                                 <label class="control-label mb-10">Trailgate Spoiler</label>
                                 <input type="text" class="form-control" name="trailgate" value="{{ old('trailgate') }}" placeholder="Trailgate Spoiler" />
                                 @if ($errors->has('trailgate'))
                                 <span class="help-block">{!! $errors->first('trailgate') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('side_sill')) has-error @endif">
                                 <label class="control-label mb-10">Side Sill Garnish</label>
                                 <input type="text" class="form-control" name="side_sill" value="{{ old('side_sill') }}" placeholder="Side Sill Garnish" />
                                 @if ($errors->has('side_sill'))
                                 <span class="help-block">{!! $errors->first('side_sill') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_windshield')) has-error @endif">
                                 <label class="control-label mb-10">Rear Windshield Defogger</label>
                                 <input type="text" class="form-control" name="rear_windshield" value="{{ old('rear_windshield') }}" placeholder="Rear Windshield Defogger" />
                                 @if ($errors->has('rear_windshield'))
                                 <span class="help-block">{!! $errors->first('rear_windshield') !!}</span>
                                 @endif
                              </div>
                           </div>   

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_wiper')) has-error @endif">
                                 <label class="control-label mb-10">Rear Wipers</label>
                                 <input type="text" class="form-control" name="rear_wiper" value="{{ old('rear_wiper') }}" placeholder="Rear Wipers" />
                                 @if ($errors->has('rear_wiper'))
                                 <span class="help-block">{!! $errors->first('rear_wiper') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_grille')) has-error @endif">
                                 <label class="control-label mb-10">Front Grille</label>
                                 <input type="text" class="form-control" name="front_grille" value="{{ old('front_grille') }}" placeholder="Front Grille" />
                                 @if ($errors->has('front_grille'))
                                 <span class="help-block">{!! $errors->first('front_grille') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('exhaust')) has-error @endif">
                                 <label class="control-label mb-10">Exhaust Pipe</label>
                                 <input type="text" class="form-control" name="exhaust" value="{{ old('exhaust') }}" placeholder="Exhaust Pipe" />
                                 @if ($errors->has('exhaust'))
                                 <span class="help-block">{!! $errors->first('exhaust') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_mirror_adj')) has-error @endif">
                                 <label class="control-label mb-10">Door Mirror Adjustment</label>
                                 <input type="text" class="form-control" name="door_mirror_adj" value="{{ old('door_mirror_adj') }}" placeholder="Door Mirror Adjustment" />
                                 @if ($errors->has('door_mirror_adj'))
                                 <span class="help-block">{!! $errors->first('door_mirror_adj') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('headlight_adj')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Adjustment</label>
                                 <input type="text" class="form-control" name="headlight_adj" value="{{ old('headlight_adj') }}" placeholder="Headlight Adjustment" />
                                 @if ($errors->has('headlight_adj'))
                                 <span class="help-block">{!! $errors->first('headlight_adj') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('headlight_auto')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Auto On/Off</label>
                                 <input type="text" class="form-control" name="headlight_auto" value="{{ old('headlight_auto') }}" placeholder="Headlight Auto On/Off" />
                                 @if ($errors->has('headlight_auto'))
                                 <span class="help-block">{!! $errors->first('headlight_auto') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('haot')) has-error @endif">
                                 <label class="control-label mb-10">Headlight Auto Off Timer</label>
                                 <input type="text" class="form-control" name="haot" value="{{ old('haot') }}" placeholder="Headlight Auto Off Timer" />
                                 @if ($errors->has('haot'))
                                 <span class="help-block">{!! $errors->first('haot') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('flg')) has-error @endif">
                                 <label class="control-label mb-10">Fog Lights Garnish</label>
                                 <input type="text" class="form-control" name="flg" value="{{ old('flg') }}" placeholder="Fog Lights Garnish" />
                                 @if ($errors->has('flg'))
                                 <span class="help-block">{!! $errors->first('flg') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bumper')) has-error @endif">
                                 <label class="control-label mb-10">Bumper Skid Garnish</label>
                                 <input type="text" class="form-control" name="bumper" value="{{ old('bumper') }}" placeholder="Bumper Skid Garnish" />
                                 @if ($errors->has('bumper'))
                                 <span class="help-block">{!! $errors->first('bumper') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_sash')) has-error @endif">
                                 <label class="control-label mb-10">Door Sash Garnish</label>
                                 <input type="text" class="form-control" name="door_sash" value="{{ old('door_sash') }}" placeholder="Door Sash Garnish" />
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
                                 <input type="text" class="form-control" name="audio" value="{{ old('audio') }}" placeholder="Audio System" />
                                 @if ($errors->has('audio'))
                                 <span class="help-block">{!! $errors->first('audio') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('connectivity')) has-error @endif">
                                 <label class="control-label mb-10">Connectivity</label>
                                 <input type="text" class="form-control" name="connectivity" value="{{ old('connectivity') }}" placeholder="Connectivity" />
                                 @if ($errors->has('connectivity'))
                                 <span class="help-block">{!! $errors->first('connectivity') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('speakers')) has-error @endif">
                                 <label class="control-label mb-10">Speakers</label>
                                 <input type="text" class="form-control" name="speakers" value="{{ old('speakers') }}" placeholder="Speakers" />
                                 @if ($errors->has('speakers'))
                                 <span class="help-block">{!! $errors->first('speakers') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('aircondition')) has-error @endif">
                                 <label class="control-label mb-10">Airconditioning System</label>
                                 <input type="text" class="form-control" name="aircondition" value="{{ old('aircondition') }}" placeholder="Airconditioning System" />
                                 @if ($errors->has('aircondition'))
                                 <span class="help-block">{!! $errors->first('aircondition') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sewpss')) has-error @endif">
                                 <label class="control-label mb-10">Smart Entry with Push Start System</label>
                                 <input type="text" class="form-control" name="sewpss" value="{{ old('sewpss') }}" placeholder="Smart Entry with Push Start System" />
                                 @if ($errors->has('sewpss'))
                                 <span class="help-block">{!! $errors->first('sewpss') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('tachometer')) has-error @endif">
                                 <label class="control-label mb-10">Tachometer & Speedometer</label>
                                 <input type="text" class="form-control" name="tachometer" value="{{ old('tachometer') }}" placeholder="Tachometer & Speedometer" />
                                 @if ($errors->has('tachometer'))
                                 <span class="help-block">{!! $errors->first('tachometer') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('comsumption_meter')) has-error @endif">
                                 <label class="control-label mb-10">Fuel Consumption Meter / Fuel Level</label>
                                 <input type="text" class="form-control" name="comsumption_meter" value="{{ old('comsumption_meter') }}" placeholder="Fuel Consumption Meter / Fuel Level" />
                                 @if ($errors->has('comsumption_meter'))
                                 <span class="help-block">{!! $errors->first('comsumption_meter') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('trip_meter')) has-error @endif">
                                 <label class="control-label mb-10">Trip Meter / Range Computer</label>
                                 <input type="text" class="form-control" name="trip_meter" value="{{ old('trip_meter') }}" placeholder="Trip Meter / Range Computer" />
                                 @if ($errors->has('trip_meter'))
                                 <span class="help-block">{!! $errors->first('trip_meter') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('accessory_socket')) has-error @endif">
                                 <label class="control-label mb-10">Accessory Socket (12V)</label>
                                 <input type="text" class="form-control" name="accessory_socket" value="{{ old('accessory_socket') }}" placeholder="Accessory Socket (12V)" />
                                 @if ($errors->has('accessory_socket'))
                                 <span class="help-block">{!! $errors->first('accessory_socket') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('map_demo')) has-error @endif">
                                 <label class="control-label mb-10">Map & Dome Light</label>
                                 <input type="text" class="form-control" name="map_demo" value="{{ old('map_demo') }}" placeholder="Map & Dome Light" />
                                 @if ($errors->has('map_demo'))
                                 <span class="help-block">{!! $errors->first('map_demo') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_mirrow')) has-error @endif">
                                 <label class="control-label mb-10">Rear View Mirror</label>
                                 <input type="text" class="form-control" name="rear_mirrow" value="{{ old('rear_mirrow') }}" placeholder="Rear View Mirror" />
                                 @if ($errors->has('rear_mirrow'))
                                 <span class="help-block">{!! $errors->first('rear_mirrow') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ticket_holder')) has-error @endif">
                                 <label class="control-label mb-10">Sunvisors (Ticket Holder)</label>
                                 <input type="text" class="form-control" name="ticket_holder" value="{{ old('ticket_holder') }}" placeholder="Sunvisors (Ticket Holder)" />
                                 @if ($errors->has('ticket_holder'))
                                 <span class="help-block">{!! $errors->first('ticket_holder') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('grab_rail')) has-error @endif">
                                 <label class="control-label mb-10">Grab Rail</label>
                                 <input type="text" class="form-control" name="grab_rail" value="{{ old('grab_rail') }}" placeholder="Grab Rail" />
                                 @if ($errors->has('grab_rail'))
                                 <span class="help-block">{!! $errors->first('grab_rail') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('inner_door')) has-error @endif">
                                 <label class="control-label mb-10">Inner Door Handles</label>
                                 <input type="text" class="form-control" name="inner_door" value="{{ old('inner_door') }}" placeholder="Inner Door Handles" />
                                 @if ($errors->has('inner_door'))
                                 <span class="help-block">{!! $errors->first('inner_door') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_win')) has-error @endif">
                                 <label class="control-label mb-10">Power Windows</label>
                                 <input type="text" class="form-control" name="power_win" value="{{ old('power_win') }}" placeholder="Power Windows" />
                                 @if ($errors->has('power_win'))
                                 <span class="help-block">{!! $errors->first('power_win') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_door_locks')) has-error @endif">
                                 <label class="control-label mb-10">Power Door Locks</label>
                                 <input type="text" class="form-control" name="power_door_locks" value="{{ old('power_door_locks') }}" placeholder="Power Door Locks" />
                                 @if ($errors->has('power_door_locks'))
                                 <span class="help-block">{!! $errors->first('power_door_locks') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('bottle_cup')) has-error @endif">
                                 <label class="control-label mb-10">Bottle & Cup Holders</label>
                                 <input type="text" class="form-control" name="bottle_cup" value="{{ old('bottle_cup') }}" placeholder="Bottle & Cup Holders" />
                                 @if ($errors->has('bottle_cup'))
                                 <span class="help-block">{!! $errors->first('bottle_cup') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('temperature')) has-error @endif">
                                 <label class="control-label mb-10">Temperature</label>
                                 <input type="text" class="form-control" name="temperature" value="{{ old('temperature') }}" placeholder="Temperature" />
                                 @if ($errors->has('temperature'))
                                 <span class="help-block">{!! $errors->first('temperature') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ambient_light')) has-error @endif">
                                 <label class="control-label mb-10">Ambient Light</label>
                                 <input type="text" class="form-control" name="ambient_light" value="{{ old('ambient_light') }}" placeholder="Ambient Light" />
                                 @if ($errors->has('ambient_light'))
                                 <span class="help-block">{!! $errors->first('ambient_light') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('shift_knob')) has-error @endif">
                                 <label class="control-label mb-10">Shift Knob Material</label>
                                 <input type="text" class="form-control" name="shift_knob" value="{{ old('shift_knob') }}" placeholder="Shift Knob Material" />
                                 @if ($errors->has('shift_knob'))
                                 <span class="help-block">{!! $errors->first('shift_knob') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('instrument_clu')) has-error @endif">
                                 <label class="control-label mb-10">Instrument Cluster</label>
                                 <input type="text" class="form-control" name="instrument_clu" value="{{ old('instrument_clu') }}" placeholder="Instrument Cluster" />
                                 @if ($errors->has('instrument_clu'))
                                 <span class="help-block">{!! $errors->first('instrument_clu') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('cost_hanger')) has-error @endif">
                                 <label class="control-label mb-10">Coat Hanger</label>
                                 <input type="text" class="form-control" name="cost_hanger" value="{{ old('cost_hanger') }}" placeholder="Coat Hanger" />
                                 @if ($errors->has('cost_hanger'))
                                 <span class="help-block">{!! $errors->first('cost_hanger') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_color')) has-error @endif">
                                 <label class="control-label mb-10">Interior Color</label>
                                 <input type="text" class="form-control" name="interior_color" value="{{ old('interior_color') }}" placeholder="Interior Color" />
                                 @if ($errors->has('interior_color'))
                                 <span class="help-block">{!! $errors->first('interior_color') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_trim_gar')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim Garnish</label>
                                 <input type="text" class="form-control" name="interior_trim_gar" value="{{ old('interior_trim_gar') }}" placeholder="Interior Trim Garnish" />
                                 @if ($errors->has('interior_trim_gar'))
                                 <span class="help-block">{!! $errors->first('interior_trim_gar') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('trim_finish')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim Finish</label>
                                 <input type="text" class="form-control" name="trim_finish" value="{{ old('trim_finish') }}" placeholder="Interior Trim Finish" />
                                 @if ($errors->has('trim_finish'))
                                 <span class="help-block">{!! $errors->first('trim_finish') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('outlet_type')) has-error @endif">
                                 <label class="control-label mb-10">Outlet Type</label>
                                 <input type="text" class="form-control" name="outlet_type" value="{{ old('outlet_type') }}" placeholder="Outlet Type" />
                                 @if ($errors->has('outlet_type'))
                                 <span class="help-block">{!! $errors->first('outlet_type') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_trim')) has-error @endif">
                                 <label class="control-label mb-10">Interior Trim</label>
                                 <input type="text" class="form-control" name="interior_trim" value="{{ old('interior_trim') }}" placeholder="Interior Trim" />
                                 @if ($errors->has('interior_trim'))
                                 <span class="help-block">{!! $errors->first('interior_trim') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_aircon')) has-error @endif">
                                 <label class="control-label mb-10">Rear Aircon Vents</label>
                                 <input type="text" class="form-control" name="rear_aircon" value="{{ old('rear_aircon') }}" placeholder="Rear Aircon Vents" />
                                 @if ($errors->has('rear_aircon'))
                                 <span class="help-block">{!! $errors->first('rear_aircon') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('cargo_area')) has-error @endif">
                                 <label class="control-label mb-10">Cargo Area Light</label>
                                 <input type="text" class="form-control" name="cargo_area" value="{{ old('cargo_area') }}" placeholder="Cargo Area Light" />
                                 @if ($errors->has('cargo_area'))
                                 <span class="help-block">{!! $errors->first('cargo_area') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sun_glass')) has-error @endif">
                                 <label class="control-label mb-10">Sun Glass Holder</label>
                                 <input type="text" class="form-control" name="sun_glass" value="{{ old('sun_glass') }}" placeholder="Sun Glass Holder" />
                                 @if ($errors->has('sun_glass'))
                                 <span class="help-block">{!! $errors->first('sun_glass') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sunvisor')) has-error @endif">
                                 <label class="control-label mb-10">Sunvisor</label>
                                 <input type="text" class="form-control" name="sunvisor" value="{{ old('sunvisor') }}" placeholder="Sunvisor" />
                                 @if ($errors->has('sunvisor'))
                                 <span class="help-block">{!! $errors->first('sunvisor') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('smartphone')) has-error @endif">
                                 <label class="control-label mb-10">Smartphone Mirroring</label>
                                 <input type="text" class="form-control" name="smartphone" value="{{ old('smartphone') }}" placeholder="Smartphone Mirroring" />
                                 @if ($errors->has('smartphone'))
                                 <span class="help-block">{!! $errors->first('smartphone') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('display_cont')) has-error @endif">
                                 <label class="control-label mb-10">Display Contents</label>
                                 <input type="text" class="form-control" name="display_cont" value="{{ old('display_cont') }}" placeholder="Display Contents" />
                                 @if ($errors->has('display_cont'))
                                 <span class="help-block">{!! $errors->first('display_cont') !!}</span>
                                 @endif
                              </div>
                           </div>  

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('meter_color')) has-error @endif">
                                 <label class="control-label mb-10">Meter Color</label>
                                 <input type="text" class="form-control" name="meter_color" value="{{ old('meter_color') }}" placeholder="Meter Color" />
                                 @if ($errors->has('meter_color'))
                                 <span class="help-block">{!! $errors->first('meter_color') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('air_control')) has-error @endif">
                                 <label class="control-label mb-10">Airconditioning Controls</label>
                                 <input type="text" class="form-control" name="air_control" value="{{ old('air_control') }}" placeholder="Airconditioning Controls" />
                                 @if ($errors->has('air_control'))
                                 <span class="help-block">{!! $errors->first('air_control') !!}</span>
                                 @endif
                              </div>
                           </div> 
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('interior_decor')) has-error @endif">
                                 <label class="control-label mb-10">Interior Decoration</label>
                                 <input type="text" class="form-control" name="interior_decor" value="{{ old('interior_decor') }}" placeholder="Interior Decoration" />
                                 @if ($errors->has('interior_decor'))
                                 <span class="help-block">{!! $errors->first('interior_decor') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('foot_rest')) has-error @endif">
                                 <label class="control-label mb-10">Foot Rest</label>
                                 <input type="text" class="form-control" name="foot_rest" value="{{ old('foot_rest') }}" placeholder="Foot Rest" />
                                 @if ($errors->has('foot_rest'))
                                 <span class="help-block">{!! $errors->first('foot_rest') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('console_pock')) has-error @endif">
                                 <label class="control-label mb-10">Console Pocket Light</label>
                                 <input type="text" class="form-control" name="console_pock" value="{{ old('console_pock') }}" placeholder="Console Pocket Light" />
                                 @if ($errors->has('console_pock'))
                                 <span class="help-block">{!! $errors->first('console_pock') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('door_pocket')) has-error @endif">
                                 <label class="control-label mb-10">Door Pockets</label>
                                 <input type="text" class="form-control" name="door_pocket" value="{{ old('door_pocket') }}" placeholder="Door Pockets" />
                                 @if ($errors->has('door_pocket'))
                                 <span class="help-block">{!! $errors->first('door_pocket') !!}</span>
                                 @endif
                              </div> 
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('trunk_light')) has-error @endif">
                                 <label class="control-label mb-10">Trunk Light</label>
                                 <input type="text" class="form-control" name="trunk_light" value="{{ old('trunk_light') }}" placeholder="Trunk Light" />
                                 @if ($errors->has('trunk_light'))
                                 <span class="help-block">{!! $errors->first('trunk_light') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_center_armr')) has-error @endif">
                                 <label class="control-label mb-10">Front Center Armrest</label>
                                 <input type="text" class="form-control" name="front_center_armr" value="{{ old('front_center_armr') }}" placeholder="Front Center Armrest" />
                                 @if ($errors->has('front_center_armr'))
                                 <span class="help-block">{!! $errors->first('front_center_armr') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_seat_armr')) has-error @endif">
                                 <label class="control-label mb-10">Rear Seat Armrest</label>
                                 <input type="text" class="form-control" name="rear_seat_armr" value="{{ old('rear_seat_armr') }}" placeholder="Rear Seat Armrest" />
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
                                 <input type="text" class="form-control" name="side_airbags" value="{{ old('side_airbags') }}" placeholder="Side Airbags" />
                                 @if ($errors->has('side_airbags'))
                                 <span class="help-block">{!! $errors->first('side_airbags') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('side_curtain')) has-error @endif">
                                 <label class="control-label mb-10">Side Curtain Airbags</label>
                                 <input type="text" class="form-control" name="side_curtain" value="{{ old('side_curtain') }}" placeholder="Side Curtain Airbags" />
                                 @if ($errors->has('side_curtain'))
                                 <span class="help-block">{!! $errors->first('side_curtain') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('abs_sys')) has-error @endif">
                                 <label class="control-label mb-10">Anti-lock Braking System (ABS)</label>
                                 <input type="text" class="form-control" name="abs_sys" value="{{ old('abs_sys') }}" placeholder="Anti-lock Braking System (ABS)" />
                                 @if ($errors->has('abs_sys'))
                                 <span class="help-block">{!! $errors->first('abs_sys') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ebd')) has-error @endif">
                                 <label class="control-label mb-10">Electronic Brake-force Distribution (EBD)</label>
                                 <input type="text" class="form-control" name="ebd" value="{{ old('ebd') }}" placeholder="Electronic Brake-force Distribution (EBD) " />
                                 @if ($errors->has('ebd'))
                                 <span class="help-block">{!! $errors->first('ebd') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('power_tailgate')) has-error @endif">
                                 <label class="control-label mb-10">Power Tailgate</label>
                                 <input type="text" class="form-control" name="power_tailgate" value="{{ old('power_tailgate') }}" placeholder="Power Tailgate " />
                                 @if ($errors->has('power_tailgate'))
                                 <span class="help-block">{!! $errors->first('power_tailgate') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('vsa')) has-error @endif">
                                 <label class="control-label mb-10">Vehicle Stability Assist (VSA)</label>
                                 <input type="text" class="form-control" name="vsa" value="{{ old('vsa') }}" placeholder="Vehicle Stability Assist (VSA)" />
                                 @if ($errors->has('vsa'))
                                 <span class="help-block">{!! $errors->first('vsa') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('multi_view')) has-error @endif">
                                 <label class="control-label mb-10">Multi-view Reverse Camera</label>
                                 <input type="text" class="form-control" name="multi_view" value="{{ old('multi_view') }}" placeholder="Multi-view Reverse Camera" />
                                 @if ($errors->has('multi_view'))
                                 <span class="help-block">{!! $errors->first('multi_view') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seatbelt')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt Reminder</label>
                                 <input type="text" class="form-control" name="seatbelt" value="{{ old('seatbelt') }}" placeholder="Seatbelt Reminder" />
                                 @if ($errors->has('seatbelt'))
                                 <span class="help-block">{!! $errors->first('seatbelt') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('sensor')) has-error @endif">
                                 <label class="control-label mb-10">Sensor</label>
                                 <input type="text" class="form-control" name="sensor" value="{{ old('sensor') }}" placeholder="Sensor" />
                                 @if ($errors->has('sensor'))
                                 <span class="help-block">{!! $errors->first('sensor') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('body_structure')) has-error @endif">
                                 <label class="control-label mb-10">Body Structure</label>
                                 <input type="text" class="form-control" name="body_structure" value="{{ old('body_structure') }}" placeholder="Body Structure" />
                                 @if ($errors->has('body_structure'))
                                 <span class="help-block">{!! $errors->first('body_structure') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('child_safety')) has-error @endif">
                                 <label class="control-label mb-10">Child Safety Lock &Seat Anchor (ISOFIX)</label>
                                 <input type="text" class="form-control" name="child_safety" value="{{ old('child_safety') }}" placeholder="Child Safety Lock &Seat Anchor (ISOFIX)" />
                                 @if ($errors->has('child_safety'))
                                 <span class="help-block">{!! $errors->first('child_safety') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('ess')) has-error @endif">
                                 <label class="control-label mb-10">Emergency Stop Signal (ESS)</label>
                                 <input type="text" class="form-control" name="ess" value="{{ old('ess') }}" placeholder="Emergency Stop Signal (ESS)" />
                                 @if ($errors->has('ess'))
                                 <span class="help-block">{!! $errors->first('ess') !!}</span>
                                 @endif
                              </div>
                           </div>
                           
                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('security_alarm')) has-error @endif">
                                 <label class="control-label mb-10">Security Alarm & Immobilizer</label>
                                 <input type="text" class="form-control" name="security_alarm" value="{{ old('security_alarm') }}" placeholder="Security Alarm & Immobilizer" />
                                 @if ($errors->has('security_alarm'))
                                 <span class="help-block">{!! $errors->first('security_alarm') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('hsa')) has-error @endif">
                                 <label class="control-label mb-10">Hill Start Assist (HSA)</label>
                                 <input type="text" class="form-control" name="hsa" value="{{ old('hsa') }}" placeholder="Hill Start Assist (HSA)" />
                                 @if ($errors->has('hsa'))
                                 <span class="help-block">{!! $errors->first('hsa') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('keyless')) has-error @endif">
                                 <label class="control-label mb-10">Keyless Entry System</label>
                                 <input type="text" class="form-control" name="keyless" value="{{ old('keyless') }}" placeholder="Keyless Entry System" />
                                 @if ($errors->has('keyless'))
                                 <span class="help-block">{!! $errors->first('keyless') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('walk_away')) has-error @endif">
                                 <label class="control-label mb-10">Walk Away Auto Lock</label>
                                 <input type="text" class="form-control" name="walk_away" value="{{ old('walk_away') }}" placeholder="Walk Away Auto Lock" />
                                 @if ($errors->has('walk_away'))
                                 <span class="help-block">{!! $errors->first('walk_away') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('dual_srs')) has-error @endif">
                                 <label class="control-label mb-10">Dual SRS Airbags</label>
                                 <input type="text" class="form-control" name="dual_srs" value="{{ old('dual_srs') }}" placeholder="Dual SRS Airbags" />
                                 @if ($errors->has('dual_srs'))
                                 <span class="help-block">{!! $errors->first('dual_srs') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('auto_door')) has-error @endif">
                                 <label class="control-label mb-10">Auto Door Lock/Unlock</label>
                                 <input type="text" class="form-control" name="auto_door" value="{{ old('auto_door') }}" placeholder="Auto Door Lock/Unlock" />
                                 @if ($errors->has('auto_door'))
                                 <span class="help-block">{!! $errors->first('auto_door') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('front_passenger')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt Driver & Front Passenger</label>
                                 <input type="text" class="form-control" name="front_passenger" value="{{ old('front_passenger') }}" placeholder="Seatbelt Driver & Front Passenger" />
                                 @if ($errors->has('front_passenger'))
                                 <span class="help-block">{!! $errors->first('front_passenger') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('rear_seat')) has-error @endif">
                                 <label class="control-label mb-10">Seatbelt (Rear Seat)</label>
                                 <input type="text" class="form-control" name="rear_seat" value="{{ old('rear_seat') }}" placeholder="Seatbelt (Rear Seat)" />
                                 @if ($errors->has('rear_seat'))
                                 <span class="help-block">{!! $errors->first('rear_seat') !!}</span>
                                 @endif
                              </div>
                           </div>                           

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('agile_hand')) has-error @endif">
                                 <label class="control-label mb-10">Agile Handling Assist (AHA)</label>
                                 <input type="text" class="form-control" name="agile_hand" value="{{ old('agile_hand') }}" placeholder="Agile Handling Assist (AHA)" />
                                 @if ($errors->has('agile_hand'))
                                 <span class="help-block">{!! $errors->first('agile_hand') !!}</span>
                                 @endif
                              </div>
                           </div>  

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('driver_attention')) has-error @endif">
                                 <label class="control-label mb-10">Driver Attention Monitor</label>
                                 <input type="text" class="form-control" name="driver_attention" value="{{ old('driver_attention') }}" placeholder="Driver Attention Monitor" />
                                 @if ($errors->has('driver_attention'))
                                 <span class="help-block">{!! $errors->first('driver_attention') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('watch_camera')) has-error @endif">
                                 <label class="control-label mb-10">Lane Watch Camera</label>
                                 <input type="text" class="form-control" name="watch_camera" value="{{ old('watch_camera') }}" placeholder="Lane Watch Camera" />
                                 @if ($errors->has('watch_camera'))
                                 <span class="help-block">{!! $errors->first('watch_camera') !!}</span>
                                 @endif
                              </div>
                           </div> 

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('low_tire')) has-error @endif">
                                 <label class="control-label mb-10">Low Tire Pressure Warning</label>
                                 <input type="text" class="form-control" name="low_tire" value="{{ old('low_tire') }}" placeholder="Low Tire Pressure Warning" />
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
                                 <input type="text" class="form-control" name="s_front" value="{{ old('s_front') }}" placeholder="Front" />
                                 @if ($errors->has('s_front'))
                                 <span class="help-block">{!! $errors->first('s_front') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group @if($errors->has('s_rear')) has-error @endif">
                                 <label class="control-label mb-10">Rear</label>
                                 <input type="text" class="form-control" name="s_rear" value="{{ old('s_rear') }}" placeholder="Rear" />
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
                                 <input type="text" class="form-control" name="br_front" value="{{ old('br_front') }}" placeholder="Front" />
                                 @if ($errors->has('br_front'))
                                 <span class="help-block">{!! $errors->first('br_front') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('br_rear')) has-error @endif">
                                 <label class="control-label mb-10">Rear</label>
                                 <input type="text" class="form-control" name="br_rear" value="{{ old('br_rear') }}" placeholder="Rear" />
                                 @if ($errors->has('br_rear'))
                                 <span class="help-block">{!! $errors->first('br_rear') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('parking_br')) has-error @endif">
                                 <label class="control-label mb-10">Parking Brake</label>
                                 <input type="text" class="form-control" name="parking_br" value="{{ old('parking_br') }}" placeholder="Parking Brake" />
                                 @if ($errors->has('parking_br'))
                                 <span class="help-block">{!! $errors->first('parking_br') !!}</span>
                                 @endif
                              </div>
                           </div>

                            <div class="col-md-3">
                              <div class="form-group @if($errors->has('br_hold')) has-error @endif">
                                 <label class="control-label mb-10">Auto Brake Hold (ABH)</label>
                                 <input type="text" class="form-control" name="br_hold" value="{{ old('br_hold') }}" placeholder="Auto Brake Hold (ABH)" />
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
                                 <input type="text" class="form-control" name="fr_seat" value="{{ old('fr_seat') }}" placeholder="Front Seat" />
                                 @if ($errors->has('fr_seat'))
                                 <span class="help-block">{!! $errors->first('fr_seat') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('r_seat')) has-error @endif">
                                 <label class="control-label mb-10">Rear Seat (2nd Row)</label>
                                 <input type="text" class="form-control" name="r_seat" value="{{ old('r_seat') }}" placeholder="Rear Seat (2nd Row)" />
                                 @if ($errors->has('r_seat'))
                                 <span class="help-block">{!! $errors->first('r_seat') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seat_material')) has-error @endif">
                                 <label class="control-label mb-10">Seat Material</label>
                                 <input type="text" class="form-control" name="seat_material" value="{{ old('seat_material') }}" placeholder="Seat Material " />
                                 @if ($errors->has('seat_material'))
                                 <span class="help-block">{!! $errors->first('seat_material') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-3">
                              <div class="form-group @if($errors->has('seatback_pock')) has-error @endif">
                                 <label class="control-label mb-10">Seatback Pocket</label>
                                 <input type="text" class="form-control" name="seatback_pock" value="{{ old('seatback_pock') }}" placeholder="Seatback Pocket" />
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
                                 <input type="text" class="form-control" name="tire_size" value="{{ old('tire_size') }}" placeholder="Tire Size " />
                                 @if ($errors->has('tire_size'))
                                 <span class="help-block">{!! $errors->first('tire_size') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('wheel_size')) has-error @endif">
                                 <label class="control-label mb-10">Wheel Size and Type</label>
                                 <input type="text" class="form-control" name="wheel_size" value="{{ old('wheel_size') }}" placeholder="Wheel Size and Type" />
                                 @if ($errors->has('wheel_size'))
                                 <span class="help-block">{!! $errors->first('wheel_size') !!}</span>
                                 @endif
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-group @if($errors->has('spare_tire')) has-error @endif">
                                 <label class="control-label mb-10">Spare Tire</label>
                                 <input type="text" class="form-control" name="spare_tire" value="{{ old('spare_tire') }}" placeholder="Spare Tire" />
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