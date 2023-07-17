<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/Photo/'.$user['photo'] : '../images/profile.jpg'; ?>"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">REPORTS</li>
            <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>ACCUEIL</span></a></li>
            <li class=""><a href="#profile" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>
                    <span>MOT DE PASSE</span></a></li>
            <li class=""><a href="info.php"><i class="fa fa-newspaper-o"></i> <span>INFO</span></a></li>
            <li class="header">MANAGE</li>
            <li class=""><a href="carte.php"><i class="fa fa-book"></i> <span>SOFT-KILLS</span></a></li>
            <!--<li class=""><a href="biblio.php"><i class="fa fa-book"></i> <span>BIBLIO</span></a></li>
            <li class=""><a href=""><i class="fa fa-tasks"></i> <span>INFO PERSO</span></a></li>
             t<li class=""><a href="requete.php"><i class="fa fa-black-tie"></i> <span>REQUETE</span></a></li>
            <li class="header">SETTINGS</li>
            <li class=""><a href="suggestion.php"><i class="fa fa-file-text"></i> <span>SUGGESTIONS & PLAINTES
                    </span></a></li>
            <li class=""><a href="logout.php"><i class="ion-log-out"></i> <span>DECONNEXION</span></a></li>
           itre des elections -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php include 'includes/profile_modal.php'; ?>