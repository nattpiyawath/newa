@extends('template')

@section('title', 'Edit - '.$milestone->title)

@section('content')

@php
$lang = 'en';
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
}
@endphp

@php
$myStorage = '/storage/app/uploads/';
@endphp

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit - {{$milestone->title}}</h3>
        </div>
        <div class="panel-body">
            
        @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

{!! Form::model($milestone,['url' => 'admin/milestione/'.$milestone->id, 'method'=>'PATCH']) !!}

                <input type="hidden" name="lang_code" value="{{$lang}}">

                <div class="form-group">
                    <label for="select-country">Translate Of </label>
                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="translate_id">
                                       
                            <option value="0">Select...</option>
                            @foreach($milestone_lang as $pg)

                            <option <?= $milestone->title==$pg->title?'selected':''?> data-tokens="{{$pg->title}}" value="{{$pg->translate_id}}">{{$pg->title}}</option>
                            @endforeach
                        </select>

                </div> 

                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('description','Description')}}
                        {{Form::textarea('description',null,['class'=>'form-control'])}}
                </div>
                      <div class="form-group">
                                                                        <label class="control-label mb-10">Thumbnail</label>
                                                                        <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                                        <div class="form-group">
                                                                            @php 
                                                                                $thumb = $milestone->thumbnail;
                                                                            @endphp

                                                                            @if ($thumb != '')
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{URL('').$myStorage.$milestone->thumbnail}}"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{$milestone->thumbnail}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="thumbnail" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                            @endif
                                                                            
                                                                        </div>
                                                                    </div>
                <div class="form-group">
                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                        {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}

                </div>
            {!! Form::close() !!}

        </div>
    </div>
    <div class="modal fade in"><div id="elfinder"></div></div>

    <script type="text/javascript">
                                                                       

                                                                        $('.image_selector2').click(function(event){
                                                                            event.preventDefault();

                                                                            $('.modal').show();

                                                                            updateID = $(this).attr('data-upateimage');

                                                                            // fire elfinder for image selection
                                                                            $('#elfinder').elfinder({
                                                                                url : '{{ route("elfinder.connector") }}',

                                                                                commandsOptions: {
                                                                                  getfile: {
                                                                                    oncomplete: 'destroy' 
                                                                                  }
                                                                                },
                                                                                dialog: {width: 900, modal: true, title: 'Select a file'},
                                                                                resizable: false,
                                                                                commandsOptions: {
                                                                                    getfile: {
                                                                                        oncomplete: 'destroy',
                                                                                        folders  : true
                                                                                    }
                                                                                },
                                                                                getFileCallback: function(url) {
                                                                                    //console.log(url)
                                                                                    document.getElementById(updateID).value = url.url;
                                                                                    $('#thum-image').attr('src', url.url);
                                                                                    $('.modal').hide();
                                                                                }
                                                                            }).elfinder('instance');

                                                                        });

                                                                    </script>
                                                                    
@endsection