@extends('layouts.app')

@section('content')


  <!-- Sidebar -->


<div class="wrapper">






    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
<div class="wrapper">

</div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Gestion </li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="#"><i class="fa fa-trophy"></i> <span>Torneos</span></a></li>
          <li><a href="#"><i class="fa fa-gears"></i> <span>Gestion academia</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>Deportistas</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Page Header
          <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->






      </section>
      <!-- /.content -->
    </div>

    </div>

@endsection
