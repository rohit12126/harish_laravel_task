@extends('layouts.admin_layout')
@section('main_content')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('global.products.title')</h1>
        <!-- <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Add Product</a></li>
        </ol> -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">@lang('global.products.add')</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="POST" action="{{ route('add_product') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>@lang('global.products.fields.name') </label>
                                <input type="text" minlength="2" name="name" maxlength="255" class="form-control" placeholder="Enter Name" value="{{ old('name') }}"/>
                                @if($errors->has('name'))
                                  <p class="help-block" style="color:red;">
                                      {{ $errors->first('name') }}
                                  </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>@lang('global.products.fields.price') </label>
                                <input type="number"  name="price" min="1" class="form-control" placeholder="0.00" value="{{ old('price') }}"/>
                                @if($errors->has('price'))
                                  <p class="help-block" style="color:red;">
                                      {{ $errors->first('price') }}
                                  </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>@lang('global.products.fields.description')</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                <a class="btn btn-danger" href="{{route('product_list')}}"> Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
@endsection
@section('javascript') 
    
@endsection