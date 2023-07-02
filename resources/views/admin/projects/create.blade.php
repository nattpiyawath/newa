@extends('template')

@section('Title', 'Create A Project')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Create A Project</h3>
        </div>
        <div class="panel-body">
            
            @if($errors->any())
                <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </div>
            @endif

            {!! Form::open(['url' => 'admin/projects']) !!}
                <div class="form-group">
                    {{Form::label('pro_title','Project Name')}}
                    {{Form::text('pro_title',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('pro_slug','Project Slug')}}
                        {{Form::text('pro_slug',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('pro_remark','Remark')}}
                        {{Form::textarea('pro_remark',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('active','Active')}}
                        {{Form::checkbox('active', 1)}}
                </div>
                <div class="form-group">
                        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection