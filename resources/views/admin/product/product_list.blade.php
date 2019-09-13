@extends('layouts.admin_layout')

@section('main_content')
  <aside class="right-side">                
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>@lang('global.products.title')</h1>
            <!-- <ol class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Products</a></li>
            </ol> -->
        </section>
        <!-- Main content -->
                <section class="content">
                    <!-- <div class="row"> -->
                    <!-- </div> -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                      
                                </div><!-- /.box-header -->
                                <a style="margin:10px;" href="{{route('add_product')}}" class="btn btn-primary pull-right">@lang('global.products.add')</a>
                                <div class="box-body table-responsive">
                                    <table id="product_data" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>@lang('global.products.fields.sno')</th>
                                                <th>@lang('global.products.fields.name')</th>
                                                <th>@lang('global.products.fields.price')</th>
                                                <th>@lang('global.products.fields.description')</th>
                                                <th>@lang('global.products.fields.action')</th> 
                                            </tr>
                                        </thead>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                 </section><!-- /.content -->
            </aside><!-- /.right-side -->
@endsection
@section('javascript') 
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
var dtList = $('#product_data').DataTable({
   "searching": false,
    processing: true,
    serverSide: true,
    ajax:{url: '{{ route('getProductsData') }}',
          type: "GET"
          } ,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',"searchable": false,"orderable":false},
        {data: 'name', name: 'name'},
        {data: 'amount', name: 'amount'},
        {data: 'description', name: 'description'},
        {data: 'action', name: 'action'},
    ]
});
</script>
@endsection