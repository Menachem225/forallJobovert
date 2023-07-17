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

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Modifier </b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="attribution_add.php">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="edit_code_ue" class="col-sm-3 control-label">CODE UE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_code_ue" name="code_ue" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_ue" class="col-sm-3 control-label">UE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_ue" name="ue" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_code_ecue" class="col-sm-3 control-label">CODE ECUE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_code_ecue" name="code_ecue" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_departement" class="col-sm-3 control-label">Departement</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_departement" name="departement" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_niveau" class="col-sm-3 control-label">Niveau</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_niveau" name="niveau" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="classe" class="col-sm-3 control-label">Classe</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_classe" name="classe">
                                <option value="" selected>- Select -</option>
                                <?php
                                $sql = "SELECT * FROM classe";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo "
                              <option value='" . $row['classename'] . "'>" . $row['classename'] . "</option>
                            ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="groupe" class="col-sm-3 control-label">Groupe</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_groupe" name="groupe">
                                <option value="" selected>- Select -</option>
                                <?php
                                $sql = "SELECT * FROM groupe";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo "
                              <option value='" . $row['groupename'] . "'>" . $row['groupename'] . "</option>
                            ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="groupe" class="col-sm-3 control-label">Typologie de cours</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_groupe" name="typologie">
                                <option value="" selected>- Select -</option>
                                <?php
                                $sql = "SELECT * FROM typocours";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo "
                              <option value='" . $row['typename'] . "'>" . $row['typename'] . "</option>
                            ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="matiere" class="col-sm-3 control-label">Attribuer matiere</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_matiere" name="attribution">
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

                    <div class="form-group">
                        <label for="Niveau" class="col-sm-3 control-label">Volume Horaire</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_vh" name="vh" readonly>
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-check-square-o"></i>
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
                <form class="form-horizontal" method="POST" action="tchmatiere_delete.php">
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

<!-- Update Photo 
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="candidates_photo.php" enctype="multipart/form-data">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>-->