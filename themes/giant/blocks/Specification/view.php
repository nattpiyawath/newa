<?php

if(isset($_GET['page'])){
    
    echo '<h1>Specification Module</h1>';
    
} else{

    $id = pageID();
    $spec = getSpecification($id);
    $lang_code = app()->getLocale();
    if(!empty($spec)){
        foreach ($spec as $value) {
            if($lang_code == 'en'){
            ?>
        
            <div id="specification" class="row model-spec fadeinTextup">
                <div class="tap-title-main" >
                    
                    
                    <div class="tap-spec">
                        <ul class="nav nav-tabs" role="tablist">
                        	<li class="nav-item">
                        		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Dimensions & Weight</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Engine & Transmission</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Steering</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Eco Assist System</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Exterior</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Interior</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Safety & Security</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Suspension</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab">Brake</a>
                        	</li>                        	
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab">Seating</a>
                        	</li>                  
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab">Tires & Wheels</a>
                        	</li>                          	
                        </ul>
                    </div>
                </div>
        
                
                <div class="tab-content">
                	<div class="tab-pane active" id="tabs-1" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->lwh)){?><tr><th>Length, Width, Height (mm)</th><td><?php echo $value->lwh;?></td></tr><?php }?>
                                      <?php if(!empty($value->wheelbase)){?><tr><th>Wheelbase (mm)</th><td><?php echo $value->wheelbase; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ground)){?><tr><th>Ground Clearance (mm)</th><td><?php echo $value->ground; ?></td></tr><?php }?>
                                      <?php if(!empty($value->curb)){?><tr><th>Curb Weight (kg)</th><td><?php echo $value->curb; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seating)){?><tr><th>Seating Capacity (Persons)</th><td><?php echo $value->seating; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trunk)){?><tr><th>Trunk Capacity / Cargo Capacity</th><td><?php echo $value->trunk; ?></td></tr><?php }?>
                                      <?php if(!empty($value->turning)){?><tr><th>Turning Radius (m)</th><td><?php echo $value->turning; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-2" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->type)){?><tr><th>Type</th><td><?php echo $value->type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fss)){?><tr><th>Fuel Supply System</th><td><?php echo $value->fss; ?></td></tr><?php }?>
                                      <?php if(!empty($value->engine_dis)){?><tr><th>Engine Displacement (cc)</th><td><?php echo $value->engine_dis; ?></td></tr><?php }?>
                                      <?php if(!empty($value->max_power)){?><tr><th>Max. Power kW (ps) / rpm</th><td><?php echo $value->max_power; ?></td></tr><?php }?>
                                      <?php if(!empty($value->max_tor)){?><tr><th>Max. Torque N-m (kg-m) / rpm</th><td><?php echo $value->max_tor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->bore_stroke)){?><tr><th>Bore & Stroke(mm)</th><td><?php echo $value->bore_stroke; ?></td></tr><?php }?>
                                      <?php if(!empty($value->compression)){?><tr><th>Compression ratio(:1)</th><td><?php echo $value->compression; ?></td></tr><?php }?>
                                      <?php if(!empty($value->drive_wire)){?><tr><th>Drive-by-Wire</th><td><?php echo $value->drive_wire; ?></td></tr><?php }?>
                                      <?php if(!empty($value->transmission)){?><tr><th>Transmission</th><td><?php echo $value->transmission; ?></td></tr><?php }?>
                                      <?php if(!empty($value->paddle_shift)){?><tr><th>Paddle Shifters</th><td><?php echo $value->paddle_shift; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fuel_tank)){?><tr><th>Fuel Tank Capacity (li)</th><td><?php echo $value->fuel_tank; ?></td></tr><?php }?>
                                      <?php if(!empty($value->emission)){?><tr><th>Emission Rating</th><td><?php echo $value->emission; ?></td></tr><?php }?>
                                      <?php if(!empty($value->recommended)){?><tr><th>Recommended Fuel</th><td><?php echo $value->recommended; ?></td></tr><?php }?>
                                      <?php if(!empty($value->drive_sys)){?><tr><th>Drive System</th><td><?php echo $value->drive_sys; ?></td></tr><?php }?>    
                                      <?php if(!empty($value->remote_engine)){?><tr><th>Remote Engine Start</th><td><?php echo $value->remote_engine; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-3" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->gear_type)){?><tr><th>Gear Type</th><td><?php echo $value->gear_type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_steering)){?><tr><th>Power Steering</th><td><?php echo $value->power_steering; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swm)){?><tr><th>Steering Wheel Material</th><td><?php echo $value->swm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cruise_control)){?><tr><th>Cruise Control</th><td><?php echo $value->cruise_control; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swc)){?><tr><th>Steering Wheel Controls</th><td><?php echo $value->swc; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swa)){?><tr><th>Steering Wheel Adjustment</th><td><?php echo $value->swa; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-4" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->econ)){?><tr><th>Econ Button</th><td><?php echo $value->econ; ?></td></tr><?php }?>
                                      <?php if(!empty($value->eco)){?><tr><th>Eco-Coaching</th><td><?php echo $value->eco; ?></td></tr><?php }?>
                        </table>
                	</div>                	

                	<div class="tab-pane" id="tabs-5" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->headlight)){?><tr><th>Headlights</th><td><?php echo $value->headlight; ?></td></tr><?php }?>
                                      <?php if(!empty($value->led)){?><tr><th>LED Daytime Running Lights (DRL)</th><td><?php echo $value->led; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fog)){?><tr><th>Fog Lights</th><td><?php echo $value->fog; ?></td></tr><?php }?>
                                      <?php if(!empty($value->stsl)){?><tr><th>Side Turn Signal Lights</th><td><?php echo $value->stsl; ?></td></tr><?php }?>
                                      <?php if(!empty($value->tail)){?><tr><th>Tail Lamp</th><td><?php echo $value->tail; ?></td></tr><?php }?>
                                      <?php if(!empty($value->hmsl)){?><tr><th>High-Mount Stop Lamp</th><td><?php echo $value->hmsl; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_hand)){?><tr><th>Door Handles</th><td><?php echo $value->door_hand; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_mirror)){?><tr><th>Door Mirror Color</th><td><?php echo $value->door_mirror; ?></td></tr><?php }?>
                                      <?php if(!empty($value->pfdm)){?><tr><th>Power Folding Door Mirrors</th><td><?php echo $value->pfdm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->antenna)){?><tr><th>Antenna</th><td><?php echo $value->antenna; ?></td></tr><?php }?>
                                      <?php if(!empty($value->front_wiper)){?><tr><th>Front Wipers</th><td><?php echo $value->front_wiper; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->front_rear_bump)){?><tr><th>Front & Rear Bumper</th><td><?php echo $value->front_rear_bump; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trailgate)){?><tr><th>Trailgate Spoiler</th><td><?php echo $value->trailgate; ?></td></tr><?php }?>
                                      <?php if(!empty($value->side_sill)){?><tr><th>Side Sill Garnish</th><td><?php echo $value->side_sill; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_windshield)){?><tr><th>Rear Windshield Defogger</th><td><?php echo $value->rear_windshield; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_wiper)){?><tr><th>Rear Wipers</th><td><?php echo $value->rear_wiper; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->front_grille)){?><tr><th>Front Grille</th><td><?php echo $value->front_grille; ?></td></tr><?php }?>
                                      <?php if(!empty($value->exhaust)){?><tr><th>Exhaust Pipe</th><td><?php echo $value->exhaust; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_mirror_adj)){?><tr><th>Door Mirror Adjustment</th><td><?php echo $value->door_mirror_adj; ?></td></tr><?php }?>
                                      <?php if(!empty($value->headlight_adj)){?><tr><th>Headlight Adjustment</th><td><?php echo $value->headlight_adj; ?></td></tr><?php }?>
                                      <?php if(!empty($value->headlight_auto)){?><tr><th>Headlight Auto On/Off</th><td><?php echo $value->headlight_auto; ?></td></tr><?php }?>
                                      <?php if(!empty($value->haot)){?><tr><th>Headlight Auto Off Timer</th><td><?php echo $value->haot; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->flg)){?><tr><th>Fog Lights Garnish</th><td><?php echo $value->flg; ?></td></tr><?php }?>
                                      <?php if(!empty($value->bumper)){?><tr><th>Bumper Skid Garnish</th><td><?php echo $value->bumper; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_sash)){?><tr><th>Door Sash Garnish</th><td><?php echo $value->door_sash; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-6" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->audio)){?><tr><th>Audio System</th><td><?php echo $value->audio; ?></td></tr><?php }?>
                                      <?php if(!empty($value->connectivity)){?><tr><th>Connectivity</th><td><?php echo $value->connectivity; ?></td></tr><?php }?>
                                      <?php if(!empty($value->speakers)){?><tr><th>Speakers</th><td><?php echo $value->speakers; ?></td></tr><?php }?>
                                      <?php if(!empty($value->aircondition)){?><tr><th>Airconditioning System</th><td><?php echo $value->aircondition; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sewpss)){?><tr><th>Smart Entry with Push Start System</th><td><?php echo $value->sewpss; ?></td></tr><?php }?>
                                      <?php if(!empty($value->tachometer)){?><tr><th>Tachometer & Speedometer</th><td><?php echo $value->tachometer; ?></td></tr><?php }?>
                                      <?php if(!empty($value->comsumption_meter)){?><tr><th>Fuel Consumption Meter / Fuel Level</th><td><?php echo $value->comsumption_meter; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trip_meter)){?><tr><th>Trip Meter / Range Computer</th><td><?php echo $value->trip_meter; ?></td></tr><?php }?>
                                      <?php if(!empty($value->accessory_socket)){?><tr><th>Accessory Socket (12V)</th><td><?php echo $value->accessory_socket; ?></td></tr><?php }?>
                                      <?php if(!empty($value->map_demo)){?><tr><th>Map & Dome Light</th><td><?php echo $value->map_demo; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_mirrow)){?><tr><th>Rear View Mirror</th><td><?php echo $value->rear_mirrow; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->ticket_holder)){?><tr><th>Sunvisors (Ticket Holder)</th><td><?php echo $value->ticket_holder; ?></td></tr><?php }?>
                                      <?php if(!empty($value->grab_rail)){?><tr><th>Grab Rail</th><td><?php echo $value->grab_rail; ?></td></tr><?php }?>
                                      <?php if(!empty($value->inner_door)){?><tr><th>Inner Door Handles</th><td><?php echo $value->inner_door; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_win)){?><tr><th>Power Windows</th><td><?php echo $value->power_win; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_door_locks)){?><tr><th>Power Door Locks</th><td><?php echo $value->power_door_locks; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->bottle_cup)){?><tr><th>Bottle & Cup Holders</th><td><?php echo $value->bottle_cup; ?></td></tr><?php }?>
                                      <?php if(!empty($value->temperature)){?><tr><th>Temperature</th><td><?php echo $value->temperature; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ambient_light)){?><tr><th>Ambient Light</th><td><?php echo $value->ambient_light; ?></td></tr><?php }?>
                                      <?php if(!empty($value->shift_knob)){?><tr><th>Shift Knob Materialshift_knob</th><td><?php echo $value->shift_knob; ?></td></tr><?php }?>
                                      <?php if(!empty($value->instrument_clu)){?><tr><th>Instrument Cluster</th><td><?php echo $value->instrument_clu; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cost_hanger)){?><tr><th>Coat Hanger</th><td><?php echo $value->cost_hanger; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->interior_color)){?><tr><th>Interior Color</th><td><?php echo $value->interior_color; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_trim_gar)){?><tr><th>Interior Trim Garnish</th><td><?php echo $value->interior_trim_gar; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trim_finish)){?><tr><th>Interior Trim Finish</th><td><?php echo $value->trim_finish; ?></td></tr><?php }?>
                                      <?php if(!empty($value->outlet_type)){?><tr><th>Outlet Type</th><td><?php echo $value->outlet_type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_trim)){?><tr><th>Interior Trim</th><td><?php echo $value->interior_trim; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_aircon)){?><tr><th>Rear Aircon Vents</th><td><?php echo $value->rear_aircon; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cargo_area)){?><tr><th>Cargo Area Light</th><td><?php echo $value->cargo_area; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sun_glass)){?><tr><th>Sun Glass Holder</th><td><?php echo $value->sun_glass; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sunvisor)){?><tr><th>Sunvisor</th><td><?php echo $value->sunvisor; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->smartphone)){?><tr><th>Smartphone Mirroring</th><td><?php echo $value->smartphone; ?></td></tr><?php }?>
                                      <?php if(!empty($value->display_cont)){?><tr><th>Display Contents</th><td><?php echo $value->display_cont; ?></td></tr><?php }?>
                                      <?php if(!empty($value->meter_color)){?><tr><th>Meter Color</th><td><?php echo $value->meter_color; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->air_control)){?><tr><th>Airconditioning Controls</th><td><?php echo $value->air_control; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_decor)){?><tr><th>Interior Decoration</th><td><?php echo $value->interior_decor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->foot_rest)){?><tr><th>Foot Rest</th><td><?php echo $value->foot_rest; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->console_pock)){?><tr><th>Console Pocket Light</th><td><?php echo $value->console_pock; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_pocket)){?><tr><th>Door Pockets</th><td><?php echo $value->door_pocket; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trunk_light)){?><tr><th>Trunk Light</th><td><?php echo $value->trunk_light; ?></td></tr><?php }?>     
                                      <?php if(!empty($value->front_center_armr)){?><tr><th>Front Center Armrest</th><td><?php echo $value->front_center_armr; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_seat_armr)){?><tr><th>Rear Seat Armrest</th><td><?php echo $value->rear_seat_armr; ?></td></tr><?php }?>                                       
                                      
                        </table>
                	</div>                	
                	
                	<div class="tab-pane" id="tabs-7" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->side_airbags)){?><tr><th>Side Airbags</th><td><?php echo $value->side_airbags; ?></td></tr><?php }?>
                                      <?php if(!empty($value->side_curtain)){?><tr><th>Side Curtain Airbags</th><td><?php echo $value->side_curtain; ?></td></tr><?php }?>
                                      <?php if(!empty($value->abs_sys)){?><tr><th>Anti-lock Braking System (ABS)</th><td><?php echo $value->abs_sys; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ebd)){?><tr><th>Electronic Brake-force Distribution (EBD)</th><td><?php echo $value->ebd; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_tailgate)){?><tr><th>Power Tailgate</th><td><?php echo $value->power_tailgate; ?></td></tr><?php }?>
                                      <?php if(!empty($value->vsa)){?><tr><th>Vehicle Stability Assist (VSA)</th><td><?php echo $value->vsa; ?></td></tr><?php }?>
                                      <?php if(!empty($value->multi_view)){?><tr><th>Multi-view Reverse Camera</th><td><?php echo $value->multi_view; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seatbelt)){?><tr><th>Seatbelt Reminder</th><td><?php echo $value->seatbelt; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sensor)){?><tr><th>Sensor</th><td><?php echo $value->sensor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->body_structure)){?><tr><th>Body Structure</th><td><?php echo $value->body_structure; ?></td></tr><?php }?>
                                      <?php if(!empty($value->child_safety)){?><tr><th>Child Safety Lock &Seat Anchor (ISOFIX)</th><td><?php echo $value->child_safety; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->ess)){?><tr><th>Emergency Stop Signal (ESS)</th><td><?php echo $value->ess; ?></td></tr><?php }?>
                                      <?php if(!empty($value->security_alarm)){?><tr><th>Security Alarm & Immobilizer</th><td><?php echo $value->security_alarm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->hsa)){?><tr><th>Hill Start Assist (HSA)</th><td><?php echo $value->hsa; ?></td></tr><?php }?>
                                      <?php if(!empty($value->keyless)){?><tr><th>Keyless Entry System</th><td><?php echo $value->keyless; ?></td></tr><?php }?>
                                      <?php if(!empty($value->walk_away)){?><tr><th>Walk Away Auto Lock</th><td><?php echo $value->walk_away; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->dual_srs)){?><tr><th>Dual SRS Airbags</th><td><?php echo $value->dual_srs; ?></td></tr><?php }?>
                                      <?php if(!empty($value->auto_door)){?><tr><th>Auto Door Lock/Unlock</th><td><?php echo $value->auto_door; ?></td></tr><?php }?>
                                      <?php if(!empty($value->front_passenger)){?><tr><th>Seatbelt Driver & Front Passenger</th><td><?php echo $value->front_passenger; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_seat)){?><tr><th>Seatbelt (Rear Seat)</th><td><?php echo $value->rear_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->agile_hand)){?><tr><th>Agile Handling Assist (AHA)</th><td><?php echo $value->agile_hand; ?></td></tr><?php }?>
                                      <?php if(!empty($value->driver_attention)){?><tr><th>Driver Attention Monitor</th><td><?php echo $value->driver_attention; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->watch_camera)){?><tr><th>Lane Watch Camera</th><td><?php echo $value->watch_camera; ?></td></tr><?php }?>
                                      <?php if(!empty($value->low_tire)){?><tr><th>Low Tire Pressure Warning</th><td><?php echo $value->low_tire; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>                	
                	
                	<div class="tab-pane" id="tabs-8" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->s_front)){?><tr><th>Front</th><td><?php echo $value->s_front; ?></td></tr><?php }?>
                                      <?php if(!empty($value->s_rear)){?><tr><th>Rear</th><td><?php echo $value->s_rear; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>                  	
                	
                    <div class="tab-pane" id="tabs-9" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->br_front)){?><tr><th>Front</th><td><?php echo $value->br_front; ?></td></tr><?php }?>
                                      <?php if(!empty($value->br_rear)){?><tr><th>Rear</th><td><?php echo $value->br_rear; ?></td></tr><?php }?>
                                      <?php if(!empty($value->parking_br)){?><tr><th>Parking Brake</th><td><?php echo $value->parking_br; ?></td></tr><?php }?>
                                      <?php if(!empty($value->br_hold)){?><tr><th>Auto Brake Hold (ABH)</th><td><?php echo $value->br_hold; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>     
                	
                    <div class="tab-pane" id="tabs-10" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->fr_seat)){?><tr><th>Front Seat</th><td><?php echo $value->fr_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->r_seat)){?><tr><th>Rear Seat (2nd Row)</th><td><?php echo $value->r_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seat_material)){?><tr><th>Seat Material</th><td><?php echo $value->seat_material; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seatback_pock)){?><tr><th>Seatback Pocket</th><td><?php echo $value->seatback_pock; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>     
                	
                    <div class="tab-pane" id="tabs-11" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->tire_size)){?><tr><th>Tire Size</th><td><?php echo $value->tire_size; ?></td></tr><?php }?>
                                      <?php if(!empty($value->wheel_size)){?><tr><th>Wheel Size and Type</th><td><?php echo $value->wheel_size; ?></td></tr><?php }?>
                                      <?php if(!empty($value->spare_tire)){?><tr><th>Spare Tire</th><td><?php echo $value->spare_tire; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>                 	
                </div>
            </div>
                
            <?php } else {?>  
 
            <div id="specification" class="row container model-spec fadeinTextup">
                <div class="container tap-title-main" >
                    <h1 class="head-titel-page">ព័ត៌មានបច្ចេកទេស</h1>
                    
                    <div class="tap-spec">
                        <ul class="nav nav-tabs" role="tablist">
                        	<li class="nav-item">
                        		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">ទំហំខ្នាតរថយន្ត</a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"> ម៉ាស៊ីន & ប្រអប់លេខ </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> ចង្កូត  </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab"> ប្រព្ធន័សន្សំសំចៃ </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab"> ផ្នែកខាងក្រៅ </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab"> ផ្នែកខាងក្នុង </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab"> ប្រព័ន្ធសុវត្ថិភាព </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab"> ប្រព្ធន័បូម </a>
                        	</li>
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab"> ប្រព្ធន័ហ្រ្វាំង </a>
                        	</li>                        	
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab"> កៅអី </a>
                        	</li>                  
                        	<li class="nav-item">
                        		<a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab"> កង់ & សំបក </a>                        	
                        	
                        </ul>
                    </div>
                </div>
        
                
                <div class="tab-content">
                	<div class="tab-pane active" id="tabs-1" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->lwh)){?><tr><th> បណ្តោយ, ទទឹង, កំពស់ (មម) </th><td><?php echo $value->lwh;?></td></tr><?php }?>
                                      <?php if(!empty($value->wheelbase)){?><tr><th> កំលាតកង់ (មម) </th><td><?php echo $value->wheelbase; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ground)){?><tr><th> កំពស់ពីដីទៅបាតឡាន </th><td><?php echo $value->ground; ?></td></tr><?php }?>
                                      <?php if(!empty($value->curb)){?><tr><th> ទំងន់ទទេ </th><td><?php echo $value->curb; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seating)){?><tr><th> ចំនួនកៅអី </th><td><?php echo $value->seating; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trunk)){?><tr><th> ទំហំឃ្លប់ក្រោយ </th><td><?php echo $value->trunk; ?></td></tr><?php }?>
                                      <?php if(!empty($value->turning)){?><tr><th> រង្វាស់កាំអប្បបរមាអាចបត់បាន (ម) </th><td><?php echo $value->turning; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-2" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->type)){?><tr><th> ប្រភេទម៉ាស៊ីន </th><td><?php echo $value->type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fss)){?><tr><th> ប្រព័ន្ធប្រេង </th><td><?php echo $value->fss; ?></td></tr><?php }?>
                                      <?php if(!empty($value->engine_dis)){?><tr><th> ទំហំស៊ីឡាំង (សម3) </th><td><?php echo $value->engine_dis; ?></td></tr><?php }?>
                                      <?php if(!empty($value->max_power)){?><tr><th> កំលាំងអតិបរមា (kW (PS)/rpm) </th><td><?php echo $value->max_power; ?></td></tr><?php }?>
                                      <?php if(!empty($value->max_tor)){?><tr><th> កំលាំងរមួល (Nm (kgm)/rpm) </th><td><?php echo $value->max_tor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->bore_stroke)){?><tr><th>Bore & Stroke(mm)</th><td><?php echo $value->bore_stroke; ?></td></tr><?php }?>
                                      <?php if(!empty($value->compression)){?><tr><th>Compression ratio(:1)</th><td><?php echo $value->compression; ?></td></tr><?php }?>
                                      <?php if(!empty($value->drive_wire)){?><tr><th>Drive-by-Wire</th><td><?php echo $value->drive_wire; ?></td></tr><?php }?>
                                      <?php if(!empty($value->transmission)){?><tr><th> ប្រព័ន្ធប្រអប់លេខ </th><td><?php echo $value->transmission; ?></td></tr><?php }?>
                                      <?php if(!empty($value->paddle_shift)){?><tr><th> លេខដៃ </th><td><?php echo $value->paddle_shift; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fuel_tank)){?><tr><th> ចំណុះធុងសាំង </th><td><?php echo $value->fuel_tank; ?></td></tr><?php }?>
                                      <?php if(!empty($value->emission)){?><tr><th> កំរិតសាំង </th><td><?php echo $value->emission; ?></td></tr><?php }?>
                                      <?php if(!empty($value->recommended)){?><tr><th> កំរិតសាំងដែរគួប្រើ </th><td><?php echo $value->recommended; ?></td></tr><?php }?>
                                      <?php if(!empty($value->drive_sys)){?><tr><th> ប្រព័ន្ធបើកបរ </th><td><?php echo $value->drive_sys; ?></td></tr><?php }?>    
                                      <?php if(!empty($value->remote_engine)){?><tr><th> បញ្ជាបញ្ឆេះពីចំងាយ </th><td><?php echo $value->remote_engine; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-3" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->gear_type)){?><tr><th> ដៃចង្កូត </th><td><?php echo $value->gear_type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_steering)){?><tr><th> ប្រព័ន្ធចង្កូត </th><td><?php echo $value->power_steering; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swm)){?><tr><th> ចង្កូតធ្វើអំពី </th><td><?php echo $value->swm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cruise_control)){?><tr><th> ប្រព័ន្ធកំណត់ល្បឿន </th><td><?php echo $value->cruise_control; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swc)){?><tr><th> ប្រព័ន្ធគ្រប់គ្រងAudio លើដៃចង្កូត </th><td><?php echo $value->swc; ?></td></tr><?php }?>
                                      <?php if(!empty($value->swa)){?><tr><th> ការសារេងចង្កូត </th><td><?php echo $value->swa; ?></td></tr><?php }?>
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-4" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->econ)){?><tr><th>Econ Button</th><td><?php echo $value->econ; ?></td></tr><?php }?>
                                      <?php if(!empty($value->eco)){?><tr><th>Eco-Coaching</th><td><?php echo $value->eco; ?></td></tr><?php }?>
                        </table>
                	</div>                	

                	<div class="tab-pane" id="tabs-5" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->headlight)){?><tr><th> ភ្លើងបំភ្លឺមុខ </th><td><?php echo $value->headlight; ?></td></tr><?php }?>
                                      <?php if(!empty($value->led)){?><tr><th> ភ្លើងបំភ្លឺថ្ងៃយប់ </th><td><?php echo $value->led; ?></td></tr><?php }?>
                                      <?php if(!empty($value->fog)){?><tr><th> ភ្លើងបំភ្លឺកាត់អ័ព្ទ </th><td><?php echo $value->fog; ?></td></tr><?php }?>
                                      <?php if(!empty($value->stsl)){?><tr><th> ភ្លើងស៊ីញ៉ូលើកញ្ចក់ជំហៀង </th><td><?php echo $value->stsl; ?></td></tr><?php }?>
                                      <?php if(!empty($value->tail)){?><tr><th> ស្តុបក្រោយ </th><td><?php echo $value->tail; ?></td></tr><?php }?>
                                      <?php if(!empty($value->hmsl)){?><tr><th>High-Mount Stop Lamp</th><td><?php echo $value->hmsl; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_hand)){?><tr><th> ព៌ណដៃទ្វា </th><td><?php echo $value->door_hand; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_mirror)){?><tr><th> ព៌ណកញ្ចក់ចំហៀង </th><td><?php echo $value->door_mirror; ?></td></tr><?php }?>
                                      <?php if(!empty($value->pfdm)){?><tr><th> កញ្ចក់ចំហៀងអាចក្តោបបាន </th><td><?php echo $value->pfdm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->antenna)){?><tr><th> អង់តែន </th><td><?php echo $value->antenna; ?></td></tr><?php }?>
                                      <?php if(!empty($value->front_wiper)){?><tr><th> ផ្លិតទឹកមុខ </th><td><?php echo $value->front_wiper; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->front_rear_bump)){?><tr><th> កាងមុខ & ក្រោយ </th><td><?php echo $value->front_rear_bump; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trailgate)){?><tr><th> កាងខ្យល </th><td><?php echo $value->trailgate; ?></td></tr><?php }?>
                                      <?php if(!empty($value->side_sill)){?><tr><th>Side Sill Garnish</th><td><?php echo $value->side_sill; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_windshield)){?><tr><th>Rear Windshield Defogger</th><td><?php echo $value->rear_windshield; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_wiper)){?><tr><th> ផ្លិតទឹកក្រោយ </th><td><?php echo $value->rear_wiper; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->front_grille)){?><tr><th> ប៉ាណាមុខ </th><td><?php echo $value->front_grille; ?></td></tr><?php }?>
                                      <?php if(!empty($value->exhaust)){?><tr><th>Exhaust Pipe</th><td><?php echo $value->exhaust; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_mirror_adj)){?><tr><th> កញ្ចក់ចំហៀង </th><td><?php echo $value->door_mirror_adj; ?></td></tr><?php }?>
                                      <?php if(!empty($value->headlight_adj)){?><tr><th> ចង្កៀងមុខ </th><td><?php echo $value->headlight_adj; ?></td></tr><?php }?>
                                      <?php if(!empty($value->headlight_auto)){?><tr><th> ភ្លើងបំភ្លឺមុខបិទបើកអូតូ </th><td><?php echo $value->headlight_auto; ?></td></tr><?php }?>
                                      <?php if(!empty($value->haot)){?><tr><th> ភ្លើងបំភ្លឺមុខបិទបើកអូតូ(កំណត់ពេល) </th><td><?php echo $value->haot; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->flg)){?><tr><th> ស៊ុមភ្លើងកាត់អាប់ </th><td><?php echo $value->flg; ?></td></tr><?php }?>
                                      <?php if(!empty($value->bumper)){?><tr><th>Bumper Skid Garnish</th><td><?php echo $value->bumper; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_sash)){?><tr><th>Door Sash Garnish</th><td><?php echo $value->door_sash; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>
                	
                	<div class="tab-pane" id="tabs-6" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->audio)){?><tr><th> ម៉ាញេ </th><td><?php echo $value->audio; ?></td></tr><?php }?>
                                      <?php if(!empty($value->connectivity)){?><tr><th> ការតភ្ជាប់របស់ម៉ាញេ </th><td><?php echo $value->connectivity; ?></td></tr><?php }?>
                                      <?php if(!empty($value->speakers)){?><tr><th> គ្រឿងបំពងសំលេង </th><td><?php echo $value->speakers; ?></td></tr><?php }?>
                                      <?php if(!empty($value->aircondition)){?><tr><th> ប្រព័ន្ធម៉ាស៊ីនត្រជាក់ </th><td><?php echo $value->aircondition; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sewpss)){?><tr><th> ស្មាតឃី </th><td><?php echo $value->sewpss; ?></td></tr><?php }?>
                                      <?php if(!empty($value->tachometer)){?><tr><th>Tachometer & Speedometer</th><td><?php echo $value->tachometer; ?></td></tr><?php }?>
                                      <?php if(!empty($value->comsumption_meter)){?><tr><th> កុងទ័រសាំង </th><td><?php echo $value->comsumption_meter; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trip_meter)){?><tr><th> កុងទ័រ </th><td><?php echo $value->trip_meter; ?></td></tr><?php }?>
                                      <?php if(!empty($value->accessory_socket)){?><tr><th> រន្ធភ្លើង (12V) </th><td><?php echo $value->accessory_socket; ?></td></tr><?php }?>
                                      <?php if(!empty($value->map_demo)){?><tr><th>Map & Dome Light</th><td><?php echo $value->map_demo; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_mirrow)){?><tr><th> កញ្ចក់មើលក្រោយ </th><td><?php echo $value->rear_mirrow; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->ticket_holder)){?><tr><th> របាំងការពារកំដៅថ្ងៃ </th><td><?php echo $value->ticket_holder; ?></td></tr><?php }?>
                                      <?php if(!empty($value->grab_rail)){?><tr><th>Grab Rail</th><td><?php echo $value->grab_rail; ?></td></tr><?php }?>
                                      <?php if(!empty($value->inner_door)){?><tr><th> ដៃទ្វាខាងក្នង </th><td><?php echo $value->inner_door; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_win)){?><tr><th> កញ្ចក់អូតូម៉ាទិច </th><td><?php echo $value->power_win; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_door_locks)){?><tr><th> ប្រព័ន្ធបញ្ជាចាក់សោរទ្វា </th><td><?php echo $value->power_door_locks; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->bottle_cup)){?><tr><th> ធ្នើរដាក់ដប & កែវ </th><td><?php echo $value->bottle_cup; ?></td></tr><?php }?>
                                      <?php if(!empty($value->temperature)){?><tr><th> សីតុណ្ហភាព </th><td><?php echo $value->temperature; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ambient_light)){?><tr><th>Ambient Light</th><td><?php echo $value->ambient_light; ?></td></tr><?php }?>
                                      <?php if(!empty($value->shift_knob)){?><tr><th> ចង្កឹះលេខ </th><td><?php echo $value->shift_knob; ?></td></tr><?php }?>
                                      <?php if(!empty($value->instrument_clu)){?><tr><th> កុនទ័រ </th><td><?php echo $value->instrument_clu; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cost_hanger)){?><tr><th>Coat Hanger</th><td><?php echo $value->cost_hanger; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->interior_color)){?><tr><th> ព៌ណខាងក្នុង </th><td><?php echo $value->interior_color; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_trim_gar)){?><tr><th> ផ្ទៃខាងក្នុង </th><td><?php echo $value->interior_trim_gar; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trim_finish)){?><tr><th>Interior Trim Finish</th><td><?php echo $value->trim_finish; ?></td></tr><?php }?>
                                      <?php if(!empty($value->outlet_type)){?><tr><th>Outlet Type</th><td><?php echo $value->outlet_type; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_trim)){?><tr><th>Interior Trim</th><td><?php echo $value->interior_trim; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_aircon)){?><tr><th> ម៉ាស៊ីត្រជាក់ក្រោយ </th><td><?php echo $value->rear_aircon; ?></td></tr><?php }?>
                                      <?php if(!empty($value->cargo_area)){?><tr><th> ភ្លើងបំភ្លឺឃ្លប់ក្រោយ </th><td><?php echo $value->cargo_area; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sun_glass)){?><tr><th> កន្លែងដាក់វែនតា </th><td><?php echo $value->sun_glass; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sunvisor)){?><tr><th> របាំងការពារកំដៅថ្ងៃ </th><td><?php echo $value->sunvisor; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->smartphone)){?><tr><th> ការតភ្ជាប់របស់ម៉ាញេ </th><td><?php echo $value->smartphone; ?></td></tr><?php }?>
                                      <?php if(!empty($value->display_cont)){?><tr><th> អេក្រង់បង្ហាញព៌តមាន </th><td><?php echo $value->display_cont; ?></td></tr><?php }?>
                                      <?php if(!empty($value->meter_color)){?><tr><th>Meter Color</th><td><?php echo $value->meter_color; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->air_control)){?><tr><th> ប្រព័ន្ធគ្រប់គ្រងម៉ាស៊ីត្រជាក់ </th><td><?php echo $value->air_control; ?></td></tr><?php }?>
                                      <?php if(!empty($value->interior_decor)){?><tr><th> ការឌីហ្សាញខាងក្នុង </th><td><?php echo $value->interior_decor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->foot_rest)){?><tr><th> កន្លែងដាក់ជើង </th><td><?php echo $value->foot_rest; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->console_pock)){?><tr><th>Console Pocket Light</th><td><?php echo $value->console_pock; ?></td></tr><?php }?>
                                      <?php if(!empty($value->door_pocket)){?><tr><th> កន្លែងដាក់សំភារៈ </th><td><?php echo $value->door_pocket; ?></td></tr><?php }?>
                                      <?php if(!empty($value->trunk_light)){?><tr><th> ភ្លើងកាបីន </th><td><?php echo $value->trunk_light; ?></td></tr><?php }?>     
                                      <?php if(!empty($value->front_center_armr)){?><tr><th> ធ្នើរដាក់ដៃនៅកណ្តាល </th><td><?php echo $value->front_center_armr; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_seat_armr)){?><tr><th> ធ្នើរដាក់ដៃនៅខាងក្រោយ </th><td><?php echo $value->rear_seat_armr; ?></td></tr><?php }?>                                       
                                      
                        </table>
                	</div>                	
                	
                	<div class="tab-pane" id="tabs-7" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->side_airbags)){?><tr><th> ពោងសុវត្ថិភាពកៅអី </th><td><?php echo $value->side_airbags; ?></td></tr><?php }?>
                                      <?php if(!empty($value->side_curtain)){?><tr><th> ពោងសុវត្ថិភាពចំហៀង </th><td><?php echo $value->side_curtain; ?></td></tr><?php }?>
                                      <?php if(!empty($value->abs_sys)){?><tr><th> ហ្រ្វាំងសុវត្ថិភាព ABS </th><td><?php echo $value->abs_sys; ?></td></tr><?php }?>
                                      <?php if(!empty($value->ebd)){?><tr><th> ហ្រ្វាំងសុវត្ថិភាព EBD </th><td><?php echo $value->ebd; ?></td></tr><?php }?>
                                      <?php if(!empty($value->power_tailgate)){?><tr><th> ប្រព័ន្ធបញ្ជាបិទបើកឃ្លប់ក្រោយ </th><td><?php echo $value->power_tailgate; ?></td></tr><?php }?>
                                      <?php if(!empty($value->vsa)){?><tr><th> ប្រព័ន្ធទប់លំនឹង VSA </th><td><?php echo $value->vsa; ?></td></tr><?php }?>
                                      <?php if(!empty($value->multi_view)){?><tr><th> កាមេរ៉ាក្រោយ </th><td><?php echo $value->multi_view; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seatbelt)){?><tr><th> ប្រព័ន្ធផ្តល់សញ្ញាខ្សែរក្រវាត់សុវត្ថិភាព </th><td><?php echo $value->seatbelt; ?></td></tr><?php }?>
                                      <?php if(!empty($value->sensor)){?><tr><th> សេនស័រ </th><td><?php echo $value->sensor; ?></td></tr><?php }?>
                                      <?php if(!empty($value->body_structure)){?><tr><th> តួរថយន្ត </th><td><?php echo $value->body_structure; ?></td></tr><?php }?>
                                      <?php if(!empty($value->child_safety)){?><tr><th> កន្លែងសំរាប់ធ្ពួកកៅអីក្មេង ISOFIX  </th><td><?php echo $value->child_safety; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->ess)){?><tr><th> ប្រព្ធន័ផ្តល់សញ្ញាពេលឈប់បន្ទាន់ (ESS) </th><td><?php echo $value->ess; ?></td></tr><?php }?>
                                      <?php if(!empty($value->security_alarm)){?><tr><th> ប្រព័ន្ធការពារការចំលងសោរ </th><td><?php echo $value->security_alarm; ?></td></tr><?php }?>
                                      <?php if(!empty($value->hsa)){?><tr><th> ប្រព្ធន័ទប់លំនឹងពេលឡើងចំណោទ </th><td><?php echo $value->hsa; ?></td></tr><?php }?>
                                      <?php if(!empty($value->keyless)){?><tr><th> ប្រព័ន្ធបើកទា្វឡានដោយមិនបាច់ប្រើតេឡេបញ្ជា </th><td><?php echo $value->keyless; ?></td></tr><?php }?>
                                      <?php if(!empty($value->walk_away)){?><tr><th> ប្រព័ន្ធចាក់សោរអូតូម៉ាទិចពេលដើរចេញពីឡាន </th><td><?php echo $value->walk_away; ?></td></tr><?php }?>   
                                      <?php if(!empty($value->dual_srs)){?><tr><th> ពោងសុវត្ថិភាពខាងមុខ </th><td><?php echo $value->dual_srs; ?></td></tr><?php }?>
                                      <?php if(!empty($value->auto_door)){?><tr><th> ប្រព្ធន័ចាក់សោរអូតូ </th><td><?php echo $value->auto_door; ?></td></tr><?php }?>
                                      <?php if(!empty($value->front_passenger)){?><tr><th> ខ្សែរក្រវ៉ាត់អ្នកបើកបរ និងអ្នករួមដំណើរ </th><td><?php echo $value->front_passenger; ?></td></tr><?php }?>
                                      <?php if(!empty($value->rear_seat)){?><tr><th> ខ្សែរក្រវ៉ាត់ខាងក្រោយ </th><td><?php echo $value->rear_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->agile_hand)){?><tr><th> ប្រព័ន្ធទប់លំនឹងពេលជាន់ហ្រ្វាំងលើផ្លូវកោង </th><td><?php echo $value->agile_hand; ?></td></tr><?php }?>
                                      <?php if(!empty($value->driver_attention)){?><tr><th> ប្រព័ន្ធផ្តល់សញ្ញាពេលអ្នកបើកបរងងុយដេក </th><td><?php echo $value->driver_attention; ?></td></tr><?php }?> 
                                      <?php if(!empty($value->watch_camera)){?><tr><th> កាមេរ៉ាខាងស្តាំ </th><td><?php echo $value->watch_camera; ?></td></tr><?php }?>
                                      <?php if(!empty($value->low_tire)){?><tr><th> សញ្ញាកង់ធូ </th><td><?php echo $value->low_tire; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>                	
                	
                	<div class="tab-pane" id="tabs-8" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->s_front)){?><tr><th> ខាងមុខ </th><td><?php echo $value->s_front; ?></td></tr><?php }?>
                                      <?php if(!empty($value->s_rear)){?><tr><th> ខាងក្រោយ </th><td><?php echo $value->s_rear; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>                  	
                	
                    <div class="tab-pane" id="tabs-9" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->br_front)){?><tr><th> ខាងមុខ </th><td><?php echo $value->br_front; ?></td></tr><?php }?>
                                      <?php if(!empty($value->br_rear)){?><tr><th> ខាងក្រោយ </th><td><?php echo $value->br_rear; ?></td></tr><?php }?>
                                      <?php if(!empty($value->parking_br)){?><tr><th> ហ្រ្វាំងដៃអេឡិចត្រូនិក </th><td><?php echo $value->parking_br; ?></td></tr><?php }?>
                                      <?php if(!empty($value->br_hold)){?><tr><th> ហ្រ្វាំងឈប់ស្តុប </th><td><?php echo $value->br_hold; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>     
                	
                    <div class="tab-pane" id="tabs-10" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->fr_seat)){?><tr><th> កៅអីខាងមុខ </th><td><?php echo $value->fr_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->r_seat)){?><tr><th> កៅអីខាងក្រោយ </th><td><?php echo $value->r_seat; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seat_material)){?><tr><th> កៅអី </th><td><?php echo $value->seat_material; ?></td></tr><?php }?>
                                      <?php if(!empty($value->seatback_pock)){?><tr><th> កៅអ្នករួមដំណើរខាងមុខ </th><td><?php echo $value->seatback_pock; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>     
                	
                    <div class="tab-pane" id="tabs-11" role="tabpanel">
                		<table style="width:100%" class="table-speci">
                                      <?php if(!empty($value->tire_size)){?><tr><th> ទំហំកង់ </th><td><?php echo $value->tire_size; ?></td></tr><?php }?>
                                      <?php if(!empty($value->wheel_size)){?><tr><th> ប្រភេទកង់ </th><td><?php echo $value->wheel_size; ?></td></tr><?php }?>
                                      <?php if(!empty($value->spare_tire)){?><tr><th> កង់សារគួ </th><td><?php echo $value->spare_tire; ?></td></tr><?php }?>
                                      
                        </table>
                	</div>  
                </div>
            </div> 
                
            <?php }
        } 
    } else{echo '<h3>Empty Specification!</h3>';}
    
}?>