@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ url('images/admin/admin-logo.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ 
          trans('backpack::base.dashboard') }}</span></a></li>
          <!-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li> -->
          
          <li><a href="{{ url('admin/configuracion') }}"><i class="fa fa-tag"></i> <span>
          Configuracion</span></a></li>
          <li><a href="{{ url('admin/home') }}"><i class="fa fa-tag"></i> <span>
          Home</span></a></li>
          <li><a href="{{ url('admin/propuesta') }}"><i class="fa fa-tag"></i> <span>
          Propuesta</span></a></li>
          <li><a href="{{ url('admin/profesores') }}"><i class="fa fa-tag"></i> <span>
          Profesores</span></a></li>
          <li><a href="{{ url('admin/clases') }}"><i class="fa fa-tag"></i> <span>
          Clases</span></a></li>
          <li><a href="{{ url('admin/citas') }}"><i class="fa fa-tag"></i> <span>
          Citas</span></a></li>
          <li><a href="{{ url('admin/cursos') }}"><i class="fa fa-tag"></i> <span>
          Cursos</span></a></li>
          <li><a href="{{ url('admin/noticias') }}"><i class="fa fa-tag"></i> <span>
          Noticias</span></a></li>
          <li><a href="{{ url('admin/servicios') }}"><i class="fa fa-tag"></i> <span>
          Servicios</span></a></li>
          <li><a href="{{ url('admin/videos') }}"><i class="fa fa-tag"></i> <span>
          Videos</span></a></li>
          <li><a href="{{ url('admin/fotos') }}"><i class="fa fa-tag"></i> <span>
          Fotos</span></a></li>

          



          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
