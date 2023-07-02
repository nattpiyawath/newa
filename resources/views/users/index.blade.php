
@extends('template')

@section('content')

<div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 admin-head-title">
        <div class="pull-left" style="display: flex;">
            <h5 class="txt-dark">Users Management</h5>
            <a href="{{ route('users.create') }}" class="btn btn-primary" style="margin-bottom:10px;">New Users</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table style="background:#fff;" class="table table table-hover display pb-30">
<thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    </thead> 
    @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
        </td>
        <td>
            <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
            <!-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> -->
           <a href="{{ route('users.edit',$user->id) }}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon-anim btn-sm btn-circle'] )  }}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    <thead> 
</table>


{!! $data->render() !!}

@endsection