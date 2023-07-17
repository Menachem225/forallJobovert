<?php
session_start();
if(isset($_SESSION['admin'])){
  header('location:home.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>JOBOVERT </title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login.php" method="POST" class="sign-in-form">
                    <h2 class="title">JOBOVER</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Nom d'utilisateur " />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe " />
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" />
                    <p class="social-text">Abonnez vous à nos differents réseaux </p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="login.php" method="POST" class="sign-up-form">
                    <h2 class="title">Portail parent</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Nom d'utilisateur" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe " />
                    </div>
                    <input type="submit" name="login" class="btn" value="Sign up" />
                    <p class="social-text">Environnement numerique de travail
                        Nous formons les Leaders de demain</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>
                        <p>
                        <h1> JOBOVER</h1>
                        </p>
                        <p>
                            Portail Parent
                        </p>
                    </h3>
                    <button class="btn transparent" id="sign-up-btn">
                        Connexion
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Connexion</h3>
                    <p>
                    <h1> JOBOVER</h1>
                    </p>
                    <p>
                        Portail Etudiant
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Connexion
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>

    <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</body>

</html>