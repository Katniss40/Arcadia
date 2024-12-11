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
    <title>Zoo-Arcadia - Employe </title>
    
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


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Retour a l'accueil</a></div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/pages/employe.php">Employe Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/employe.php">Tableau de bord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/edit_animal.php">Gérer les animaux</a>
                        </li>                  
                        
                    </ul>
                </div>
            </div>
    </nav>


<div id="body">


<div>
    <section id="employe" class="section "> 

    
        <section class="mt-3 bg-arc-mint-green">

          <div class="row text-center text-light">
              <div class="col-md-12">
                  <div>
                      <div class="gazelle-titre">
                          <img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle"><h1 class="gazelle-text text-light text-center pb-2">Espace Employé</h1><img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle">
                      </div>
                      <h3>Bienvenue dans votre espace.</h3>

                      <p class="accueil welcome-gazelle">
                      celui-ci vous est réservé. </br>
                      Nous souhaitons constituer une équipe d'employés dévoués pour travailler en étroite collaboration avec nos vétérinaires. 
                      Vos compétences et votre expérience seront essentielles pour interpréter les données fournies et pour prendre des décisions éclairées, 
                      garantissant ainsi un environnement sûr et enrichissant pour nos animaux et nos visiteurs</br>
                      Cet espace vous permet aussi  de valider les avis des visiteurs du parc. 
                      Ceux ci seront visible sur notre site.</br>
                      </p>
                  </div>
              </div>    
          </div>
    
          <div class="row bg-arc-dark">
              <div class="col rect-lower-effect"></div>
          </div>
      
        </section>       


<div class="container bg-arc-mint-green-light-staff">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreationModal" >
      Ajouter une alimentation
  </button>
  <p> Espace pour valider vos actions sur les animaux du parc</p>
</div>
<br>
<br>
<br>

<div class="avis-container bg-arc-mint-green-light-staff">

</div>
<br>
<div class="container bg-arc-mint-green-light-staff">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AvisModal" data-show="employe" >
    Valider un commentaire
    </button>
    <p> Espace pour valider les avis des visiteurs du parc</p>
</div>

<div class="card-services">
                        <div id="employees">
                            <div class="card-header bg-arc-mint-green-light-staff">
                               <h2>modification des services</h2>
                            </div>

                            <div class="card-body bg-arc-mint-green-light-staff">
                                <form action="/pages/controleurs/gestion_service.php" method="POST">
                                    <div class="form-group">
                                        <label for="service">Nom du service</label>
                                        <input type="text" class="form-control" id="service" name="service"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="habitat">Nom de l'habitat</label>
                                        <input type="text" class="form-control" id="habitat" name="habitat"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="horaires">Horaires</label>
                                        <input type="text" class="form-control" id="horaires" name="horaires"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="action">Action</label>
                                        <input type="text" class="form-control" id="action" name="action"  required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">OK</button>
                                </form>
                            </div>
                        </div>
                          <br>
                        <br>
                    </div>
</div>
<!-- Modal edition--> 
<div class="modal fade" id="CreationModal" tabindex="-1" aria-labelledby="CreationPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Consommation </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-alimentation">
                <div class="mb-3">
                    <label for="NamePhotoInput" class="form-label">Animal_Id</label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="Id"> 
                </div>
                <div class="mb-3">
                    <label for="nourriture" class="form-label">Nourriture</label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="nourriture"> 
                </div>
                <div class="mb-3">
                    <label for="FermetureInput" class="form-label">Quantité </label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="quantite"> 
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="btn-alimentation">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<!-- Modal edition -->
<div class="modal fade" id="AvisModal" tabindex="-1" aria-labelledby="CreationPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Valider </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-avis-validation">
                <div class="mb-3">
                    <label for="NamePhotoInput" class="form-label">Avis_Id</label>
                    <input type="text" class="form-control" id="IdInput"  name="Id"> 
                </div>
                <div class="mb-3">
                    <label for="nourriture" class="form-label">Visible : true ou false </label>
                    <input type="text" class="form-control" id="IsVisible"  name="IsVisible" > 
                </div>
                
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="btn-avis-validation">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<br>
<br>
<br>

</div>


<div class="row bg-arc-mint-green-light-staff py-3">
    <header class="bg-primary text-white text-center py-3">
        <h1>Bienvenue, Employé de l'habitat !</h1>
    </header>
    <main class="container mt-4">
        <section>
            <h2 class="mb-4">Avis en attente de validation</h2>
            
        </section>
    </main>
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