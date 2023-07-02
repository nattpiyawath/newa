@extends('template')

@section('content')
				
<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
            <h5 class="txt-dark">Posts</h5>
            <a href="{{url('/projects/create')}}" class="btn btn-primary" style="margin-bottom:10px;">New Post</a>
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
                            <div class="form-group col-sm-3">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Categories
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group col-sm-3" style="margin-left: 16px;">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Date
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#">Dec-2020</a></li>
                                    <li><a href="#">Nov-2020</a></li>
                                    <li><a href="#">Oct-2020</a></li>
                                    </ul>
                                </div>
                            </div   >
                        </div>
                        <div class="col-sm-4 pull-right">
                            <form id="search_form" role="search" class="top-nav-search">
                                <div class="input-group">
                                    <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                                    </span>
                                </div>
                            </form>
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
                                        <th>Title</th> 
                                        <th>Categories</th>
                                        <th>Date</th>                                       
                                        <th>Author</th>                                        
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title</th> 
                                        <th>Categories</th>
                                        <th>Date</th>                                       
                                        <th>Author</th>                                        
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>                                   

                                    @foreach ( $projects as $pro)
                                    
                                    <tr>
                                        <td>
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                        </label>
                                        <a href="{{url('/admin/projects', $pro->id)}}" target="_blank">{{$pro->pro_title}}</a>
                                        </td>
                                        <td>Cat 1</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td>Name</td>
                                        <td>
                                            <?php 
                                                $status = $pro->active;
                                                if($status == 1){
                                                    echo '<span class="label label-success">Published</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Unpublished</span>';
                                                }
                                            ?>                                            
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="{{url('admin/projects', $pro->id)}}/edit" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil"></i> </a>
                                            <a href="#" class="btn btn-danger btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" data-original-title="Delete"> <i class="fa icon-trash"></i> </a>                                        
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