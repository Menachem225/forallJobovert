<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b></b>Farm-Tech</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="user-header">

                    <?php
date_default_timezone_set('Africa/Abidjan');
$date = date('d-M-Y H:i:s');
echo $date;
?>


                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo (!empty($user['photo'])) ? '../images/Photo/'.$user['photo'] : '../images/profile.jpg'; ?>"
                            class="user-image" alt="User Image">
                        <span class="hidden-xs"> <?php echo $user['username']; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo (!empty($user['photo'])) ? '../images/Photo/'.$user['photo'] : '../images/profile.jpg'; ?>"
                                class="img-circle" alt="User Image">

                            <p>
                                <?php echo $user['username']; ?>

                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat"
                                    id="admin_profile">Mise à jour</a>
                            </div>
                            <div class="pull-right">
                                <a href="logout.php" class="btn btn-default btn-flat">Deconnexion</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>