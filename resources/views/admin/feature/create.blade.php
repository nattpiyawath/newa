@extends('template')
@section('Title', 'Create A Feature')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Feature - create</div>
            <div class="card-body">
               
               <div class="table-responsive">
                    {!! Form::open(['route' => 'feature.store']) !!}

                    <div class="box-body">

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                           {!! Form::label('Title') !!}
                           {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                           @if ($errors->has('title'))
                              <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('description')) has-error @endif">
                           {!! Form::label('Description') !!}
                           {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                           @if ($errors->has('description'))
                              <span class="help-block">{!! $errors->first('description') !!}</span>@endif
                        </div>

                        <div class="form-group">
                                <label class="control-label mb-10">Select Page</label>
                                <select class="form-control" data-placeholder="Select Discount" name="discount_id">
                                    
                                    <option value="0">Select...</option>
   
                                 </select>
                           </div>

                     </div>

                    {!! Form::close() !!}
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@endsection