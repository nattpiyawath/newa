@extends('template')

@section('title', 'Types Management')

@section('content')

<style type="text/css">
    .width-200{width:216px;}
    nav{max-height: 60px;}
    .panel.panel-default.card-view{max-width: 1000px;}
    .card-view.panel .panel-body{padding: 0;}
    .pagination {margin: 8px 0;}
    .pagination > li.active > a, .pagination > li.active > span {background: #4aa23c;}
    .open>.dropdown-menu {min-width: 228px;}
</style>

<!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Types</h5>
            <a href="{{url('admin/types/create?lang='.$lang)}}" class="btn btn-primary" style="margin-bottom:10px;">Add Types</a>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="active"><span>Types</span></li>
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
                    <div class="row" style="padding-left: 12px;">
                        <div class="col-sm-2 left-12 width-200">
                        </div>
                        <div class="col-sm-2 left-12 width-200">

                        </div>
                        <div class="col-sm-2 left-12 width-200">
                        </div>

                        <div class="col-sm-6 pull-right">                            
                            {{ $types->links() }}
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
                                        <th>Types</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Date</th>
                                        <th class="center">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                            @if($types->count())
						 		@foreach($types as $type)

                                    <tr>
                                        <td><a href="#" target="_blank" class="page-title" title="{{ $type->name }}">
                                            {{ $type->type }}
                                        </a></td>
                                        <th>{{$type->lang_code}}</th>
                                        <td>Last Modified <br>
                                            @php
                                                $updated_date = $type->updated_at;
                                                echo date("d-M-Y").' at '.date("h:i a", strtotime($updated_date));
                                            @endphp
                                        </td>

                                        <td class="text-nowrap center">
                                            <a href="#" target="_blank" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{ route('types.edit', $type->id) }}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="type" data-name="{{$type->type}}" data-id="{{$type->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>

                                        </td>
                                    </tr>
								 @endforeach

							@else 
		                              <tr>
		                              	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">
		                              		No Types Created Yet!
		                              	</th>
		                              </tr>

							@endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                        <div class="col-sm-6 left-12">
                            <div class="form-group col-sm-3">
                            </div>
                        </div>
                        <div class="col-sm-4 pull-right">
                            {{ $types->links() }}
                        </div>
            </div>

        </div>
    </div>
</div>
<!-- /Row -->

<script>
		//Add Active to admin menu
		$('#award').attr('aria-expanded','true');
		$('#award').parent().addClass('active');
		$('#award').next().addClass('in');

</script>

@endsection