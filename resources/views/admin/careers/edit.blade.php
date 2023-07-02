@extends('template')

@section('Title', 'Edit A Careers')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Careers - edit</div>

                    <div class="card-body">
                    {!! Form::open(['route' => ['careers.update', $careers->id], 'method' => 'PATCh']) !!}
                    
                    {{ csrf_field() }}
                    
                        <div class="box-body">

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                {!! Form::label('Job Title') !!}
                                {!! Form::text('title', $careers->title, ['class' => 'form-control', 'placeholder' => 'Job Title']) !!}
                                @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('slug')) has-error @endif">
                                {!! Form::label('Job Slug') !!}
                                {!! Form::text('slug', $careers->slug, ['class' => 'form-control', 'placeholder' => 'Job Slug']) !!}
                                @if ($errors->has('slug'))
                                    <span class="help-block">{!! $errors->first('slug') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('location')) has-error @endif">
                                {!! Form::label('Location') !!}
                                {!! Form::text('location', $careers->location, ['class' => 'form-control', 'placeholder' => 'Location']) !!}
                                @if ($errors->has('location'))
                                    <span class="help-block">{!! $errors->first('location') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('position')) has-error @endif">
                                {!! Form::label('Position') !!}
                                {!! Form::text('position', $careers->position, ['class' => 'form-control', 'placeholder' => 'Position']) !!}
                                @if ($errors->has('position'))
                                    <span class="help-block">{!! $errors->first('position') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('department')) has-error @endif">
                                {!! Form::label('Department') !!}
                                {!! Form::text('department', $careers->department, ['class' => 'form-control', 'placeholder' => 'Department']) !!}
                                @if ($errors->has('department'))
                                    <span class="help-block">{!! $errors->first('department') !!}</span>@endif
                            </div>                            

                            <div class="form-group @if($errors->has('deadline')) has-error @endif">
                                {!! Form::label('Deadline') !!}
                                {!! Form::date('deadline', $careers->deadline, ['class' => 'form-control', 'placeholder' => 'Deadline']) !!}

                                @if ($errors->has('deadline'))
                                    <span class="help-block">{!! $errors->first('deadline') !!}</span>@endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], isset($career->is_published) ? $career->is_published : null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group @if($errors->has('details')) has-error @endif">
                                <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                               <label class="control-label mb-10">Description</label>
                               <textarea id="editor" class="ckeditor form-control" name="details">{{$careers->details}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'details' );
                                    CKEDITOR.config.toolbar = [
  { name: 'paragraph', groups: [ 'list', 'indent'], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-'] },
    { name: 'clipboard', groups: [ 'clipboard', 'undo', 'blocks', 'align'], items: ['PasteFromWord', '-', 'Undo', 'Redo', 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'Link', 'Unlink', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Styles', 'Format', 'FontSize', 'TextColor', 'BGColor', 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe' , 'Source'] }
];
                                    </script>
                            </div>
                            
                            <input type="hidden" name="lang_code" value="{{$lang}}">

                        </div>
                        <div class="box-footer">
                            {!! Form::submit('Save',['class' => 'btn btn-sm btn-primary']) !!}
                            <a class="btn btn-sm btn-primary" href="{{url('/careers', $careers->id)}}">Preview</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');
        });
    </script>
@endsection
