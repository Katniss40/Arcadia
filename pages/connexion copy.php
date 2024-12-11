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
    <title>Zoo-Arcadia - Connexion</title>
    
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
        <h4>Connexion réservée exclusivement au personnel du zoo</h4>
        <a href="/" class="btn btn-primary">Quitter</a>
      </div>
    </div>   

    <div class="container my-md-4 py-3">

      <section id="yourMessage" class="section-connexion">
        <div class="row bg-arc-mint-green py-3">
          <h2 class="text-light"><i class="bi bi-pencil-square text-light"></i> Connexion réservée Staff</h2>

          <form method="POST" action="/pages/controleurs/connexion_staff.php">
              <div class="mb-3">
                <label for="username" class="form-label text-light">Nom d'utilisateur</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Entrer le nom d'utilisateur" required>
                <div class="invalid-feedback">
                  Le nom d'utilisateur et/ou le mot de passe ne corresponde pas aux données transmises par votre direction
                </div>
                <div id="usernameHelp" class="form-text text-light">Entrez le nom d'utilisateur communiquer par votre direction.</div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label text-light">Mot de passe</label>
                <input class="form-control" type="password" id="mpassworddp" name="password" autocomplete="current-password" placeholder="Entrer le mot de passe" required>               
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Check1">
                <label class="form-check-label souvenir text-light" for="Check1">Se souvenir de moi</label>
              </div>
                <button type="submit" class="btn btn-light" id="submit" value='LOGIN'>Connexion</button>

          </form>
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