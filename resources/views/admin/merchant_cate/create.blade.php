@extends('template')

@section('title', 'Add Merchant Category')

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
                              <h6 class="panel-title txt-dark">Add Merchant Category</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                <form action="{{ route('merchant_cate.store') }}" method="POST">
                                                		
                                                	{{ csrf_field() }}

                                                      <input type="hidden" name="lang_code" value="{{$lang}}">

                                                      <div class="form-group">
                                                      	<label for="name">Merchant Category</label>
                                                      	<input type="text" name="merchant_cate" placeholder="Enter Merchant Category" class="form-control text-danger" value="{{old('merchant_cate')}}">
                                                      </div>

                                                      <div class="from-group">
                                                      	 <div class="text-right">
                                                            <a class="btn btn-default btn-close" href="{{url('admin/merchant_cate?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                                                      	 	<button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
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
      $('#merchant').attr('aria-expanded','true');
      $('#merchant').parent().addClass('active');
      $('#merchant').next().addClass('in');

</script>

@endsection