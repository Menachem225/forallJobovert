<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Liste des enseignants
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"></li>
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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> Ajouter nouveau membre</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>

                                        <th>latitude</th>
                                        <th>longitude</th>
                                        <th>systeme </th>
                                        <th>OS</th>
                                        <th>horodatage</th>

                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * from position";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      echo "
                        <tr>
                          <td>" . $row['latitude'] . "</td>
                            <td>" . $row['longitude'] . "</td>
                             <td>" . $row['systeme'] . "</td>
                              <td>" . $row['platform'] . "</td>
                             <td>" . $row['log'] . "</td>
                        </tr>
                      ";
                    }
                    ?>
                                    </tbody>
                                </table>
                            </div>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/tchnames_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function() {
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });



    });
    </script>
</body>

</html>