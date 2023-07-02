@extends('template')

@section('title', 'Slider Management')

@section('content')

@if(isset($_GET['type']))
    <?php $type = $_GET['type'];?>
@else
    <?php $type = 'Post Type';?>
@endif

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
            <h5 class="txt-dark">Slider</h5>
            <a href="{{url('admin/gallery/create?lang='.$lang)}}" class="btn btn-primary" style="margin-bottom:10px;">Add Slider</a>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="active"><span>Slider</span></li>
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
                                    <button type="button" class="btn btn-default" style="margin-left: 2px;width: 132px;">{{$type}}</button>
                                    <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('admin/gallery?type=page&lang='.$lang)}}">Page</a></li>
                                        <li><a href="{{url('admin/gallery?type=product&lang='.$lang)}}">Product</a></li>
                                        <li><a href="{{url('admin/gallery?type=news&lang='.$lang)}}">News</a></li>
                                        <li><a href="{{url('admin/gallery?type=events&lang='.$lang)}}">Events</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 left-12 width-200">
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" style="margin-left: 2px;width: 132px;">Slide Layout</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('admin/gallery?type=page&lang='.$lang)}}">Page</a></li>
                                        <li><a href="{{url('admin/gallery?type=product&lang='.$lang)}}">Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 left-12 width-200">
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default">
                                    @if(isset($_GET['status']))
                                        @if($_GET['status'] == 1)
                                            Published
                                        @else
                                            Draft
                                        @endif
                                    @else
                                    Display by Status
                                    @endif
                                </button>
                                    <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('admin/gallery?status=1&lang='.$lang)}}">Published</a></li>
                                        <li><a href="{{url('admin/gallery?status=0&lang='.$lang)}}">Draft</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 pull-right">                            
                            {{$gallery->withQueryString()->links()}}
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
                                        <th>Slider Name</th>
                                        <th>Layout</th>
                                        <th>Use For Post </th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th class="center">Status</th>
                                        <th class="center">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                            @if($gallery->count())
						 		@foreach($gallery as $val)

                                    <tr>
                                        <th><a class="page-title">{{$val->gallery_name}}</a></th>
                                        <th>
                                            <?php 
                                                if($val->layout == 1){ echo 'Banner 1, 2,...';} elseif($val->layout == 2){echo 'Product Feature';}else{echo 'Event Gallery';}
                                            ?>
                                        </th>
                                        <td>
                                            <?php 
                                                $id = $val->page_id;
                                                $page_slug = Helper::getPageSlug($id);
                                                $page_title = Helper::getPageTitle($id);
                                            ?>

                                            <a target="_blank" href="{{URL('').'/'.$lang.'/'.$page_slug}}" title="View {{$page_title}}">
                                            <?php 
                                                echo $page_title;
                                            ?>
                                        </a></td>
                                        
                                        <th>{{$val->user->name}}</th>
                                        <td>Last Modified <br>
                                            @php
                                                $updated_date = $val->updated_at;
                                                echo date("d-M-Y").' at '.date("h:i a", strtotime($updated_date));
                                            @endphp
                                        </td>
                                        
                                        <th class="center">
                                            @php
                                                $default = $val->is_published;
                                            @endphp
                                            @if($default == 1)
                                                <span class="label label-success">Published</span>                                                
                                            @else
                                                <span class="label label-warning">Draft</span>
                                            @endif
                                        </th>

                                        <td class="text-nowrap center">
                                            <a href="{{url('admin/gallery/copy')}}/{{$val->id}}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Duplicate"><i class="fa fa-copy" aria-hidden="true"></i></a>
                                            <a href="{{URL('').'/'.$lang.'/'.$page_slug}}" target="_blank" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{ route('gallery.edit', $val->id) }}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="gallery" data-name="{{$val->gallery_name}}" data-id="{{$val->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>

                                        </td>
                                    </tr>
								 @endforeach

							@else 
		                              <tr>
		                              	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">
		                              		No Slider Added Yet!
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
                            
                        </div>
            </div>

        </div>
    </div>
</div>
<!-- /Row -->

@endsection