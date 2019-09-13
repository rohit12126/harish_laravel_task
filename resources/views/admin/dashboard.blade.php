@extends('layouts.admin_layout')
@section('main_content')
  <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('global.dashboard.title')
                        <small>@lang('global.dashboard.subtitle')</small>
                    </h1>
                    <!-- <ol class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    </ol> -->
                </section>
                <!-- Main content -->
                <section class="content">

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
@endsection