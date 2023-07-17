

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
                    Fichier Etudiant
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Voters</li>
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
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <td>Nom</td>
                                        <td>nom du Fichier</td>
                                        <td>option</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                    $sql = "SELECT * FROM fichiers WHERE id ='".$_SESSION['student']."'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $image = (!empty($row['photo'])) ? '../images/Photo/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>

                        <th>Convocation </th>
                        <td>".$row['convocation']."</td>            
                         <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Telecharger</button> 
                          </td>
                        </tr>
                        <tr>
                        <th>Attestation de frequentation</th>
                        <td>".$row['attest2freq']."</td>
<td><button class='btn btn-success btn-sm download btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Telecharger</button>
                          </td> </tr>
                        <tr> <th>Fiche d'inscription</th>
                        <td>".$row['f_inscript']."</td>
                         <td> <a href='../files/fiche_inscript/".$row['f_inscript']."'></i> Telecharger</button></a>
                                      </td>
                                      <tr>
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
        <?php include 'includes/voters_modal.php'; ?>
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
            url: 'etudiant_row.php',
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