<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/scss/main.css"/>
    <script src="https://kit.fontawesome.com/61c7fa05f4.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/images/logo3.png" type="image/gif">
    <title>Zoo-Arcadia-Accueil</title>
    
</head>
<body>
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Zoo Arcadia</a>
          <img src="/images/logo3.png" alt="Logo" width="70" height="60" class="d-inline-block align-text-top">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav nav-underline mx-auto">
              <li class="nav-item ">
                <a class="nav-link text-light" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/pages/services.php">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="/pages/habitats.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Habitats
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pages/jungle/jungle.html">La Jungle de Mowgli</a></li>
                  <li><a class="dropdown-item" href="/pages/marais/marais.html">Le Marais de Shrek</a></li>
                  <li><a class="dropdown-item" href="/pages/savane/savane.html">La Savane De Simba</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pages/habitats.html">Tous les Habitats</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/pages/contact.html">Contact</a>
              </li>              
            </ul>
            
            <!--<li class="nav-item" data-show="admin employe">
              <a class="btn btn-outline-light me-2" href="/pages/employe.php">Employé</a>
            </li>
            <li class="nav-item" data-show="admin veterinaire">
              <a class="btn btn-outline-light me-2" href="/pages/sante.php">Vétérinaire</a>
            </li>
            <li class="nav-item" data-show="admin">
              <a class="btn btn-outline-light me-2" href="/pages/admin.php">Administrateur</a>
            </li>-->

            <li class="nav-item" data-show="connected">
              <a class="btn btn-outline-light me-2" id="logoutBtn">Deconnexion</a>
            </li>

            <li class="nav-item" data-show="disconnected">
              <a class="btn connexion btn-outline-light me-2" href="/pages/connexion.php" id="loginBtn">Connexion staff</a>
            </li>
          
            <!--<a type="button" class="btn connexion btn-outline-light me-2" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" href="/connexion">Connexion</a>
            <button class="btn btn-outline-light" id="btnSignout">Deconnexion</button>-->
        </div>
        </div>
      </nav>
    </header>
    
    <main id="main-page">
<br>
<br>
<br>
<!--Gros titre Injecté sur toutes les pages-->
<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <a href="/pages/Map.html" class="btn btn-primary">Visite du Zoo</a>
    </div>
  </div>

  <div id="body">


  <!-- Le carrousel de présentation du zoo et de ses services   Bloc 1-->
<div class="container-lg mb-4 py-3">
  
  <div class="d-flex d-md-block justify-content-center">
    <section id="carousel" class="mt-md-2">
      <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    
        <div class="carrousel carousel-inner">
          <div class="carousel-item active">            
            <div class="img-container slide">
              <img src="/images/slider/bb_animaux1.jpg" class="d-block w-100" alt="naissances">
                                                                  
            </div>
    
            <div class="carousel-caption d-none d-md-block text-bottom">
              <div id="naissances">   
                <h5 >Nos naissances,</h5>
                  <p >Venez visiter notre petit coin de paradis, et voir nos dernières naissances.</p>
              </div>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="img-container slide">
              <img src="/images/slider/petit_train1.jpg" class="d-block w-100" alt="petit_train">
            </div>
    
            <div class="carousel-caption d-none d-md-block">
              <div id="train">
                <h5 >Visite du parc</h5>
                  <p>Prenez le temps de faire le tour du parc en petit train, celui-ci vous amènera dans des lieux mytiques.</p>
              </div>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="img-container slide">
              <img src="/images/slider/restau_zoo1.jpg" class="d-block w-100" alt="restaurant">
            </div>
                
            <div class="carousel-caption d-none d-md-block">
              <div id="restau">
                <h5 >Notre restau</h5>
                  <p>Un petit creux? venez vous asseoir à notre table, en plein coeur de la foret, et duguster nos plats preparés avec passion face aux animaux de la jungle.</p>
              </div>
            </div>   
          </div>  
                          
        </div>
        
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span  class="visually-hidden">Previous</span>
          </button>
   
          <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span  class="visually-hidden">Next</span>
          </button>
        
      </div>
    </section>
  </div>
      
</div>

      <section id="welcome" class="mt-3 section">

          <div class="row habitats-presentation text-center pt-3 bg-arc-mint-green-light text-black">

              <h1 class="text-black text-center pb-2">Bienvenue au Zoo Arcadia</h1>

          </div>
      </section>

<!-- Présentation du zoo   bloc 2 -->
      <section id="services_list" class="section">
          <div class="row bg-arc-mint-green text-light mt-3">
              <div class="offset-lg-1 col-lg-6">
                  <div>
                      <p>Lieu magique où vous pourrez découvrir des animaux extraordinaires et vivre une expérience inoubliable.
                          Le directeur, José, c'est lancé dans cette aventure en 1960 décidant de créer un zoo pas comme les autres,un zoo le plus proche possible de la nature,
                          avec un air avangardiste d'écologie un zoo où les animaux vivent en liberté dans un environnement proche de leur habitat naturel.
                          Encadré par des vétérinaires expérimentés, les animaux sont chouchoutés et soignés avec amour. Il a choisit de s'installer dans la forêt de Brocéliande,
                          forêt mythique et enchantée citée dans plusieurs texte liés pour certain à la légende du roi Arthur. Vous découvrirez, au détour des chemins,
                          La légende de Merlin l'enchanteur, et des chevaliers de la table ronde. Au fil de la visite, une expérience immersive vous attends.
                          Vous pourrez vous promener avec le petit train, ou encore vous perdre dans le labyrinthe de la forêt enchantée, Chaque parcelle du site a été pensée
                          pour vous faire vivre une expérience unique et inoubliable. 🌿🐒🦜</p>
                  </div>
              </div>

              <div class="col-lg-4 d-flex justify-content-center text-align-center">
                  <img src="/images/savane/gazelle1.png" alt="marais" class="service-img img-fluid">
              </div>
          </div>


      </section>


<!--la page "Habitat" Commune a toutes les pages-->
<section id="habitat" class="section habitat ">
  <div class="row bg-arc-mint-green-light py-3">
    <h2>Explorer un habitat</h2>
    <section id="habitats">
      <div class="row bg-arc-mint-green-light py-3">
        
        <div class="col-12 col-lg-4 pb-3">
          <div class="card card-habitat">
            <img src="/images/Le_marais.jpg" class="card-img-top-animal z-0" alt="marais">
              <div class="card-img-overlay d-flex align-items-start justify-content-center">
                <h5 class="card-title text-light z-1">
                  <a class="no-underline" href="/pages/marais/marais.html">Les Marais de Shrek</a>
                </h5>
              </div>
              <div class="card-body bg-light d-flex flex-column">
                <p class="p-habitats card-text z-1">
                  Bienvenue dans le monde mystérieux et envoutant des marais, un ecosystème unique
                  où la terre et l'eau se rencontre pour créer une biodiversité exceptionnelle.
                </p>
                <div class="d-flex flex-xl-row justify-content-around">
                  <a class="btn btn-arc-dark z-1 me-1" href="/pages/marais/marais.html"> Visiter la page </a>
                    <button class="btn btn-outline-arc-dark z-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarais1" aria-expanded="false" aria-controls="collapseMarais">
                      Voir les animaux
                        <i class="fa-solid fa-arrow-down">
                         
                        </i>
                    </button>
                </div>
                <div class="collapse" id="collapseMarais1">
                  <h4>Animaux de la zone :</h4>
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/castors.php">Les Castors</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/flamand.php">Les Flamands Roses</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/fourmilliers.php">Les Fourmiliers</a>
                    </li>
                    
                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/hippopotames.php">Les Hippopotames</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/crocodiles.php">Les Crocodiles</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/loutre.php">Les Loutres</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/suricats.php">Les Suricats</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/tritons.php">Le Triton</a>
                    </li>

                    <li>
                      <span class="fa-li">
                        <i class="fa-solid fa-paw"></i>
                      </span>
                      <a class="link-arc-dark-green" href="/pages/marais/oiseaux.php">Les Oiseaux</a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 pb-3">
            <div class="card card-habitat">
              <img src="/images/La_savane.jpg" class="card-img-top-animal z-0" alt="savane">
                <div class="card-img-overlay d-flex align-items-start justify-content-center">
                  <h5 class="card-title text-light z-1">
                    <a class="no-underline" href="/pages/savane/savane.html">La Savane de Simba</a>
                  </h5>
                </div>
                <div class="card-body bg-light d-flex flex-column">
                  <p class="p-habitats card-text z-1">
                    Bienvenue dans le monde fascinant de la savane,un ecosystème dynamique et riche 
                    en diversité, ou la natture dévoile toute sa majesté.                   
                    
                  </p>
                  <div class="d-flex flex-xl-row justify-content-around">
                    <a class="btn btn-arc-dark z-1 me-1" href="/pages/savane/savane.html"> Visiter la page </a>
                      <button class="btn btn-outline-arc-dark z-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarais2" aria-expanded="false" aria-controls="collapseMarais">
                        Voir les animaux
                          <i class="fa-solid fa-arrow-down">
                           
                          </i>
                      </button>
                  </div>
                  <div class="collapse" id="collapseMarais2">
                    <h4>Animaux de la zone :</h4>
                    <ul class="fa-ul">                    

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/gazelle.php">Les Gazelles</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/girafe.php">Les Girafes</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/lion.php">Les Lions</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/lionceaux.php">Nos Bébés Lionceaux</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/rhinoceros.php">Les Rhinocéros</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/zebres.php">Les Zèbres</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/antilopes.php">Les Antilopes</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/elephant.php">LesEléphants</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/savane/vautour.php">Les Vautours</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 pb-3">
          <div class="card card-habitat">
            <img src="/images/La_jungle.jpg" class="card-img-top-animal z-0" alt="jungle">
              <div class="card-img-overlay d-flex align-items-start justify-content-center">
                <h5 class="card-title text-light z-1">
                  <a class="no-underline" href="/pages/jungle/jungle.html">La Jungle de Mowgli</a>
                </h5>
              </div>
              <div class="card-body bg-light d-flex flex-column">
                <p class="p-habitats card-text z-1">
                 Bienvenue dans le monde vibrant et mystérieux de la jungle, un ecosystème luxuriant et diversifié
                 où la nature révèle toute sa splendeur.
                </p>
                <div class="d-flex flex-xl-row justify-content-around">
                  <a class="btn btn-arc-dark z-1 me-1" href="/pages/jungle/jungle.html"> Visiter la page </a>
                    <button class="btn btn-outline-arc-dark z-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarais3" aria-expanded="false" aria-controls="collapseMarais">
                      Voir les animaux
                        <i class="fa-solid fa-arrow-down">
                         
                        </i>
                    </button>
                  </div>
                  <div class="collapse" id="collapseMarais3">
                    <h4>Animaux de la zone :</h4>
                    <ul class="fa-ul">
                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/toucan.php">Les Toucans</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/cameleon.php">Les Caméléons</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/jaguard.php">Les Jaguards</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/panthere.php">Les Panthères</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/perroquets.php">Les Pérroquets</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/tigre.php">Les Tigres</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/singe.php">Les Singes</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/gorille.php">Les Gorilles</a>
                      </li>

                      <li>
                        <span class="fa-li">
                          <i class="fa-solid fa-paw"></i>
                        </span>
                        <a class="link-arc-dark-green" href="/pages/jungle/anaconda.php">Les Anacondas </a>
                      </li>

                      </ul>
                  </div>
                </div>
            </div>
              
        </div>
      </div>
    </section>
  </div>
</section>

<!--le parc   bloc 4 -->
<section id="facts" class="section">
  <div class="row bg-arc-mint-green">
    <div class="col rect-upper-effect"></div>
  </div>

  <div class="row-promo text-center py-3 bg-arc-mint-green text-bg-black">
    <div class="col-md-4 py-3">
      <i class="fa-solid fa-tree fs-1 text text-light">
        
      </i>
        <p class="promo text-light">Un espace naturel couvrant plusieurs milliers d'hectares de forêt qui respect le bien-etre des animaux.</p>
    </div>

    <div class="col-md-4 py-3">
      <i class="fa-solid fa-solar-panel fs-1 text text-light">
        
      </i>
        <p class="promo text-light">Notre site c'est vu attribué le label "Ecolabel", avec la marque NF environnement, officielement reconnu par les organismes chargés de la certification.</p>     
    </div>

    <div class="col-md-4 py-3">
      <i class="fa-solid fa-user-doctor fs-1 text text-light">
        
      </i>
        <p class="promo text-light">
          Nos soigneurs sont trés attentif au bien-être de nos pensionnaires.
        </p>
    </div>
  </div>

  <div class="row-girafe text-center bg-arc-mint-green text-light">
       <div>   
        <img src="/images/famille girafe.jpg" alt="girafes" class="img-top-animal-girafe">
        <p></p>
        </div>
    <div class="col-md-4 py-3-girafe ">
      <div  class="bg-arc-mint-green-girafe  ">     
          <div id="girafe" class="bg-arc-mint-green-light text-body">
              <h3>La Girafe (Giraffa camelopardalis)</h3>
            <p>est une espèce de mammifères ongulés artiodactyles, du groupe des ruminants,<br>
            vivant dans les savanes africaines et répandue du Tchad jusqu'en Afrique du Sud.<br>
            Son nom commun vient de l'arabe زرافة, zarāfah,<br>
            mais l'animal fut anciennement appelé camélopard, du latin camelopardus1,<br>
            contraction de camelus (chameau) en raison du long cou et de pardus (léopard) <br>
                en raison des taches recouvrant son corps.</p>

          </div>
          <a href="/images/girafe.jpg" class="btn btn-arc-light text-light">Accéder à la page des girafes</a>
      </div>
    </div>
  </div>

  <div class="row bg-arc-dark">
    <div class="col rect-lower-effect"></div>
  </div>
</section>

 <!-- Les services bloc 5 nos services-->
 <section id="services" class="section bg-arc-mint-green-light">
  <div class="row-services bg-arc-mint-green-light py-3 text---bs-card-color">
    <h2>Nos services</h2>
      <p class="services-home" >
        Savourez votre journée en compagnie des animaux : nos employés sont aux petits soins pour vous proposer des services qui rendront votre expérience unique.
      </p>

        <div class="row text-center align-items-center g-0 d-none d-lg-flex">
          <div class="col-lg-4 py-3">
            <img src="/images/train.jpg" alt="Petit train" class="service-img">
              <h3 class="fw-normal">Petit train</h3>
          </div>

          <div class="col-lg-4 py-3">
            <img src="/images/guide.jpg" alt="Visites guidées" class="service-img">
              <h3 class="fw-normal">Visites guidées</h3>
          </div>

          <div class="col-lg-4 py-3">
            <img src="/images/restau.jpg" alt="Restauration" class="service-img">
            <h3 class="fw-normal">Restauration</h3>
          </div>
        </div>

  </div>  
     
    <a class="btn btn-primary btn-services " href="/pages/services.php">En savoir plus sur nos services cliquez -->ici<-- </a>
   
      

</section> 


