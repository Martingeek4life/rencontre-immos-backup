<!DOCTYPE html>
<html>
  <head>
    @include('layouts.master')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Navbar -->
      @include('layouts.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('layouts.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.content-header')
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row">
              @include('layouts.card-info')
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              @include('layouts.connectedSortableLeft')
              <!-- /.Left col -->

              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              @include('layouts.connectedSortableRight')
              <!-- right col -->
              
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      @include('layouts.footer')

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  <!-- ./wrapper -->
  @include('layouts.scripts')
  </body>
</html>