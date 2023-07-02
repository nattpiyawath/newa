@extends('template')

@section('title', 'Slide Management')

@section('content')

<style type="text/css">
    .width-200{width:216px;}
    nav{max-height: 60px;}
    .panel.panel-default.card-view{max-width: 100%;}
    .card-view.panel .panel-body{padding: 0;}
    .pagination {margin: 8px 0;}
    .pagination > li.active > a, .pagination > li.active > span {background: #4aa23c;}
    .open>.dropdown-menu {min-width: 228px;}
</style>

<!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Slide</h5>
            <a href="{{url('admin/slide/create?lang='.$lang)}}" class="btn btn-primary" style="margin-bottom:10px;">New Slide</a>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                <li class="active"><span>Slide</span></li>
             </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
<!-- /Title -->

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">

            <div class="panel-wrapper collapse in">
                <div class="panel-body" style="padding-top: 0;">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover display pb-30" >
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Image Mobile</th>
                                        <th>Image Desktop</th>
                                        <th>Title</th>
                                        <th><i class="fa fa-globe" aria-hidden="true"></i></th>
                                        <th>Date</th>
                                        <th class="center">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                            @if($slides->count())
                                @foreach($slides as $slide)

                                    <tr>
                                        <th>{{$slide->order}}</th>
                                         <th>
                                        @php 
                                            $header_img = $slide->Img_mobile;
                                        @endphp

                                        @if ($header_img != '')
                                            <img class="mobile-image" id="mobile-image" width="100" src="{{$myStorage.$slide->Img_mobile}}"/>
                                                                  
                                        @else
                                            <img class="mobile-image" id="mobile-image" width="100" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                        @endif

                                        </th>
                                        <th>
                                        @php 
                                            $header_img = $slide->slide_img;
                                        @endphp

                                        @if ($header_img != '')
                                            <img class="cover-image" id="cover-image" width="450" src="{{$myStorage.$slide->slide_img}}"/>
                                                                  
                                        @else
                                            <img class="cover-image" id="cover-image" width="450" src="{{ URL('assets/pagebuilder/images') }}/cover-1920x400.jpg"/>
                                        @endif

                                        </th>
                                        <td>
                                            
                                            @php
                                            $truncated = Str::of($slide->title)->limit(50);
                                            @endphp
                                            {{$truncated}}

                                        </td>
                                        <th>{{$slide->lang_code}}</th>
                                        <td>Last Modified <br>
                                            @php
                                                $updated_date = $slide->updated_at;
                                                echo date("d-M-Y").' at '.date("h:i a", strtotime($updated_date));
                                            @endphp
                                        </td>

                                        <td class="text-nowrap center">
                                            <a href="{{ route('slide.edit', $slide->id) }}?lang={{$lang}}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle btn-delete" data-toggle="tooltip" data-type="slide" data-name="{{$slide->id}}" data-id="{{$slide->id}}" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>

                                        </td>
                                    </tr>
                                 @endforeach

                            @else 
                                      <tr>
                                        <th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">
                                            No Slide Created Yet!
                                        </th>
                                      </tr>

                            @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection