	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
	    <!-- Mobile Specific Meta -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Favicon-->
	    <link rel="shortcut icon" href="img/fav.png">
	    <!-- Author Meta -->
	    <meta name="author" content="codepixer">
	    <!-- Meta Description -->
	    <meta name="description" content="">
	    <!-- Meta Keyword -->
	    <meta name="keywords" content="">
	    <!-- meta character set -->
	    <meta charset="UTF-8">
	    <!-- Site Title -->
	    <title>Jobover</title>

	    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	    <!--
			CSS
			============================================= -->
	    <link rel="stylesheet" href="css/linearicons.css">
	    <link rel="stylesheet" href="css/font-awesome.min.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/magnific-popup.css">
	    <link rel="stylesheet" href="css/nice-select.css">
	    <link rel="stylesheet" href="css/animate.min.css">
	    <link rel="stylesheet" href="css/owl.carousel.css">
	    <link rel="stylesheet" href="css/main.css">
	</head>

	<body>

	    <header id="header" id="home">
	        <div class="container">
	            <div class="row align-items-center justify-content-between d-flex">
	                <div id="logo">
	                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
	                </div>
	               
	            </div>
	        </div>
	    </header><!-- #header -->


	    <!-- start banner Area -->
	    <section class="banner-area relative" id="home">
	        <div class="overlay overlay-bg"></div>
	        <div class="container">
	            <div class="row fullscreen d-flex align-items-center justify-content-center">
	                <div class="banner-content col-lg-12">
	                    <h1 class="text-white">
	                        <span>+500</span> Jobs dans le domaine de l'emploi vert
	                    </h1>
	                    <form action="index_search.php" class="serach-form-area">
	                        <div class="row justify-content-center form-wrap">
	                            <div class="default-select" id="default-selects"">
										<select>
                                              <!-- Ajouter des elements dans le menu deroulant -->
                                <?php
                                      include ('connexion.php');
                                $sql = "SELECT * FROM metier";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo "
                                    
                              <option value='" . $row['metier'] . "'>" . $row['metier'] . "</option>
                            ";
                                }
                                ?>
                            </select>

  </div><!-- Ajouter des elements dans le menu deroulant -->


	                            <div class=" col-lg-3 form-cols">
	                                <div class="default-select" id="default-selects"">
											<select>
                                                  <?php
                                                 include ('connexion.php');
                                                  $sql = "SELECT * FROM ville";
                                                    $query = $conn->query($sql);
                                                    while ($row = $query->fetch_assoc()) {
                                         echo "
                                    
                              <option value='" . $row['ville'] . "'>" . $row['ville'] . "</option>
                            ";
                                }
                                ?>
	                                    </select>
	                                </div>
	                            </div>


	                            <div class=" col-lg-3 form-cols">
	                                    <div class="default-select" id="default-selects2">
	                                        <select>
	                                            <?php
                                                 include ('connexion.php');
                                                  $sql = "SELECT * FROM salaire";
                                                    $query = $conn->query($sql);
                                                    while ($row = $query->fetch_assoc()) {
                                         echo "

	                                            <option value='" . $row['salaire'] . "'>" . $row['salaire'] . "</option>
                            ";
                                }
                                ?>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="col-lg-2 form-cols">
	                                    <button type="button" class="btn btn-info">
	                                        <span class="lnr lnr-magnifier"></span> Search
	                                    </button>
	                                </div>
	                            </div>
	                    </form>

	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End banner Area -->

	    <!-- Start features Area -->
	    <section class="features-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-feature">
	                        <h4>Energie renouvelable</h4>

	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-feature">
	                        <h4>Eco-Construction</h4>

	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-feature">
	                        <h4>Agriculture durable</h4>

	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-feature">
	                        <h4>Mobilié durable</h4>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End features Area -->

	    <!-- Start popular-post Area -->
	    <section class="popular-post-area pt-100">
	        <div class="container">
	            <div class="row align-items-center">
	                <div class="active-popular-post-carusel">
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img class="img-fluid" src="img/p1.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Energie renouvelable</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                Leur rôle consiste à concevoir, installer et entretenir des systèmes de production
	                                d'énergie propre, réduisant ainsi la dépendance aux combustibles fossiles et
	                                contribuant à la lutte contre le changement climatique.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/p2.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Eco-Construction</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                Utiliser des matériaux écologiques, mettent en œuvre des systèmes d'efficacité
	                                énergétique, intègrent des solutions d'énergie renouvelable et favorisent une
	                                utilisation responsable des ressources.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/p1.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Gestion de dechet</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                développer des stratégies de gestion des déchets, mettent en place des programmes de
	                                recyclage, encouragent la réduction des déchets et veillent à la conformité aux
	                                réglementations environnementales.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/p2.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Agriculture durable</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                Travaillent à améliorer la productivité agricole tout en minimisant l'impact sur les
	                                écosystèmes, en favorisant la biodiversité et en préservant les ressources naturelles.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/p1.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Mobilité durable</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                Inclure le développement de transports en commun efficaces, la promotion du
	                                covoiturage, la mise en place de réseaux de vélos partagés et la promotion de véhicules
	                                électriques.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="single-popular-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/p2.png" alt="">

	                        </div>
	                        <div class="details">
	                            <a href="#">
	                                <h4>Conservation de la biodiversité</h4>
	                            </a>
	                            <h6>Abidjan</h6>
	                            <p>
	                                Effectuer des recherches sur la biodiversité, développent des programmes de
	                                conservation, gèrent les aires protégées, sensibilisent à l'importance de la
	                                préservation de la nature et collaborent avec les communautés locales pour une gestion
	                                durable des ressources naturelles.
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End popular-post Area -->

	    <!-- Start feature-cat Area -->
	    <section class="feature-cat-area pt-100" id="category">
	        <div class="container">
	            <div class="row d-flex justify-content-center">
	                <div class="menu-content pb-60 col-lg-10">
	                    <div class="title text-center">
	                        <h1 class="mb-10">Domaine de recrutement</h1>

	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o1.png" alt="">
	                        </a>
	                        <p>Energie renouvelable</p>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o2.png" alt="">
	                        </a>
	                        <p>Eco-Construction</p>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o3.png" alt="">
	                        </a>
	                        <p>Gestion de dechet</p>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o4.png" alt="">
	                        </a>
	                        <p>Agriculture durable</p>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o5.png" alt="">
	                        </a>
	                        <p>Mobilité durable</p>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-4 col-sm-6">
	                    <div class="single-fcat">
	                        <a href="category.html">
	                            <img src="img/o6.png" alt="">
	                        </a>
	                        <p>biodiversité</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End feature-cat Area -->

	    <!-- Start post Area -->
	    <section class="post-area section-gap">
	        <div class="container">
	            <div class="row justify-content-center d-flex">
	                <div class="col-lg-8 post-list">

	                    <?php
            $i=0;
                
            include ('connexion.php');
            $sql_login = "SELECT * FROM metier"; 
            $result_login = $conn->query($sql_login);
            $row_article = mysqli_fetch_array($result_login);
            while($row = $result_login->fetch_assoc()){     
            ?>


	                    <div class="single-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/ost.png" alt="">

	                        </div>
	                        <div class="details">
	                            <div class="title d-flex flex-row justify-content-between">
	                                <div class="titles">
	                                    <a href="single.html">
	                                        <h4><?php echo $row['categorie'];?></h4>
	                                    </a>
	                                    <h6><?php echo $row['metier'];?></h6>
	                                </div>
	                                <ul class="btns">
	                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
	                                    <li><a href="#">postuler</a></li>
	                                </ul>
	                            </div>
	                            <p>
	                                <?php echo $row['description'];?>
	                            </p>
	                            <h5> Temps de travaille: Temps plein</h5>
	                            <p class="address"><span class="lnr lnr-map"></span> <?php echo $row['ville'];?></p>
	                            <p class="address"><span class="lnr lnr-database"></span> <?php echo $row['salaire'];?></p>
	                        </div>
	                    </div>

	                    <?php $i++; } ?>





	                    <div class="single-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/post.png" alt="">
	                            <ul class="tags">

	                            </ul>
	                        </div>
	                        <div class="details">
	                            <div class="title d-flex flex-row justify-content-between">
	                                <div class="titles">
	                                    <a href="single.html">
	                                        <h4>Creative Art Designer</h4>
	                                    </a>
	                                    <h6>Premium Labels Limited</h6>
	                                </div>
	                                <ul class="btns">
	                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
	                                    <li><a href="#">postuler</a></li>
	                                </ul>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                ididunt ut dolore magna aliqua.
	                            </p>
	                            <h5>Job Nature: Full time</h5>
	                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
	                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                        </div>
	                    </div>
	                    <div class="single-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/post.png" alt="">
	                            <ul class="tags">

	                            </ul>
	                        </div>
	                        <div class="details">
	                            <div class="title d-flex flex-row justify-content-between">
	                                <div class="titles">
	                                    <a href="single.html">
	                                        <h4>Creative Art Designer</h4>
	                                    </a>
	                                    <h6>Premium Labels Limited</h6>
	                                </div>
	                                <ul class="btns">
	                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
	                                    <li><a href="#">postuler</a></li>
	                                </ul>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                ididunt ut dolore magna aliqua.
	                            </p>
	                            <h5>Job Nature: Full time</h5>
	                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
	                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                        </div>
	                    </div>
	                    <div class="single-post d-flex flex-row">
	                        <div class="thumb">
	                            <img src="img/post.png" alt="">
	                            <ul class="tags">

	                            </ul>
	                        </div>
	                        <div class="details">
	                            <div class="title d-flex flex-row justify-content-between">
	                                <div class="titles">
	                                    <a href="single.html">
	                                        <h4>Creative Art Designer</h4>
	                                    </a>
	                                    <h6>Premium Labels Limited</h6>
	                                </div>
	                                <ul class="btns">
	                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
	                                    <li><a href="#">postuler</a></li>
	                                </ul>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                ididunt ut dolore magna aliqua.
	                            </p>
	                            <h5>Job Nature: Full time</h5>
	                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
	                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                        </div>
	                    </div>

	                    <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

	                </div>
	                <div class="col-lg-4 sidebar">
	                    <div class="single-slidebar">
	                        <h4>Jobs by Location</h4>
	                        <ul class="cat-list">
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>New York</p><span>37</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Park Montana</p><span>57</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Atlanta</p><span>33</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Arizona</p><span>36</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Florida</p><span>47</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Rocky Beach</p><span>27</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Chicago</p><span>17</span>
	                                </a></li>
	                        </ul>
	                    </div>

	                    <div class="single-slidebar">
	                        <h4>Top rated job posts</h4>
	                        <div class="active-relatedjob-carusel">
	                            <div class="single-rated">
	                                <img class="img-fluid" src="img/r1.jpg" alt="">
	                                <a href="single.html">
	                                    <h4>Creative Art Designer</h4>
	                                </a>
	                                <h6>Premium Labels Limited</h6>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                    ididunt ut dolore magna aliqua.
	                                </p>
	                                <h5>Job Nature: Full time</h5>
	                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
	                                </p>
	                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                                <a href="#" class="btns text-uppercase">postuler job</a>
	                            </div>
	                            <div class="single-rated">
	                                <img class="img-fluid" src="img/r1.jpg" alt="">
	                                <a href="single.html">
	                                    <h4>Creative Art Designer</h4>
	                                </a>
	                                <h6>Premium Labels Limited</h6>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                    ididunt ut dolore magna aliqua.
	                                </p>
	                                <h5>Job Nature: Full time</h5>
	                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
	                                </p>
	                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                                <a href="#" class="btns text-uppercase">postuler job</a>
	                            </div>
	                            <div class="single-rated">
	                                <img class="img-fluid" src="img/r1.jpg" alt="">
	                                <a href="single.html">
	                                    <h4>Creative Art Designer</h4>
	                                </a>
	                                <h6>Premium Labels Limited</h6>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
	                                    ididunt ut dolore magna aliqua.
	                                </p>
	                                <h5>Job Nature: Full time</h5>
	                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
	                                </p>
	                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
	                                <a href="#" class="btns text-uppercase">postuler job</a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="single-slidebar">
	                        <h4>Jobs by Category</h4>
	                        <ul class="cat-list">
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Technology</p><span>37</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Media & News</p><span>57</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Goverment</p><span>33</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Medical</p><span>36</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Restaurants</p><span>47</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Developer</p><span>27</span>
	                                </a></li>
	                            <li><a class="justify-content-between d-flex" href="category.html">
	                                    <p>Accounting</p><span>17</span>
	                                </a></li>
	                        </ul>
	                    </div>

	                    <div class="single-slidebar">
	                        <h4>Carrer Advice Blog</h4>
	                        <div class="blog-list">
	                            <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
	                                <a href="single.html">
	                                    <h4>Home Audio Recording <br>
	                                        For Everyone</h4>
	                                </a>
	                                <div class="meta justify-content-between d-flex">
	                                    <p>
	                                        02 Hours ago
	                                    </p>
	                                    <p>
	                                        <span class="lnr lnr-heart"></span>
	                                        06
	                                        <span class="lnr lnr-bubble"></span>
	                                        02
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="single-blog " style="background:#000 url(img/blog2.jpg);">
	                                <a href="single.html">
	                                    <h4>Home Audio Recording <br>
	                                        For Everyone</h4>
	                                </a>
	                                <div class="meta justify-content-between d-flex">
	                                    <p>
	                                        02 Hours ago
	                                    </p>
	                                    <p>
	                                        <span class="lnr lnr-heart"></span>
	                                        06
	                                        <span class="lnr lnr-bubble"></span>
	                                        02
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
	                                <a href="single.html">
	                                    <h4>Home Audio Recording <br>
	                                        For Everyone</h4>
	                                </a>
	                                <div class="meta justify-content-between d-flex">
	                                    <p>
	                                        02 Hours ago
	                                    </p>
	                                    <p>
	                                        <span class="lnr lnr-heart"></span>
	                                        06
	                                        <span class="lnr lnr-bubble"></span>
	                                        02
	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End post Area -->


	    <!-- Start callto-action Area -->
	    <section class="callto-action-area section-gap" id="join">
	        <div class="container">
	            <div class="row d-flex justify-content-center">
	                <div class="menu-content col-lg-9">
	                    <div class="title text-center">
	                        <h1 class="mb-10 text-white">Formation et certification egalement disponible</h1>
	                        <p class="text-white">Al_group propose des formation et certification a la fins de chaque cour
	                            vous aurez un test a passer et si vous avez recu 90% du test le certificat vous ai atribuer
	                            en pdf par mail</p>
	                        <a class="primary-btn" href="#">Formation</a>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End calto-action Area -->

	    <!-- Start download Area -->
	    <section class="download-area section-gap" id="app">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 download-left">
	                    <img class="img-fluid" src="img/d1.png" alt="">
	                </div>
	                <div class="col-lg-6 download-right">
	                    <h1>L'application mobile est disponible sur les differentes PlateFormes</h1>

	                    <div class="d-flex flex-row">
	                        <div class="buttons">
	                            <i class="fa fa-apple" aria-hidden="true"></i>
	                            <div class="desc">
	                                <a href="#">
	                                    <p>
	                                        <span>Available</span> <br>
	                                        on App Store
	                                    </p>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="buttons">
	                            <i class="fa fa-android" aria-hidden="true"></i>
	                            <div class="desc">
	                                <a href="#">
	                                    <p>
	                                        <span>Available</span> <br>
	                                        on Play Store
	                                    </p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End download Area -->

	    <!-- start footer Area -->
	    <footer class="footer-area section-gap">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-3  col-md-12">
	                    <div class="single-footer-widget">
	                        <h6>Top Products</h6>
	                        <ul class="footer-nav">
	                            <li><a href="#">Managed Website</a></li>
	                            <li><a href="#">Manage Reputation</a></li>
	                            <li><a href="#">Power Tools</a></li>
	                            <li><a href="#">Marketing Service</a></li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-lg-6  col-md-12">
	                    <div class="single-footer-widget newsletter">
	                        <h6>Newsletter</h6>
	                        <p>You can trust us. we only send promo offers, not a single spam.</p>
	                        <div id="mc_embed_signup">
	                            <form target="_blank" novalidate="true"
	                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
	                                method="get" class="form-inline">

	                                <div class="form-group row" style="width: 100%">
	                                    <div class="col-lg-8 col-md-12">
	                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
	                                            onblur="this.placeholder = 'Enter Email '" required="" type="email">
	                                        <div style="position: absolute; left: -5000px;">
	                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
	                                                type="text">
	                                        </div>
	                                    </div>

	                                    <div class="col-lg-4 col-md-12">
	                                        <button class="nw-btn primary-btn">Subscribe<span
	                                                class="lnr lnr-arrow-right"></span></button>
	                                    </div>
	                                </div>
	                                <div class="info"></div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-3  col-md-12">
	                    <div class="single-footer-widget mail-chimp">
	                        <h6 class="mb-20">Instragram Feed</h6>
	                        <ul class="instafeed d-flex flex-wrap">
	                            <li><img src="img/i1.jpg" alt=""></li>
	                            <li><img src="img/i2.jpg" alt=""></li>
	                            <li><img src="img/i3.jpg" alt=""></li>
	                            <li><img src="img/i4.jpg" alt=""></li>
	                            <li><img src="img/i5.jpg" alt=""></li>
	                            <li><img src="img/i6.jpg" alt=""></li>
	                            <li><img src="img/i7.jpg" alt=""></li>
	                            <li><img src="img/i8.jpg" alt=""></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>

	            <div class="row footer-bottom d-flex justify-content-between">
	                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
	                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	                    Copyright &copy;<script>
	                    document.write(new Date().getFullYear());
	                    </script> Made by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
	                        href="https://colorlib.com" target="_blank">Al_group</a>
	                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	                </p>
	                <div class="col-lg-4 col-sm-12 footer-social">
	                    <a href="#"><i class="fa fa-facebook"></i></a>
	                    <a href="#"><i class="fa fa-twitter"></i></a>
	                    <a href="#"><i class="fa fa-dribbble"></i></a>
	                    <a href="#"><i class="fa fa-behance"></i></a>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!-- End footer Area -->

	    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	    </script>
	    <script src="js/vendor/bootstrap.min.js"></script>
	    <script type="text/javascript"
	        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	    <script src="js/easing.min.js"></script>
	    <script src="js/hoverIntent.js"></script>
	    <script src="js/superfish.min.js"></script>
	    <script src="js/jquery.ajaxchimp.min.js"></script>
	    <script src="js/jquery.magnific-popup.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
	    <script src="js/jquery.sticky.js"></script>
	    <script src="js/jquery.nice-select.min.js"></script>
	    <script src="js/parallax.min.js"></script>
	    <script src="js/mail-script.js"></script>
	    <script src="js/main.js"></script>
	</body>

	</html>