<!-- Les avis, contact et map -->
<section id="contact" class="section avis">

  <div class="row bg-arc-mint-green pb-4">
        <h2 class="text-light">Donnez votre avis</h2>
        <p class="text-light">Vos avis comptent pour nous : partagez votre expérience.</p>
      <div class="row g-0 text-center d-flex align-items-center">
          <div class="col-md-12 col-lg-3 text-light">
              <a class="btn btn-bg-arc-mint-green-light mb-3 btn-lg text-light" href="/pages/avis.php"><i class="bi bi-pencil-square"></i> Écrivez nous</a>
              <ul class="list-inline my-2 fs-2 text">
                  <li class="list-inline-item">
                      <a href="#" class="text-decoration-none text-light"><i class="bi bi-youtube"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#" class="text-decoration-none text-light"><i class="bi bi-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#" class="text-decoration-none text-light"><i class="bi bi-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#" class="text-decoration-none text-light"><i class="bi bi-facebook"></i></a>
                  </li>
              </ul>
          </div>
          
          <div class="carousel-item ">
              <div class="card">
                  <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                    <i class="bi bi-person-circle"></i>
                      <span>@Cmoi</span>
                  </div>
                  <div class="card-body">
                      <p class="card-text">"C&#039;était une journée exceptionnelle dans un milieu naturel et respectueux de l&#039;environnement. Nous reviendrons pour sûr !"</p>
                  </div>
              </div>
          </div>

          <div class="d-none d-lg-flex col-lg-5">
              <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card">
                        <div class="card-header bg-arc-mint-green text-light d-flex justify-content-between align-items-center">
                          <i class="bi bi-person-circle"></i>
                            <span>@Cmoi</span>
                        </div>
                        <div class="card-body">
                          <p class="card-text">"C&#039;était une journée exceptionnelle dans un milieu naturel et respectueux de l&#039;environnement. Nous reviendrons pour sûr !"</p>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="card">
                        <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                          <i class="bi bi-person-circle"></i>
                            <span>@Cmoi</span>
                        </div>
                        <div class="card-body">
                          <p class="card-text">"C&#039;était vraiment fun et les animaux ont l&#039;air heureux dans ce zoo. Nous y retournerons si nous passons dans le coin. Bravo aux équipes."</p>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="card">
                        <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                          <i class="bi bi-person-circle"></i>
                            <span>@Marc36</span>
                        </div>
                        <div class="card-body">
                          <p class="card-text">"Quelle journée incroyable au zoo ! Les animaux étaient si fascinants à observer, et j'ai tellement appris sur la diversité de notre belle planète. C'était une expérience qui a vraiment égayé ma journée et renforcé mon amour pour la nature. #Gratitude #BelleJournée"</p>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="card">
                        <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                          <i class="bi bi-person-circle"></i>
                            <span>@SimonC</span>
                        </div>
                        <div class="card-body">
                          <p class="card-text">"Je suis venu plusieurs fois et je ne m'en lasse pas. Toujours une expérience enrichissante."</p>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="card">
                        <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                          <i class="bi bi-person-circle"></i>
                            <span>@Antoine123</span>
                        </div>
                        <div class="card-body">
                          <p class="card-text">"Je recommande vivement ce zoo ! La variété d'espèces est impressionnante."</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>

          <div class="col-md-6 col-lg-4 px-2">
            <h3 class="text-light"><i class="fa-regular fa-map"></i> Nous trouver</h3>                       
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d21352.38877067888!2d-2.178005767221728!3d48.01277099625603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sforet%20de%20broceliande!5e0!3m2!1sfr!2sfr!4v1710694787647!5m2!1sfr!2sfr" width="300" height="250"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
  </div>
  
</section>

<section id="welcome" class="section habitat">    

  <div class="row habitats-presentation text-center pt-3 bg-arc-mint-green-light text-light">
    <a class="btn btn-primary btn-services " href="/index.php">haut de la page cliquez -->ici<-- </a>    
      <h1 class="text-light text-center pb-2"></h1>                        
  </div>  
</section>

            
</div>
    </main>


    <div class="footer-clean">
      <footer>
          <div class="container-footer">
              <div class="row-footer justify-content-center">
                  <div class="col-sm-4 item">
                    <h5 class="text-black">Nos horaires</h5>
                    <p class="p-footer">Tous les jours du lundi au vendredi: de 10h à 18h</br>
                        Weekend, Vacances et jours fériés: de 9h à 18h</p>
                  </div>
                  <div class="col-sm-4 item">
                    <h5 class="text-black">Où nous trouver</h5>
                    <p class="p-footer"> 497, route des sables 35050 Broceliandes</br>
                     Tel : 06.05.04.03.02
                     </p>
                  </div>
                  <div class="col-sm-4 item">
                    <a class="text-light" href="mentions_legales.docx">Mentions légale</a>
                    <h5>Zoo Arcadia © 2025</h5>
                    
                    <!--<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">(https://github.com/SamKirkland/FTP-Deploy-Action)-->                 
                  </div>
                  
              </div>
          </div>
      </footer>
    </div>

  </div>
  <script src="/js/auth/signin.js"></script>
    <script src="/js/index.js"></script>
    
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>