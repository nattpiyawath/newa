@extends('template')

@section('title', 'Edit - '.$project->pro_title)

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit - {{$project->pro_title}}</h3>
        </div>
        <div class="panel-body">
            
            @if($errors->any())
                <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </div>
            @endif

            @include('admin.projects.form')
        
            <!-- Confirm Dialog-->

        <a class="btn btn-danger" data-toggle="modal" href='#modal-id'>Delete</a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirm Box</h4>
                  </div>
                  <div class="modal-body">
                  <p>Are you sure you want to delete {{$project->pro_title}}?</p>
                  </div>
                  <div class="modal-footer">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['projects.destroy',$project->id], 'class' => 'form-horizontal']) !!}
                    
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    
                    {!! Form::close() !!}
                    
                  </div>
                </div>
              </div>
            </div>

         </div>    
    </div>
@endsection