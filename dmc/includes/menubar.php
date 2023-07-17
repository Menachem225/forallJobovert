<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/' . $user['photo'] : '../images/profile.jpg'; ?>"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">REPORTS</li>
            <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>ACCUEIL</span></a></li>
            <li class=""><a href="#profile" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>
                    <span>PARAMETRE</span></a></li>
            <li class="header">MANAGE</li>
            <li class=""><a href="home2.php"><i class="fa fa-users"></i> <span>INFO ETUDIANT</span></a></li>
            <li class=""><a href="visiteurs.php"><i class="fa fa-tasks"></i> <span>ACCUEIL & RECEPTION</span></a></li>
            <li class=""><a href="#"><i class="fa fa-black-tie"></i> <span>ANNUAIRE DU PERSONNEL</span></a></li>
            <li class="header">SETTINGS</li>
            <li class=""><a href="#"><i class="fa fa-file-text"></i> <span>SERVICE PROSPECTION</span></a></li>
            <li class=""><a href="logout.php"><i class="fa fa-cog"></i> <span>DECONNEXION</span></a></li>
            <!--titre des elections -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php include 'profile_modal.php'; ?>