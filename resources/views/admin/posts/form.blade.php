{!! Form::model($posts,['url' => 'posts/'.$posts->id, 'method'=>'PATCH']) !!}
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