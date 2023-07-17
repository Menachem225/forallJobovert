<!-- Description -->
<div class="modal fade" id="platform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajouter un nouvel emploi</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="emploi_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Categorie</label>

                        <div class="col-sm-9">
                            <select class="form-control" id="categorie" name="categorie">
                                <option value="" selected>- Select -</option>
                                <?php
                                                 include ('connexion.php');
                                                  $sql = "SELECT * FROM metier";
                                                    $query = $conn->query($sql);
                                                    while ($row = $query->fetch_assoc()) {
                                         echo "

	                                            <option value='" . $row['categorie'] . "'>" . $row['categorie'] . "</option>
                            ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Metier</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="metier" name="metier" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Description</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="salaire" class="col-sm-3 control-label">salaire</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="salaire" name="salaire" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ville" class="col-sm-3 control-label">ville</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ville" name="ville" required>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Modifier Information</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="user_edit.php">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="edit_username" class="col-sm-3 control-label">Nom d'Utilisateur</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_mail" class="col-sm-3 control-label">Mail Professionnel</label>

                        <div class="col-sm-9">
                            <input type="mail" class="form-control" id="edit_mail" name="mail" required>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>SUPPRESSION</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="user_delete.php">
                    <input type="hidden" class="id" name="id">
                    <div class="text-center">
                        <p>SUPPRIMER</p>
                        <h2 class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Reset -->
<div class="modal fade" id="reset">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>REINITIALISER LE MOT DE PASSE</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tchname_psswdreset.php">
                    <input type="hidden" class="id" name="id">
                    <div class="text-center">
                        <p>REINITIALISER LE MOT DE PASSE</p>
                        <h2 class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="reset"><i class="fa fa-trash"></i>
                    Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Edit -->
<div class="modal fade" id="#">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Reinitialiser Mot de passe </b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tchname_psswdreset.php">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="groupe" class="col-sm-3 control-label">Nom d'utilisateur</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="groupe" name="username">
                                <option value="" selected>- Select -</option>
                                <?php
                                $sql = "SELECT * FROM tchname";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo "
                              <option value='" . $row['id'] . "'>" . $row['username'] . "</option>
                            ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>