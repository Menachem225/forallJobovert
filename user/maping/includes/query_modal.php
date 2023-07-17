<!-- Add -->
<div class="modal fade" id="quete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>DEMANDE DE DOCUMENT - SERVICE SCOLARITE</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query_insert.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">TYPE DE REQUETE</label>

                        <div class="col-sm-9">
                            <select id="tquery" name="tquery">

                                <option value="DEMANDE D\'ATTESTATION DE FREQUENTATION">DEMANDE D'ATTESTATION DE
                                    FREQUENTATION</option>
                                <option value="DEMANDE D\' ATTESTATION DE REUSSITE">DEMANDE D'ATTESTATION DE REUSSITE
                                </option>
                                <option value="DEMANDE DE BULLETIN"> RETRAIT DE LICENCE</option>
                                <option value="DEMANDE DE BULLETIN">DEMANDE DE BULLETIN </option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">NOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['firstname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">PRENOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['lastname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matricule" class="col-sm-3 control-label">MATRICULE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricule" name="matricule"
                                value="<?php echo $user['etudiant_id']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">PHOTO RECTO DE VOTRE CARTE D'ETUDIANT:</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">INSEREZ VOTRE MOT DE PASSE POUR
                            VALIDER:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="curr_password" name="curr_password"
                                placeholder="Inserez votre mot de passe pour valider " required>
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

<!-- Add -->
<div class="modal fade" id="financier">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>DEMANDE DE DOCUMENT - SERVICE FINANCIER</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query_insertsf.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">TYPE DE REQUETE</label>

                        <div class="col-sm-9">
                            <select id="tquery" name="tquery">

                                <option value="DEMANDE DE CONVOCATION">DEMANDE DE CONVOCATION</option>
                                <option value="DEMANDE DE SUIVI DE SCOLARITE">DEMANDE DE SUIVI DE SCOLARITE</option>
                                <option value="DEMANDE DE BULLETIN"> </option>
                                <option value="DEMANDE DE BULLETIN"></option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">NOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['firstname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">PRENOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['lastname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matricule" class="col-sm-3 control-label">MATRICULE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricule" name="matricule"
                                value="<?php echo $user['etudiant_id']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">PHOTO RECTO DE VOTRE CARTE D'ETUDIANT:</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">INSEREZ VOTRE MOT DE PASSE POUR
                            VALIDER:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="curr_password" name="curr_password"
                                placeholder="Inserez votre mot de passe pour valider " required>
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





<!-- Add -->
<div class="modal fade" id="archive">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>DEMANDE DE DOCUMENT - SERVICE ARCHIVE</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query_insertsf.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">TYPE DE REQUETE</label>

                        <div class="col-sm-9">
                            <select id="tquery" name="tquery">
                                <option value="DEMANDE DE BULLETIN">DEMANDE DE BULLETIN </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">CLASSE </label>

                        <div class="col-sm-9">
                            <select id="classe" name="classe">
                                <option value="LICENCE 1">LICENCE 1</option>
                                <option value="LICENCE 2">LICENCE 2</option>
                                <option value="LICENCE 3">LICENCE 3</option>
                                <option value="MASTER 1">MASTER 1</option>
                                <option value="MASTER 2">MASTER 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">CLASSE </label>

                        <div class="col-sm-9">
                            <select id="session" name="session">
                                <option value="LICENCE 1">SESSION 1</option>
                                <option value="LICENCE 2">SESSION 2</option>
                                <option value="REPRISE">REPRISE </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">NOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['firstname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">PRENOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['lastname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matricule" class="col-sm-3 control-label">MATRICULE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricule" name="matricule"
                                value="<?php echo $user['etudiant_id']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">PHOTO RECTO DE VOTRE CARTE D'ETUDIANT:</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">INSEREZ VOTRE MOT DE PASSE POUR
                            VALIDER:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="curr_password" name="curr_password"
                                placeholder="Inserez votre mot de passe pour valider " required>
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



<!-- Add -->
<div class="modal fade" id="sinfor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>DEMANDE DE DOCUMENT - SERVICE INFORMATIQUE</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query_insertif.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">TYPE DE REQUETE</label>

                        <div class="col-sm-9">
                            <select id="tquery" name="tquery">

                                <option value="DEMANDE ACCES"> DEMANDE DES ACCES </option>
                                <option value="REINITIALISATION ACCES"> REINITIALISATION D'ACCES </option>
                                <option value="AJOUT COHORTE"> AJOUT COHORTE </option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="SECTION" class="col-sm-3 control-label">SECTION </label>

                        <div class="col-sm-9">
                            <select id="service" name="section">
                                <option value="COMPTE ELEARNING">COMPTE ELEARNING</option>
                                <option value="COMPTE OFFICE 365">COMPTE OFFICE 365</option>
                                <option value="COMPTE SKILLS ">COMPTE SKILLS </option>
                                <option value="COMPTE SCHOLARVOX">COMPTE SCHOLARVOX</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">NOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['firstname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">PRENOM</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['lastname']; ?>" READONLY>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matricule" class="col-sm-3 control-label">MATRICULE</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricule" name="matricule"
                                value="<?php echo $user['etudiant_id']; ?>" READONLY>
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