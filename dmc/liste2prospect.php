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
                    LISTE DES PROSPECT
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"></li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box-body">
                                <table id="example1" class="table table-responsive">
                                    <thead>
                                        <th>NOM</th>
                                        <th>ETABLISSEMENT D'ORIGINE</th>
                                        <th>CONTACT</th>
                                        <th>CONTACT PARENTS</th>
                                        <th>SERIE</th>
                                        <th>FILIERE</th>
                                        <th>OPTION</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                      	
                                       
                                         // $id=  $user['etudiant_id'];

                                        $sql = "SELECT * FROM prospect";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){

                                        echo "
                                        <tr>
                                            <td>".$row['nom']."</td>
                                            <td>".$row['etabli_o']."</td>
                                            <td>".$row['contact']."</td>
                                            <td>".$row['contact_parent']."</td>
                                            <td>".$row['serie']."</td>
                                                <td>".$row['filiere']."</td>
                                             <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                                        </tr>
                                        ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/query2_modal.php'; ?>
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

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.photo', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'query_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.id').val(response.id);
                $('#edit_firstname').val(response.firstname);
                $('#edit_lastname').val(response.lastname);
                $('#edit_password').val(response.password);
                $('.fullname').html(response.firstname + ' ' + response.lastname);
            }
        });
    }
    </script>
</body>

</html>