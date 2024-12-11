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
    <title>Zoo-Arcadia - Services</title>
    
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
                <a class="nav-link text-light" href="/pages/services.html">Services</a>
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


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <a class="btn btn-primary" href="/">Retour à l'accueil</a>
    </div>
  </div>

  <!--<div class="container my-md-4 py-3">-->
            
  </div>

<div id="body">

  <section id="welcome" class="mt-3 section">

    <div class="row habitats-presentation text-center pt-3 bg-arc-mint-green-light text-black">

      <h1 class="text-black text-center pb-2">Nos services pour vous satisfaire</h1>

    </div>
  </section>

  <section id="services_list" class="section">
    <div class="row bg-arc-mint-green text-light mt-3">
      <div class="offset-lg-1 col-lg-6">
      <div class="card-header">
                        Horaires d'ouverture des services
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                
                                <th>service</th>
                                <th>horaires</th>
                                <th>habitat</th>                               
                            </tr>
                            </thead>

                            <?php
                include("db_connexion.php");

                $conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

                if ($conn->connect_error) {
                    die("Échec de la connexion : " . $conn->connect_error);
                }

                $sql = "SELECT * FROM services";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        
                        echo "<td>" . htmlspecialchars($row['service']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['horaires']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['habitat']) . "</td>";
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>Aucun habitats trouvés.</td></tr>";
                }
                $conn->close();
                ?>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
      </div>

      <div class="col-lg-4 d-flex justify-content-center text-align-center">
        <img src="/images/savane/gazelle1.png" alt="marais" id="gazelleService" class="service-img img-fluid">
      </div>
    </div>



   

<div class="section row bg-arc-mint-green-light">
    
  <div id="service" class="text-center">
    <h2>Nos Services</h2>
      
  </div>

<section id="services_list" >  

  
  
  <div class="row bg-arc-mint-green mt-3">
    <div class="col-lg-4 d-flex justify-content-center text-align-center">
      <img src="/images/petit_train.jpg" alt="Petit train" class="service-img img-fluid">
    </div>
    
    <div class="offset-lg-1 col-lg-6 text-light">
      <h2 class="services">Petit train</h2>
        <p>Explorez notre parc à bord de notre charmant petit train, une manière relaxante et divertissante de découvrir les trésors cachés de la forêt de Brocéliande 
          et d'admirer nos merveilleux pensionnaires sous un nouvel angle.
        </p>
    </div>
          
      </div>
          
  
      <div class="row bg-arc-mint-green-light mt-3">
          
                          <div class="offset-lg-1 col-lg-6">
                          <h2 class="services">Nos Vétérinaires</h2>
                                  <div class="pb-2">
                      <span class="text-black fw-bold bg-arc-dark py-1 px-2 mb-3 rounded-3"><i class="fa-regular fa-face-smile"></i> SERVICE GRATUIT</span>
                  </div>
                                      <p>Pour une expérience encore plus enrichissante, nos visites guidées vous emmènent dans un voyage captivant 
                                        à travers les différents habitats de nos animaux. Nos vétérinaires passionnés partageront avec vous des connaissances fascinantes sur nos résidents,
                                         tout en mettant l'accent sur notre engagement envers le respect de l'environnement et le bien-être animal. 
                                         Rejoignez-nous pour une aventure mémorable, où chaque moment est une découverte.</p>
          </div>
          <div class="col-lg-4 d-flex justify-content-center text-align-center">
              <img src="/images/veto2.jpg" alt="Veterinaires" class="service-img img-fluid">
          </div>
      </div>
          
  
      <div class="row bg-arc-mint-green mt-3">
          <div class="col-lg-4 d-flex justify-content-center  text-align-center">
              <img src="/images/restau.jpg" alt="Restauration" class="service-img img-fluid">
          </div>
                          <div class="offset-lg-1 col-lg-6">
                          <h2 class="services text-light">Restauration</h2>
                              <p class="text-light">Plongez dans une aventure unique au zoo Arcadia, où chaque visiteur est choyé avec une gamme de services exceptionnels. 
                                Notre espace de restauration propose une variété de délices culinaires, allant des snacks rapides aux repas gastronomiques, 
                                pour ravir les papilles des petits et des grands aventuriers.</p>

                                Nos restaurant sont ouvert tous les jours de <

                                
          </div>
         
      </div>
          
                          
  
      

  </section>

</div>

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