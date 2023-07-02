@extends('template')

@section('title', 'Edit Tag - '.$tag->tag)

@section('content')

<style type="text/css">
    textarea.form-control {height: 80px;}
    .card-view {max-width: 680px;left:0;}
    .category-main{margin-top: 10px;}
</style>


<div class="row category-main" >
      <div class="col-md-12">
            <div class="panel panel-default card-view">
                  <div class="panel-heading">
                        <div class="pull-left">
                              <h6 class="panel-title txt-dark">Update Tag: {{$tag->tag}}</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PATCh']) !!}

                                                 <input type="hidden" name="lang_code" value="{{$lang}}">
                                          		
                                          		{{ csrf_field() }}

                                                     <div class="form-group">
                                                	<label for="tag">Tag Name</label>
                                                	<input type="text" name="tag" value="{{ $tag->tag }}"  placeholder="Enter Your Blog Category Name" class="form-control">
                                                </div>

                                                <div class="from-group">
                                                	 <div class="text-right">
                                                	 	<button class="btn btn-success" type="submit">update tag</button>
                                                	 </div>
                                                </div>

                                          	</form>
                                          </div>

                                    </div>

                              </div>

                        </div>
                  </div>

            </div>
      </div>
</div>

<script>
      //Add Active to admin menu
      $('#posts').attr('aria-expanded','true');
      $('#posts').parent().addClass('active');
      $('#posts').next().addClass('in');

</script>


@endsection