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
    <title>Zoo-Arcadia - Administrateur</title>
    

       
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
      <div><a href="/" class="btn btn-primary">Espace Administrateur</a></div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/pages/admin.php">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/gestion_service.php">Gérer les services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/gestion_employe.php">Gérer les employés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/gestion_animal.php">Gérer les animaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/gestion_habitat.php">Gérer les habitats</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div id="body">

<section id="admin" class="section ">
        
<div class="row bg-arc-mint-green-light-staff py-3">
    <div class="dashboard">
            <div class="column column-1">
                <h2>Bienvenue sur votre tableau de bord</h2>
                    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
                 
                    

                    <div class="container mt-5 bg-arc-mint-green-light">
            <h2>Ajouter un nouvel employé</h2>
            <form action="/pages/controleurs/gestion_employe.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                    
                        <div class="form-group">
                        <label for="name">Nom de l'employé</label>
                        <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                        <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" name="username" value="" required>                              
                        </div>
                        <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" value="" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" class="form-control" id="poste" name="poste" value="" required>
                            <div class="input-group">
                                
                                <div class="input-group-append">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="statut">Statut</label>
                        <input type="text" class="form-control" id="statut" name="statut" value="" required>
                            <div class="input-group">
                                
                                <div class="input-group-append">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="role">Rôle</label>
                        <input type="text" class="form-control" id="role", name="role", value="" required>
                        </div>
                        <div class="form-group">
                        <label for="habitat">Habitat (pour les employés)</label>
                        <input type="text" class="form-control" id="habitat", name="habitat", value="" required>
                        </div>
                        <div class="form-group">
                        <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="" required>
                    </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div> 


                <!--<div class="card-employe">
                    <div id="employees">
                    <div class="container mt-5 bg-arc-mint-green-light">
                            <h2>Ajouter un nouvel employé</h2>
                        </div>

                        <div>
                            <div action="/pages/controleurs/gestion_employe.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Nom de l'employé</label>
                                    <input type="text" class="form-control" id="name" name="name" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="login">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="login" name="login" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="mdp">Mot de passe</label>
                                    <input type="password" class="form-control" id="mdp" name="mdp" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" id="poste" name="poste" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="statut">Statut</label>
                                    <input type="text" class="form-control" id="statut" name="statut" value="" required>
                        </div>
                        
                                <div class="form-group">
                                    <label for="role">Rôle</label>
                                    <input type="text" class="form-control" id="role", name="role", value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="habitat">Habitat (pour les employés)</label>
                                    <input type="text" class="form-control" id="habitat", name="habitat", value="" required>
                                </div>
</div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>

                    </div>

                </div>-->
                        <br>
                        <br>
                        <div class="card-services">
                        <div id="employees">
                            <div class="card-header bg-arc-mint-green text-light">
                               <h2>modification des services</h2>
                            </div>

                            <div class="card-body">
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
                        <br><br>                     
                                
                    <div class="card-employe">                        
                        <div id="employees">
                            <div class="card-header bg-arc-mint-green text-light">
                                <h2>Modification d'un habitat</h2>
                            </div>
                            <div class="card-body">
                                <form action="/pages/controleurs/gestion_habitat.php" method="POST">
                                    <div class="form-group">
                                        <label for="nom">Ancien nom de l'habitat</label>
                                        <input type="text" class="form-control" id="name_old" name="nom" required>
                                        <label for="habitat_name">Nouveau nom de l'habitat</label>
                                        <input type="text" class="form-control" id="name_new" name="nom" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    
        <div class="container mt-5 bg-arc-mint-green-light">
            <h2>Ajouter un nouvel animal</h2>
            <form action="/pages/controleurs/gestion_animal.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                    
                        <div class="form-group">
                            <label for="nom">Nom de l'animal</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="habitat">Habitat</label>
                            <select class="form-control" id="habitat" name="habitat" required>
                                <option value="La Savane">La Savane</option>
                                <option value="Les Marais">Les Marais</option>
                                <option value="La Jungle">La Jungle</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="espece">Espèce</label>
                            <input type="text" class="form-control" id="espece" name="espece" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Âge</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="age" name="age" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">ans</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="commentaire">Commentaire santé</label>
                        <textarea class="form-control" id="commentaires" name="commentaires" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="poids">Poids</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="poids" name="poids" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="typeN">Type de Nourriture</label>
                            <input type="text" class="form-control" id="typeN" name="typeN" required>
                        </div>
                        <div class="form-group">
                            <label for="repas">Dernier repas</label>
                            <input type="datetime-local" class="form-control" id="repas" name="repas" required>
                        </div>
                        <div class="form-group">
                            <label for="quantite">Quantité de nourriture</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="quantite" name="quantite" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="remarques">Commentaire privé</label>
                        <textarea class="form-control" id="remarques" name="remarques" rows="3"></textarea>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>                        
    </div>         
        </div>
    </div>
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
  <!--<script src="/js/auth/signin.js"></script>-->
    <script src="/js/index.js"></script>
    
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>