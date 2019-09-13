 <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!-- <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('admin_assests/img/avatar04.png') }}" class="img-circle" alt="User Image" />
                            }
                        </div>
                    </div> -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{ route('home') }}">
                                <i class="fa fa-dashboard"></i> <span>@lang('global.dashboard.title')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product_list') }}">
                                <i class="fa fa-th"></i> <span>@lang('global.products.title')</span> 
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>