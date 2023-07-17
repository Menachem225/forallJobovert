<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
        if (isset($_SESSION['error'])) {
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
          unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
          unset($_SESSION['success']);
        }
        ?>
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <!--<div class="col-lg-3 col-xs-6">
         small box 
          <div class="small-box bg-vert">
            <div class="inner">
           //<?php
              //$sql = "SELECT * FROM candidates";
              // $query = $conn->query($sql);

              // 
              ?>

              <p>Requete & Demande </p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="#" class="small-box-footer">Cliquez <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->





                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-purple">
                            <div class="inner">

                                <p>Client </p>
                            </div>
                            <div class="icon">
                                <i class="ion-people"></i>
                            </div>
                            <a href="client.php" class="small-box-footer">Cliquez <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>


                        <div class="small-box bg-purple">
                            <div class="inner">
                                <?php
                $sql = "SELECT * FROM position group by 'id'";
                $query = $conn->query($sql); ?>
                                <p>Position enregistrée</p>
                            </div>
                            <div class="icon">
                                <i class="ion-people"></i>
                            </div>
                            <a href="location.php" class="small-box-footer">Cliquez <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>




                    <!-- ./col -->
                </div>

                <!-- <div class="row">
        <div class="col-xs-12">
          <h3>Votes Tally
            <span class="pull-right">
              <a href="print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print</a>
            </span>
          </h3>
        </div>
      </div> -->



            </section>
            <!-- right col -->
        </div>
        <?php include 'includes/scripts.php'; ?>
        <?php include 'includes/footer.php'; ?>

    </div>

</body>

</html>