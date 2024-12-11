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
    <title>Zoo-Arcadia - Gestion des habitats</title>
    
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
      <div><a href="/" class="btn btn-primary">Espace Administrateur/habitats</a></div>
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
            <h2>Bienvenue sur votre tableau de bord de gestion des habitats</h2>
            <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à l'administration du Zoo.</p>


            <div class="card-habitat">
            

<br>
<div class="row bg-arc-mint-green-light-staff py-3">

<div class="card-list-employe mt-3">
                    <div class="card-header">
                        Liste des habitats
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom de l'habitat</th>
                                <th>Ancien nom</th>
                                <th>Nouveau nom</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <?php
                include("db_connexion.php");
                $conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

                if ($conn->connect_error) {
                    die("Échec de la connexion : " . $conn->connect_error);
                }

                $sql = "SELECT * FROM habitats";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name_old']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name_new']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['action']) . "</td>";                        
                                                                                     
                        echo "<td><a href='/pages/controleurs/admin.php'" . $row['id'] . "' class='btn btn-primary btn-sm'>Modifier</a> ";
                        echo "<a href='/pages/controleurs/supp_hab.php'" . $row['id'] . "' class='btn btn-danger btn-sm'>Supprimer</a></td>";
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
  <script src="/js/auth/signin.js"></script>
    <script src="/js/index.js"></script>
    
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>