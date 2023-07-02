@extends('template')

@section('title', 'Team Management')

@section('content')

<style type="text/css">
    .width-200{width:216px;}
    nav{max-height: 60px;}
    .card-view.panel .panel-body{padding: 0;}
    .pagination {margin: 8px 0;}
    .pagination > li.active > a, .pagination > li.active > span {background: #4aa23c;}
    .open>.dropdown-menu {min-width: 228px;}
</style>

<!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Team</h5>
            <a href="{{url('admin/team/create?lang='.$lang)}}" class="btn btn-primary" style="margin-bottom:10px;">Add Team</a>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="active"><span>Team</span></li>
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
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default">Bulk Actions</button>
                                    <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Draft</a></li>
                                        <li><a href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 left-12 width-200">
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" style="margin-left: 2px;width: 132px;">All Months</button>
                                    <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">January 2021</a></li>
                                        <li><a href="javascript:void(0)">February 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 left-12 width-200">
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default">Display by Status</button>
                                    <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Publish</a></li>
                                        <li><a href="javascript:void(0)">Draft</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 pull-right">                            
                           
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
                                        <th><input id="checkbox3" type="checkbox"><label for="checkbox3"></label></th> 
                                        <th>Name</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th class="center">Status</th>
                                        <th class="center">Actions</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><input id="checkbox3" type="checkbox"><label for="checkbox3"></label></th> 
                                        <th>Name</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th class="center">Status</th>
                                        <th class="center">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

			                   @if($team->count()>0)
                                @foreach($team as $team)
                                    <tr>
                                        <td>
                                            <input id="team-{{ $team->id }}" type="checkbox"><label for="checkbox3"></label>
                                        </td>
                                        <td><a href="{{URL('').'/'.$lang.'/'.$team->slug}}" target="_blank" class="page-title" title="{{ $team->name }}">
                                            @php
                                            $truncated = Str::of($team->name)->limit(70);
                                            @endphp
                                            {{$truncated}}
                                        </a></td>
                                        <th>{{$team->lang_code}}</th>
                                        <th>{{ $team->user->name }}</th>
                                        <td>Last Modified <br>
                                            @php
                                                $updated_date = $team->updated_at;
                                                echo date("d-M-Y").' at '.date("h:i a", strtotime($updated_date));
                                            @endphp
                                        </td>
                                        <th class="center">
                                            @php
                                                $default = $team->is_published;
                                            @endphp
                                            @if($default == 1)
                                                <span class="label label-success">Published</span>                                                
                                            @else
                                                <span class="label label-warning">Draft</span>
                                            @endif
                                        </th>

                                        <td class="text-nowrap center">
                                            <a href="{{url('admin/team/copy')}}/{{$team->id}}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Duplicate"><i class="fa fa-copy" aria-hidden="true"></i></a>
                                            <a href="{{ route('team.edit', $team->id) }}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Setting"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="team" data-name="{{$team->name}}" data-id="{{$team->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>

                                        </td>
                                    </tr>
                                @endforeach

                                 @else
									  

			                          <tr>
			                          	<th colspan="8" class="text-center">There is no Spare Part Add yet.</th>
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
                            
                        </div>
            </div>

        </div>
    </div>
</div>
<!-- /Row -->
@endsection