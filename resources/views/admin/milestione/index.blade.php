@extends('template')

@section('content')

<style type="text/css">
    .width-200{width:216px;}
    nav{max-height: 60px;}
    .card-view.panel .panel-body{padding: 0;}
    .pagination {margin: 8px 0;}
    .pagination > li.active > a, .pagination > li.active > span {background: #4aa23c;}
    .open>.dropdown-menu {min-width: 228px;}
    .list-image {width: 55px;min-height: 40px;background-size: cover;background-position: center;}
    td.description {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 300px;
    }
</style>

<div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Training</h5>
            <a href="{{url('admin/milestione/create?lang='.$lang)}}" class="btn btn-success" style="margin-bottom:10px;">New Training</a>
        </div>
        <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="active"><span>Training</span></li>
        </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
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
                                    <button type="button" class="btn btn-default">All Months</button>
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
                                        <li><a href="javascript:void(0)">Draft</a></li>
                                        <li><a href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 pull-right">                            
                           {{$milestones->withQueryString()->links()}}
                        </div>
                    </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover display  pb-30" >
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Description</th>
                                        <th>Statue</th>
                                        <th>Active</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Description</th>
                                        <th>Statue</th>
                                        <th>Active</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ( $milestones as $milestone)
                                    
                                    <tr>
                                       
                                        <td>
                                            <div class="list-image" style="background-image: url(<?php echo $milestone->thumbnail ;?>);"><div>
                                        </td>
                                        <td>{{$milestone->title}}</td>
                                        <th>{{$milestone->lang_code}}</th>
                                        <td class="description">{{$milestone->description}}</td>
                                                                            
                                         <td>
                                            <?php 
                                                $status = $milestone->is_published;
                                                if($status == 1){
                                                    echo '<span class="label label-success">Published</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Unpublished</span>';
                                                }
                                            ?>                                            
                                        </td>

                                        <td>
                                            <a href="{{ route('milestione.edit', $milestone->id) }}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Setting"><i class="fa fa-cogs" aria-hidden="true"></i></a> 
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="milestione" data-name="{{$milestone->title}}" data-id="{{$milestone->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>
                                        </td>

                                    </tr>
                                           

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-sm-6 left-12">
                            <div class="form-group col-sm-3">
                            </div>
                        </div>
                        <div class="col-sm-4 pull-right">
                           {{$milestones->withQueryString()->links()}}
                        </div>
            </div>

            </div>
        </div>	
    </div>
</div>
</div>
</div>
<!-- /Row -->

@endsection