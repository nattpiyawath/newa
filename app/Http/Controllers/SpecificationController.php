<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Specification;
use App\Pages;

class SpecificationController extends Controller
{
    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specification = Specification::where('lang_code', $this->lang)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.specification.index')->with('specification',$specification);
        
        // $specification = Specification::orderBy('id', 'DESC')->get();
        // return view('admin.specification.index')
        //                                 ->with('specification',$specification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create() 
    {
        //return view('admin.specification.create');
        $specification_lang = Specification::where('lang_code', '!=' , $this->lang)->get();
        
        $pages = Pages::where('type', 'product')->where('lang_code', $this->lang)->get();
        return view('admin.specification.create')->with('pages',$pages)
                                                 ->with('specification',$specification_lang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            
        ]
        );

        $specification = new Specification();
        $specification->user_id = Auth::id();
        $specification->lang_code = $request->lang_code;
        $specification->page_id = $request->page_id;
        $specification->name = $request->name;
        
        $specification->lwh = $request->lwh;
        $specification->wheelbase = $request->wheelbase;
        $specification->ground = $request->ground;
        $specification->curb = $request->curb;
        $specification->seating = $request->seating;
        $specification->trunk = $request->trunk;
        $specification->turning = $request->turning;
        
        $specification->type = $request->type;
        $specification->fss = $request->fss;
        $specification->engine_dis = $request->engine_dis;
        $specification->max_power = $request->max_power;
        $specification->max_tor = $request->max_tor;
        $specification->bore_stroke = $request->bore_stroke;
        $specification->compression = $request->compression;
        $specification->drive_wire = $request->drive_wire;
        $specification->transmission = $request->transmission;
        $specification->paddle_shift = $request->paddle_shift;
        $specification->fuel_tank = $request->fuel_tank;
        $specification->emission = $request->emission;
        $specification->recommended = $request->recommended;
        $specification->drive_sys = $request->drive_sys;
        $specification->remote_engine = $request->remote_engine;
        
        $specification->gear_type = $request->gear_type;
        $specification->power_steering = $request->power_steering;
        $specification->swm = $request->swm;
        $specification->cruise_control = $request->cruise_control;
        $specification->swc = $request->swc;
        $specification->swa = $request->swa;
        
        $specification->econ = $request->econ;
        $specification->eco = $request->eco;
        
        $specification->headlight = $request->headlight;
        $specification->led = $request->led;
        $specification->fog = $request->fog;
        $specification->stsl = $request->stsl;
        $specification->tail = $request->tail;
        $specification->hmsl = $request->hmsl;
        $specification->door_hand = $request->door_hand;
        $specification->door_mirror = $request->door_mirror;
        $specification->pfdm = $request->pfdm;
        $specification->antenna = $request->antenna;
        $specification->front_wiper = $request->front_wiper;
        $specification->front_rear_bump = $request->front_rear_bump;
        $specification->trailgate = $request->trailgate;
        $specification->side_sill = $request->side_sill;
        $specification->rear_windshield = $request->rear_windshield;
        $specification->rear_wiper = $request->rear_wiper;
        $specification->front_grille = $request->front_grille;
        $specification->exhaust = $request->exhaust;
        $specification->door_mirror_adj = $request->door_mirror_adj;
        $specification->headlight_adj = $request->headlight_adj;
        $specification->headlight_auto = $request->headlight_auto;
        $specification->haot = $request->haot;
        $specification->flg = $request->flg;
        $specification->bumper = $request->bumper;
        $specification->door_sash = $request->door_sash;
        
