@extends('template')

@section('title', 'Edit Merchant Category' .$merchant_cate->merchant_cate)

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
                              <h6 class="panel-title txt-dark">Update Merchant Category: {{$merchant_cate->merchant_cate}}</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>

                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
      	

                                                      {!! Form::open(['route' => ['merchant_cate.update', $merchant_cate->id], 'method' => 'PATCh']) !!}
                                                		
                                                	{{ csrf_field() }}

                                                       <input type="hidden" name="lang_code" value="{{$lang}}">

                                                      <div class="form-group">
                                                      	<label for="name">Merchant Category</label>
                                                      	<input type="text" name="merchant_cate" value="{{ $merchant_cate->merchant_cate }}" placeholder="Enter Merchant Category" class="form-control">
                                                      </div>

                                                      <div class="from-group">
                                                      	 <div class="text-right">
                                                      	 	<button class="btn btn-success" type="submit">Update Merchant Partner</button>
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

<script>
      //Add Active to admin menu
      $('#merchant').attr('aria-expanded','true');
      $('#merchant').parent().addClass('active');
      $('#merchant').next().addClass('in');

</script>

