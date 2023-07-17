<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Parametre de confidentialité</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">Mot de passe actuel</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="curr_password" name="curr_password"
                                placeholder="Changez votre mot de passe " required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Nouveau mot de passe</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Changez votre mot de passe " required>
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
<div class="modal fade" id="plainte">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Plainte & suggestion </b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="query-btr.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">TYPE DE REQUETE</label>

                        <div class="col-sm-9">
                            <select id="tquery" name="tquery">

                                <option value="plaintes">PLAINTES</option>
                                <option value="suggestions">SUGGESTIONS
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_lect_tra" class="col-sm-3 control-label">PLAINTES
                        </label>

                        <div class="col-sm-9">
                            <textarea class="form-control" id="bdr" name="bdr" rows="7"></textarea>
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

<!-- Add 
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Edition des parametres</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Inserez votre nouveau mot de passe</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe pour valider les changements" required>
                    </div>
                </div>
   
   
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Mot de passe actuel</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Entrez votre mot de passe pour valider les changements" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>-->