        $specification->audio = $request->audio;
        $specification->connectivity = $request->connectivity;
        $specification->speakers = $request->speakers;
        $specification->aircondition = $request->aircondition;
        $specification->sewpss = $request->sewpss;
        $specification->tachometer = $request->tachometer;
        $specification->comsumption_meter = $request->comsumption_meter;
        $specification->trip_meter = $request->trip_meter;
        $specification->accessory_socket = $request->accessory_socket;
        $specification->map_demo = $request->map_demo;
        $specification->rear_mirrow = $request->rear_mirrow;
        $specification->ticket_holder = $request->ticket_holder;
        $specification->grab_rail = $request->grab_rail;
        $specification->inner_door = $request->inner_door;
        $specification->power_win = $request->power_win;
        $specification->power_door_locks = $request->power_door_locks;
        $specification->bottle_cup = $request->bottle_cup;
        $specification->temperature = $request->temperature;
        $specification->ambient_light = $request->ambient_light;
        $specification->shift_knob = $request->shift_knob;
        $specification->instrument_clu = $request->instrument_clu;
        $specification->cost_hanger = $request->cost_hanger;
        $specification->interior_color = $request->interior_color;
        $specification->interior_trim_gar = $request->interior_trim_gar;
        $specification->trim_finish = $request->trim_finish;
        $specification->outlet_type = $request->outlet_type;    
        $specification->interior_trim = $request->interior_trim;
        $specification->rear_aircon = $request->rear_aircon;
        $specification->cargo_area = $request->cargo_area;
        $specification->sun_glass = $request->sun_glass;
        $specification->sunvisor = $request->sunvisor;
        $specification->smartphone = $request->smartphone;
        $specification->display_cont = $request->display_cont;
        $specification->meter_color = $request->meter_color;
        $specification->air_control = $request->air_control;
        $specification->interior_decor = $request->interior_decor;
        $specification->foot_rest = $request->foot_rest;
        $specification->console_pock = $request->console_pock;
        $specification->door_pocket = $request->door_pocket;
        $specification->trunk_light = $request->trunk_light;
        $specification->front_center_armr = $request->front_center_armr;
        $specification->rear_seat_armr = $request->rear_seat_armr;

        $specification->side_airbags = $request->side_airbags;
        $specification->side_curtain = $request->side_curtain;        
        $specification->abs_sys = $request->abs_sys;
        $specification->ebd = $request->ebd;
        $specification->power_tailgate = $request->power_tailgate;
        $specification->vsa = $request->vsa;
        $specification->multi_view = $request->multi_view;
        $specification->seatbelt = $request->seatbelt;
        $specification->sensor = $request->sensor;
        $specification->body_structure = $request->body_structure;
        $specification->child_safety = $request->child_safety;
        $specification->ess = $request->ess;
        $specification->security_alarm = $request->security_alarm;
        $specification->hsa = $request->hsa;
        $specification->keyless = $request->keyless;
        $specification->walk_away = $request->walk_away;
        $specification->dual_srs = $request->dual_srs;
        $specification->auto_door = $request->auto_door;
        $specification->front_passenger = $request->front_passenger;
        $specification->rear_seat = $request->rear_seat;
        $specification->agile_hand = $request->agile_hand;
        $specification->driver_attention = $request->driver_attention;
        $specification->watch_camera = $request->watch_camera;
        $specification->low_tire = $request->low_tire;
        
        $specification->s_front = $request->s_front;
        $specification->s_rear = $request->s_rear;
        
        $specification->br_front = $request->br_front;
        $specification->br_rear = $request->br_rear;
        $specification->parking_br = $request->parking_br; 
        $specification->br_hold = $request->br_hold;
    
        $specification->fr_seat = $request->fr_seat;  
        $specification->r_seat = $request->r_seat;
        $specification->seat_material = $request->seat_material;
        $specification->seatback_pock = $request->seatback_pock;
        
        $specification->tire_size = $request->tire_size;
        $specification->wheel_size = $request->wheel_size;
        $specification->spare_tire = $request->spare_tire;
        
        $specification->save();

