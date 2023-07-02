@extends('template')

@section('Title', 'Create A Careers')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Careers - create</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'careers.store']) !!}
                        
                            {{ csrf_field() }}
                             
                        <div class="box-body">
                            
                                <input type="hidden" name="lang_code" value="{{$lang}}">
                             
                                <div class="col-md-3"> 
                                    <div class="form-group">
                                        <label for="select-country">Translate Of </label>

                                            <select class="form-control selectpicker" id="select-page" data-live-search="true" name="translate_id">

                                                <option value="0">Select...</option>
                                                    
                                                    @foreach($careers as $pg)
                                                        <option data-tokens="{{$pg->title}}" value="{{$pg->slug}}">{{$pg->title}}</option>
                                                            @endforeach
                                                        </select>

                                                    <script type="text/javascript">
                                                                        
                                                        $(function() {
                                                            $('.selectpicker').selectpicker();
                                                        });

                                                     </script>
                                    </div>
                                </div>

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                {!! Form::label('Job Title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                                @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('slug')) has-error @endif">
                                {!! Form::label('Job Slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-text', 'placeholder' => 'Slug']) !!}
                                @if ($errors->has('slug'))
                                    <span class="help-block">{!! $errors->first('slug') !!}</span>@endif
                            </div>
                                                                    <script type="text/javascript">
                                                                        // /* Encode string to slug */
                                                                            function convertToSlug( str ) {
                                                                                
                                                                              //replace all special characters | symbols with a space
                                                                              str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
                                                                                
                                                                              // trim spaces at start and end of string
                                                                              str = str.replace(/^\s+|\s+$/gm,'');
                                                                                
                                                                              // replace space with dash/hyphen
                                                                              str = str.replace(/\s+/g, '-');
                                                                              document.getElementById("slug-text").setAttribute("value", str);
                                                                              //return str;
                                                                            }
                                                                    </script>

                            

                            <div class="form-group @if($errors->has('location')) has-error @endif">
                                {!! Form::label('Location') !!}
                                {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location']) !!}
                                @if ($errors->has('location'))
                                    <span class="help-block">{!! $errors->first('location') !!}</span>@endif
                            </div>                           
                            
                            <div class="form-group @if($errors->has('position')) has-error @endif">
                                {!! Form::label('Position') !!}
                                {!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Position']) !!}
                                @if ($errors->has('position'))
                                    <span class="help-block">{!! $errors->first('position') !!}</span>@endif
                            </div>    

                            <div class="form-group @if($errors->has('department')) has-error @endif">
                                {!! Form::label('Department') !!}
                                {!! Form::text('department', null, ['class' => 'form-control', 'placeholder' => 'Department']) !!}
                                @if ($errors->has('department'))
                                    <span class="help-block">{!! $errors->first('department') !!}</span>@endif
                            </div>     

                            <div class="form-group @if($errors->has('deadline')) has-error @endif">
                                {!! Form::label('Deadline') !!}
                                {{ Form::date('deadline', new \DateTime(), ['class' => 'form-control']) }}

                                @if ($errors->has('deadline'))
                                    <span class="help-block">{!! $errors->first('deadline') !!}</span>@endif
                            </div>                                                                            

                            <div class="form-group">
                                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                            </div>   

                            <div class="form-group @if($errors->has('details')) has-error @endif">
                               <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                                    <label class="control-label mb-10">Description</label>
                                        <textarea id="editor" class="ckeditor form-control" name="description"></textarea>
                                            <script>
                                                 ClassicEditor
                                                 .create( document.querySelector( '#editor' ) )
                                                  .then( editor => {
                                                        console.log( editor );
                                                       editor.ui.view.editable.element.style.height = '200px';
                                                        } )
                                                     .catch( error => {
                                                        console.error( error );
                                                    } );
                                             </script>
                            </div> 
                        </div>
                        <div class="box-footer">
                            {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                            <a class="btn btn-primary btn-close" href="{{url('careers')}}">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
