<?php

// session and database connection
include_once'connect_db.php';
session_start();


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN DASHBOARD
        <small></small>
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
        <div class="box box-success"> 
          <div class="box-header with-border">
              <h3 class="box-title">Blank </h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
            
          <div class="box-body"></div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php

include_once'footer.php';

?> 