        Session::flash('message', 'Specification has been Add!');
        // return redirect()->route('merchant.index');
        return redirect('admin/specification/'.$specification->id.'/edit?lang='.$request->lang_code);
    }


    public function duplicate($id){
        $copypage = Specification::find($id);
        $newTask = $copypage->replicate();
        $newTask->save();

        $getTitle = Specification::getTitle($newTask->id);
        $getTitle = $getTitle.'-Copy';
        
        $update_title = Specification::where('id', $newTask->id)->update(array('name' => $getTitle));

        if($update_title){
            //return redirect('admin/pages')->with('message','Page has been Duplicated!');
            return redirect('admin/specification/?lang='.$this->lang)->with('message','Specification has been Duplicated!');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specification = Specification::find($id);
        $specification_lang = Specification::where('lang_code', '!=', $this->lang)->get();
        $pages = Pages::where('lang_code', $this->lang)->get();
        return view('admin.specification.edit', ['specification_lang'=>$specification_lang, 'specification'=>$specification, 'pages'=>$pages]);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => 'required',
            
        ]
        );

        $specification = Specification::findOrFail($id);
        $specification->user_id = Auth::id();
        $specification->lang_code = $request->lang_code;
        $specification->page_id = $request->page_id;
        $specification->name = $request->name;
        
        $specification->lwh = $request->lwh;
        $specification->wheelbase = $request->wheelbase;
        $specification->ground = $request->ground;
        $specification->curb = $request->curb;
        $specification->seating = $request->seating;
        $specification->trunk = $request->trunk;
        $specification->turning = $request->turning;
        
        $specification->type = $request->type;
        $specification->fss = $request->fss;
        $specification->engine_dis = $request->engine_dis;
        $specification->max_power = $request->max_power;
        $specification->max_tor = $request->max_tor;
        $specification->bore_stroke = $request->bore_stroke;
        $specification->compression = $request->compression;
        $specification->drive_wire = $request->drive_wire;
        $specification->transmission = $request->transmission;
        $specification->paddle_shift = $request->paddle_shift;
        $specification->fuel_tank = $request->fuel_tank;
        $specification->emission = $request->emission;
        $specification->recommended = $request->recommended;
        $specification->drive_sys = $request->drive_sys;
        $specification->remote_engine = $request->remote_engine;
        
        $specification->gear_type = $request->gear_type;
        $specification->power_steering = $request->power_steering;
        $specification->swm = $request->swm;
        $specification->cruise_control = $request->cruise_control;
        $specification->swc = $request->swc;
        $specification->swa = $request->swa;
        
        $specification->econ = $request->econ;
        $specification->eco = $request->eco;
        
        $specification->headlight = $request->headlight;
        $specification->led = $request->led;
        $specification->fog = $request->fog;
        $specification->stsl = $request->stsl;
        $specification->tail = $request->tail;
        $specification->hmsl = $request->hmsl;
        $specification->door_hand = $request->door_hand;
        $specification->door_mirror = $request->door_mirror;
        $specification->pfdm = $request->pfdm;
        $specification->antenna = $request->antenna;
        $specification->front_wiper = $request->front_wiper;
        $specification->front_rear_bump = $request->front_rear_bump;
        $specification->trailgate = $request->trailgate;
        $specification->side_sill = $request->side_sill;
        $specification->rear_windshield = $request->rear_windshield;
        $specification->rear_wiper = $request->rear_wiper;
        $specification->front_grille = $request->front_grille;
        $specification->exhaust = $request->exhaust;
        $specification->door_mirror_adj = $request->door_mirror_adj;
        $specification->headlight_adj = $request->headlight_adj;
        $specification->headlight_auto = $request->headlight_auto;
        $specification->haot = $request->haot;
        $specification->flg = $request->flg;
        $specification->bumper = $request->bumper;
        $specification->door_sash = $request->door_sash;
        
        $specification->audio = $request->audio;
        $specification->connectivity = $request->connectivity;
        $specification->speakers = $request->speakers;
        $specification->aircondition = $request->aircondition;
        $specification->sewpss = $request->sewpss;
        $specification->tachometer = $request->tachometer;
        $specification->comsumption_meter = $request->comsumption_meter;
        $specification->trip_meter = $request->trip_meter;
        $specification->accessory_socket = $request->accessory_socket;
        $specification->map_demo = $request->map_demo;
        $specification->rear_mirrow = $request->rear_mirrow;
        $specification->ticket_holder = $request->ticket_holder;
        $specification->grab_rail = $request->grab_rail;
        $specification->inner_door = $request->inner_door;
        $specification->power_win = $request->power_win;
        $specification->power_door_locks = $request->power_door_locks;
        $specification->bottle_cup = $request->bottle_cup;
        $specification->temperature = $request->temperature;
        $specification->ambient_light = $request->ambient_light;
        $specification->shift_knob = $request->shift_knob;
        $specification->instrument_clu = $request->instrument_clu;
        $specification->cost_hanger = $request->cost_hanger;
        $specification->interior_color = $request->interior_color;
        $specification->interior_trim_gar = $request->interior_trim_gar;
        $specification->trim_finish = $request->trim_finish;
        $specification->outlet_type = $request->outlet_type;    
        $specification->interior_trim = $request->interior_trim;
        $specification->rear_aircon = $request->rear_aircon;
        $specification->cargo_area = $request->cargo_area;
        $specification->sun_glass = $request->sun_glass;
        $specification->sunvisor = $request->sunvisor;
        $specification->smartphone = $request->smartphone;
        $specification->display_cont = $request->display_cont;
        $specification->meter_color = $request->meter_color;
        $specification->air_control = $request->air_control;
        $specification->interior_decor = $request->interior_decor;
        $specification->foot_rest = $request->foot_rest;
        $specification->console_pock = $request->console_pock;
        $specification->door_pocket = $request->door_pocket;
        $specification->trunk_light = $request->trunk_light;
        $specification->front_center_armr = $request->front_center_armr;
        $specification->rear_seat_armr = $request->rear_seat_armr;

        $specification->side_airbags = $request->side_airbags;
        $specification->side_curtain = $request->side_curtain;        
        $specification->abs_sys = $request->abs_sys;
        $specification->ebd = $request->ebd;
        $specification->power_tailgate = $request->power_tailgate;
        $specification->vsa = $request->vsa;
        $specification->multi_view = $request->multi_view;
        $specification->seatbelt = $request->seatbelt;
        $specification->sensor = $request->sensor;
        $specification->body_structure = $request->body_structure;
        $specification->child_safety = $request->child_safety;
        $specification->ess = $request->ess;
        $specification->security_alarm = $request->security_alarm;
        $specification->hsa = $request->hsa;
        $specification->keyless = $request->keyless;
        $specification->walk_away = $request->walk_away;
        $specification->dual_srs = $request->dual_srs;
        $specification->auto_door = $request->auto_door;
        $specification->front_passenger = $request->front_passenger;
        $specification->rear_seat = $request->rear_seat;
        $specification->agile_hand = $request->agile_hand;
        $specification->driver_attention = $request->driver_attention;
        $specification->watch_camera = $request->watch_camera;
        $specification->low_tire = $request->low_tire;
        
        $specification->s_front = $request->s_front;
        $specification->s_rear = $request->s_rear;
        
        $specification->br_front = $request->br_front;
        $specification->br_rear = $request->br_rear;
        $specification->parking_br = $request->parking_br; 
        $specification->br_hold = $request->br_hold;
    
        $specification->fr_seat = $request->fr_seat;
        $specification->r_seat = $request->r_seat;
        $specification->seat_material = $request->seat_material;
        $specification->seatback_pock = $request->seatback_pock;
        
        $specification->tire_size = $request->tire_size;
        $specification->wheel_size = $request->wheel_size;
        $specification->spare_tire = $request->spare_tire;
        
        
        $specification->save();

        Session::flash('message', 'Specification has updated Successfully!');
        // return redirect()->route('merchant.index');
        return redirect('admin/specification/'.$specification->id.'/edit?lang='.$request->lang_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specification = Specification::find($id);
        $specification->delete();
        Session::flash('success', 'You succesfully deleted a Specification.');
        return redirect('admin/specification?lang='.$this->lang)->with('message','Specification has been deleted!');
    }
}
