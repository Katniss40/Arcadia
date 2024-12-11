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
    <title>Zoo-Arcadia - Lionceaux</title>
    
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
                <a class="nav-link text-light" aria-current="page" href="/index.php">Accueil</a>
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
            
            <li class="nav-item" data-show="admin employe">
              <a class="btn btn-outline-light me-2" href="/pages/employe.php">Employé</a>
            </li>
            <li class="nav-item" data-show="admin veterinaire">
              <a class="btn btn-outline-light me-2" href="/pages/sante.php">Vétérinaire</a>
            </li>
            <li class="nav-item" data-show="admin">
              <a class="btn btn-outline-light me-2" href="/pages/admin.php">Administrateur</a>
            </li>

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
    <a href="/images/zoo_map.png" class="btn btn-primary">Visite du Zoo</a>
  </div>
</div>

<div id="body">
<section id="services_list" class="section">         
  
  <div class="row bg-arc-mint-green text-light mt-3">            
    <div class="offset-lg-1 col-lg-6">                       
      <div>
        <h1 class="text-light text-center pb-2">Lionceaux</h1>
              <p class="py-2">Arcadia recense actuellement plusieurs naissance de Lionceaux.
              <p class="py-2">Les animaux se trouvent dans l'habitat : Les Marais de Shrek</p>
      </div>
    </div>
          
    <div class="col-lg-4 d-flex justify-content-center text-align-center">
      <img src="/images/savane/lionceaux_ia.jpg" alt="lionceaux" class="service-img img-fluid">
    </div>
  </div>       


</section>
 
  <section id="showAnimals" class="section">
    <div class="row bg-arc-mint-green-light py-3">
      <h2>Nos pensionnaires</h2>
        <div class="row g-0 px-2">
          <div class="col-12 col-lg-4 pb-3 pe-md-2">
            <div class="card card-habitat">
              <img src="/images/savane/lion_lionceau.jpg" class="card-img-top-animal z-0" alt="Zephyra">
                <div class="card-body bg-light d-flex flex-column">
                  <h2>Zephyra & bébé Tessa</h2>
                  <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                    <h3 class="text-light"><i class="fa-solid fa-user-doctor"></i> Le dernier avis du vétérinaire</h3>
                      <ul class="text-light">
                        <li><u>Santé</u> : </li>
                        <li><u>Nourriture conseillée</u> : </li>
                        <li><u>Grammage</u> : </li>
                        <li><u>Dernière visite</u> : </li>
                        <li><u>Autres remarques</u> :  </li>
                      </ul>
                    </div>
                  <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                    <h3 class="text-light"><i class="fa-solid fa-carrot"></i> Dernier nourrissage</h3>
                      <ul class="text-light">
                        <li><u>Date</u> : </li>
                          <li><u>Heure</u> : </li>
                          <li><u>Nourriture donnée</u> : </li>
                          <li><u>Grammage</u> : </li>
                      </ul>
                    </div>
                </div>
              </div> 
            </div>

            <div class="col-12 col-lg-4 pb-3 pe-md-2">
              <div class="card card-habitat">
                <img src="/images/savane/Les-lionceaux.jpg" class="card-img-top-animal z-0" alt="triplés">
                  <div class="card-body bg-light d-flex flex-column">
                    <h2>Riri, Fifi & Loulou</h2>                            
                    <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                      <h3 class="text-light"><i class="fa-solid fa-user-doctor"></i> Le dernier avis du vétérinaire</h3>
                        <ul class="text-light">
                          <li><u>Santé</u> : </li>
                          <li><u>Nourriture conseillée</u> : </li>
                          <li><u>Grammage</u> : </li>
                          <li><u>Dernière visite</u> : </li>
                          <li><u>Autres remarques</u> :  </li>
                        </ul>
                      </div>
                    <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                      <h3 class="text-light"><i class="fa-solid fa-carrot"></i> Dernier nourrissage</h3>
                        <ul class="text-light">
                          <li><u>Date</u> : </li>
                            <li><u>Heure</u> : </li>
                            <li><u>Nourriture donnée</u> : </li>
                            <li><u>Grammage</u> : </li>
                          </ul>
                      </div>
                  </div>
              </div> 
            </div>

            <div class="col-12 col-lg-4 pb-3 pe-md-2">
              <div class="card card-habitat">
                <img src="/images/savane/lionceaux2.jpg" class="card-img-top-animal z-0" alt="Canaillou">
                  <div class="card-body bg-light d-flex flex-column">
                    <h2>Canaillou</h2>                            
                    <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                      <h3 class="text-light"><i class="fa-solid fa-user-doctor"></i> Le dernier avis du vétérinaire</h3>
                        <ul class="text-light">
                          <li><u>Santé</u> : </li>
                          <li><u>Nourriture conseillée</u> : </li>
                          <li><u>Grammage</u> : </li>
                          <li><u>Dernière visite</u> : </li>
                          <li><u>Autres remarques</u> :  </li>
                        </ul>
                      </div>
                    <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                      <h3 class="text-light"><i class="fa-solid fa-carrot"></i> Dernier nourrissage</h3>
                        <ul class="text-light">
                          <li><u>Date</u> : </li>
                            <li><u>Heure</u> : </li>
                            <li><u>Nourriture donnée</u> : </li>
                            <li><u>Grammage</u> : </li>
                      </ul>
                  </div>
                </div>
              </div> 
            </div>

            <div class="col-12 col-lg-4 pb-3 pe-md-2">
              <div class="card card-habitat">
                <img src="/images/savane/lionceaux1.jpg" class="card-img-top-animal z-0" alt="White">
                  <div class="card-body bg-light d-flex flex-column">
                    <h2>White</h2>                            
                      <div<div class="bg-arc-secondary rounded-5 mt-3 p-3">
                        <h3 class="text-light"><i class="fa-solid fa-user-doctor"></i> Le dernier avis du vétérinaire</h3>
                          <ul class="text-light">
                            <li><u>Santé</u> : </li>
                            <li><u>Nourriture conseillée</u> : </li>
                            <li><u>Grammage</u> : </li>
                            <li><u>Dernière visite</u> : </li>
                            <li><u>Autres remarques</u> :  </li>
                          </ul>
                        </div>
                      <div class="bg-arc-secondary rounded-5 mt-3 p-3">
                        <h3 class="text-light"><i class="fa-solid fa-carrot"></i> Dernier nourrissage</h3>
                          <ul class="text-light">
                            <li><u>Date</u> : </li>
                              <li><u>Heure</u> : </li>
                              <li><u>Nourriture donnée</u> : </li>
                              <li><u>Grammage</u> : </li>
                      </ul>
                  </div>
                </div>
              </div> 
            </div>

            
        </div>
    </div>
  </section>

<section id="welcome" class="section">    

<div class="row habitats-presentation text-center pt-3 bg-arc-mint-green text-light">
 
  <a class="btn btn-primary" href="/">Retour à l'accueil</a>
    <h1 class="text-light text-center pb-2"></h1>          
             
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
                        <a class="link-arc-dark-green" href="/pages/savane/elephant.php">Les Eléphants</a>
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