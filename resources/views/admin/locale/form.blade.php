

{!! Form::model($lang,['url' => 'admin/locale/'.$lang->id, 'method'=>'PATCH']) !!}
                <div class="form-group">
                    {{Form::label('lang_code','Language Code (Ex: kh, en, ...)')}}
                    {{Form::text('lang_code',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('lang_name','Language Name')}}
                        {{Form::text('lang_name',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('lang_icon','Language icon')}}
                        {{Form::text('lang_icon',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('active','Active')}}
                        {{Form::checkbox('active', 1)}}
                </div>
                <div class="form-group">
                        {{Form::label('default','Default')}}
                        {{Form::checkbox('default', 1)}}
                </div>
                <div class="form-group">
                        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
                </div>
{!! Form::close() !!}