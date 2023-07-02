@extends('template')

@section('title', 'Languages Management')

@section('content')
				
<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Languages</h5>
            <a href="{{url('admin/locale/create')}}" class="btn btn-primary" style="margin-bottom:10px;">New Language</a>
		</div>
		<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>data-table</span></li>
		</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading" style="padding-bottom: 2px!important;">
                    <div class="row">
                        <div class="col-sm-6 left-12">
                            <div class="form-group col-sm-3">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bulk Actions
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="#">Publish</a></li>
                                    <li><a href="#">Unpublish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 pull-right">
                            
                        </div>
                    </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body" style="padding-top: 0;">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover display pb-30" >
                                <thead>
                                    <tr>
                                        <th>Code</th> 
                                        <th>Display Name</th>
                                        <th>Icon</th>                                        
                                        <th>Author</th>
                                        <th>DATE</th>
                                        <th>Status</th>
                                        <th>Default</th>                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Code</th> 
                                        <th>Display Name</th>
                                        <th>Icon</th>                                        
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Default</th>                                        
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ( $langs as $lg)
                                    
                                    <tr>
                                        <td>
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                        </label>
                                        {{$lg->lang_code}}
                                        </td>
                                        <td>{{$lg->lang_name}}</td>
                                        <th><img width="30" src="{{$lg->lang_icon}}"></th>                             
                                        <td>{{\App\User::findOrFail($lg->user_id)->name}}</td>
                                        <td>
                                            Last Modified <br>
                                            @php
                                                $updated_date = $lg->updated_at;
                                                echo date("d-M-Y").' at '.date("h:i a", strtotime($updated_date));
                                            @endphp
                                        </td>
                                        <td>
                                            @php
                                                $status = $lg->active;
                                            @endphp
                                            @if($status == 1)
                                                <span class="label label-success">Active</span>                                                
                                            @else
                                                <span class="label label-warning">Inactive</span>
                                            @endif
                                        </td>
                                        <th>
                                            @php
                                                $default = $lg->default;
                                            @endphp
                                            @if($default == 1)
                                                <span class="label label-success">Yes</span>                                                
                                            @else
                                                <span class="label label-warning">No</span>
                                            @endif
                                        </th>
                                        <td class="text-nowrap">
                                            <a href="{{url('/admin/locale', $lg->id)}}/edit" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil"></i> </a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="locale" data-name="{{$lg->lang_name}}" data-id="{{$lg->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection