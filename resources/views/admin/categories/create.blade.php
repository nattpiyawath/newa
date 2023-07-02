@extends('template')

@section('title', 'Create A Category')

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
                              <h6 class="panel-title txt-dark">Create A Category</h6>
                        </div>
                        <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                <form action="{{ route('category.store') }}" method="POST">
                                                		
                                                	{{ csrf_field() }}

                                                      <input type="hidden" name="lang_code" value="{{$lang}}">

                                                      <div class="form-group">
                                                      	<label for="name">Category Name</label>
                                                      	<input type="text" name="name" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" placeholder="Enter Category Name" class="form-control" value="{{old('name')}}">
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                      	<label for="slug">Category Slug</label>
                                                      	<input type="text" name="slug" id='slug-text' placeholder="Enter Category Slug" class="form-control" value="{{old('slug')}}">
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

                                                      <div class="from-group">
                                                      	 <div class="text-right">
                                                                  <a class="btn btn-default btn-close" href="{{url('admin/category?lang='.$lang)}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
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
      $('#posts').attr('aria-expanded','true');
      $('#posts').parent().addClass('active');
      $('#posts').next().addClass('in');

</script>

@endsection