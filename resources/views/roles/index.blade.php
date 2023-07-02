@extends('template')

@section('content')
<div class="row heading-bg">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="display: flex;">
            <h5 class="txt-dark">Role Management</h5>
        @can('role-create')
            <!-- <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a> -->
            <a href="{{ route('roles.create') }}" class="btn btn-primary" style="margin-bottom:10px;">Create New Role</a>

            @endcan
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
     <th width="280px">Action</th>
  </tr>
  </thead>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <!-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> -->
            @can('role-edit')
                <!-- <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a> -->
                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-default btn-icon-anim btn-sm btn-circle" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon-anim btn-sm btn-circle'] )  }}

                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}

@endsection