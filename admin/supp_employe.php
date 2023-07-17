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

                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Nom</th>
                                        <th>Numero</th>
                                        <th>Habitation</th>
                                        <th>Photo</th>
                                        <th>Cni</th>
                                        <th>Extrait</th>
                                        <th>option</th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * from users";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      echo "
                        <tr>
                          <td>" . $row['nom'] . "</td>
                            <td>" . $row['numero'] . "</td>
                            <td>" . $row['habitation'] . "</td>
                            <td>" . $row['photo'] . "</td>
                            <td>" . $row['cni'] . "</td>
                            <td>" . $row['extrait'] . "</td>
                          <td>
                           <button class='btn btn-primary btn-sm edit btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Modifier </button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> suppression </button>
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

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'user_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.id').val(response.id);
                $('#edit_matricule').val(response.matricule);
                $('#edit_nom').val(response.nom);
                $('#edit_prenom').val(response.prenom);
                $('#edit_ncomplet').val(response.ncomplet);
                $('#edit_ddn').val(response.ddn);
                $('#edit_ldn').val(response.ldn);
                $('#edit_nationalite').val(response.nationalite);
                $('#edit_genre').val(response.genre);
                $('#edit_typologie_bac').val(response.typologie);
                $('#edit_mail').val(response.mail);
                $('#edit_departement').val(response.departement);
                $('#edit_numero').val(response.numero);
                $('#edit_cel_pere').val(response.cel_pere);
                $('#edit_cel_mere').val(response.cel_mere);
                $('#edit_cdd').val(response.cdd);
                $('#edit_classe').val(response.classe);
                $('#edit_niveau').val(response.niveau);
                $('#edit_statut').val(response.statut);
                $('#edit_finance').val(response.finance);

            }
        });
    }
    </script>
</body>

</html>