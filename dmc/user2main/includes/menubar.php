<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/Photo/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> En ligne</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>ACCUEIL</span></a></li>
      <li class=""><a href="#profile" data-toggle="modal"><span class="fa fa-settings"></span> <span>PARAMETRE</span></a></li>
      <li class="header">MANAGE</li>
      <li class=""><a href="info.php"><i class="fa fa-users"></i> <span>LISTE DES PROFS</span></a></li>
      <li class=""><a href="fichier.php"><i class="fa fa-tasks"></i> <span>FICHIER ADMINISTRATIF</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>EMPLOI DU TEMPS</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>RESULTAT EXAMEN</span></a></li>
      <li class=""><a href="logout.php"><i class="fa fa-cog"></i> <span>DECONNEXION</span></a></li><!--titre des elections -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>