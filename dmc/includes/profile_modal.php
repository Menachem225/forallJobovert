<!-- Add -->


<!-- Add -->
<div class="modal fade" id="prospect">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajout des prospects </b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query-btr.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">NOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="etabli-origine" class="col-sm-3 control-label">ETABLISSEMENT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="etabli-origine" name="ancien" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">CONTACT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">CONTACT PARENT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact_parent" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">SERIE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="serie" name="serie" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">FILIERE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="filiere" name="filiere" required>
                        </div>
                    </div>
                    <hr>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
















<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Modification des parametres</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Username</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username"
                                value="<?php echo $user['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password"
                                value="<?php echo $user['password']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['firstname']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">lastname</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['lastname']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo:</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">Current Password:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="curr_password" name="curr_password"
                                placeholder="input current password to save changes" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="profile2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>AJOUTER VISITEUR</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="candidates_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">NOM </label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">CONTACT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">REQUETE</label>

                        <div class="col-sm-9">
                            <select id="requete" name="requete" required>
                                <option value="SCOLARITE">SCOLARITE</option>
                                <option value="SERVICE FINANCIER">SERVICE FINANCIER</option>
                                <option value="CAISSE">CAISSE</option>
                                <option value="GALERIE">GALERIE</option>
                                <option value="SERVICE INSCRIPTION">SERVICE INSCRIPTION</option>
                                <option value="ARCHIVES">ARCHIVES</option>
                                <option value="DECANAT">DECANAT</option>
                            </select>
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


<!-- Add -->
<div class="modal fade" id="prospect">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajout des prospects </b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query-pro.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Nom</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="etabli_origine" class="col-sm-3 control-label">Etablissement</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="etablissement" name="ancien" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">CONTACT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">CONTACT PARENT</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact_parent" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">SERIE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="serie" name="serie" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">FILIERE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="filiere" name="filiere" required>
                        </div>
                    </div>
                    <hr>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>