@extends('template')

@section('title', 'Edit - '.$langs->lang_name)

@section('content')

<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 1280px;margin: 0 auto;}
    img#thum-image{max-width: 50px;}
</style>

<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Edit Language - {{$langs->lang_name}}</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">

                                                    {!! Form::model($langs,['url' => 'admin/locale/'.$langs->id, 'method'=>'PATCH']) !!}

                                                        <div class="form-body">

                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <select class="form-control" data-placeholder="Status" name="active">
                                                                                <option value="0" <?= $langs->active!=1?'selected':''?> selected>Inactive</option>
                                                                                <option value="1" <?= $langs->active==1?'selected':''?>>Active</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3"></div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-actions mt-10" style="text-align: right;">
                                                                        <a class="btn btn-default btn-close" href="{{url('admin/locale')}}">Back</a>
                                                                        {{ Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success mr-10'] )  }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                            <h6 class="txt-dark capitalize-font"><i class="fa fa-info" aria-hidden="true"></i> Language Information</h6>
                                                            <hr class="light-grey-hr">

                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group @if($errors->has('title')) has-error @endif">
                                                                        <label class="control-label mb-10"> Code</label>

                                                                        {{Form::text('lang_code',$langs->lang_code,['class'=>'form-control', 'placeholder' => 'Ex: kh, en,...'])}}

                                                                        @if ($errors->has('lang_code'))
                                                                            <span class="help-block">{!! $errors->first('lang_code') !!}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group @if($errors->has('slug')) has-error @endif">
                                                                        <label class="control-label mb-10">Name</label>
                                                                        {{Form::text('lang_name',$langs->lang_name,['class'=>'form-control'])}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Language Icon</label>
                                                                        <a class="button secondary postfix image_selector2" style="float: right;" data-upateimage="feature_image2"><i class="fa fa-pencil" aria-hidden="true"></i> Change</a>
                                                                        <div class="form-group">
                                                                            @php
                                                                            $thumb = $langs->lang_icon;
                                                                            @endphp

                                                                            @if ($thumb != '')
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{$langs->lang_icon}}"/>
                                                                                <input type="hidden" id="feature_image2" name="lang_icon" value="{{$langs->lang_icon}}" />
                                                                            @else
                                                                                <img class="thum-image" id="thum-image" height="150" src="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg"/>
                                                                                <input type="hidden" id="feature_image2" name="lang_icon" value="{{ URL('assets/pagebuilder/images') }}/thumbnail_600x400.jpg" />
                                                                            @endif
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

                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Default</label>
                                                                        <select class="form-control" data-placeholder="Status" name="default">
                                                                                <option value="0" <?= $langs->default!=1?'selected':''?> >No</option>
                                                                                <option value="1" <?= $langs->default==1?'selected':''?> >Yes</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            </div>
                                                                </div>
                                                            </div>

                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
</div>


@endsection