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
    <title>Zoo-Arcadia - Vétérinaire</title>
    
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
                <a class="navbar-brand" href="/pages/sante.php">Vétérinaire Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/sante.php">Tableau de bord</a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/edit_animal.php">Gérer les animaux</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

<div id="body">

<section id="veterinaire" class="section "> 

    <section class="mt-3 bg-arc-mint-green">
            
    
          <div class="row text-center text-light">
              <div class="col-md-12">
                  <div>

                      <div class="gazelle-titre">
                          <img src="/images/veto.jpg" class="gazelle1" alt="gazelle"><h1 class="gazelle-text text-light text-center pb-2">Espace veterinaire</h1><img src="/images/veto2.jpg" class="gazelle1" alt="gazelle">
                      </div>

                        <h3>Bienvenue dans votre espace. </h3>
                          <p class="accueil welcome-gazelle">
                          celui-ci vous est réservé. </br>
                          Nous avons le plaisir de vous inviter à participer à un projet passionnant au sein de notre zoo. Notre engagement : 
                          offrir les meilleurs soins possibles à nos animaux.</br>
                          Cet espace vous permet de surveiller en temps réel la santé de nos animaux, 
                          de gérer les dossiers médicaux numériques, et d'optimiser les traitements en fonction des données recueillies.</br>
                          Nous souhaitons former une équipe de vétérinaires dévoués pour travailler en collaboration, afin d'assurer une prise en charge optimale 
                          et de renforcer nos initiatives de conservation et de bien-être animal.</br>
                          </p>
                  </div>
              </div>    
          </div>
    
          <div class="row bg-arc-dark">
              <div class="col rect-lower-effect"></div>
          </div>
      
    </section>       


    <section id="yourMessage" class="section">
        <div class="row bg-arc-mint-green-light py-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditionHabitatModal"  style="margin-top: 10px;">Ajouter un commentaire sur un habitat</button>
      
  </button>
</div>
<div class="row bg-arc-mint-green-light py-3">
  <form class="contact-form" action="/pages/controleurs/rapport_animal.php" method="post" id="form-sante">
      <h2>Rapport</h2>
      <div class="form-group">
      <label for="id">ID</label>
      <input type="text" id="id" class="form-control" name="id" required></input>
    </div> 
    
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" id="nom" class="form-control" name="nom" required></input>
    </div> 
    <div class="form-group">
      <label for="commentaires">Santé</label>
      <textarea type="text" class="form-control" id="commentaires" name="commentaires" required></textarea>
    </div>
    <div class="form-group">
      <label for="typeN">Nourriture conseillée</label>
      <textarea type="text" id="typeN" class="form-control" name="typeN" required></textarea>
    </div>
    <div class="form-group">
      <label for="visite">dernière visite</label>
      <input type="date-local" class="form-control" id="visite" name="visite" required></input>
    </div>
    <div class="form-group">
      <label for="remarques">Remarques</label>
      <textarea type="text" class="form-control" id="remarques" name="remarques" rows="4" required></textarea>
    </div>
      
      <button type="submit"  class="btn btn-primary" >Envoyer</button>
  </form>
</div>

<div class="modal fade" id="EditionHabitatModal" tabindex="-1" aria-labelledby="EditionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Modifier un Habitat </h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="form-habitat-modified" action="/pages/controleurs/gestion_habitat.php" method="post" id="modif">
              <div class="mb-3">
                  <label for="habitat" class="form-label">Nom de l'habitat</label>
                  <input type="int" class="form-control" id="habitat"  name="habitat"> 
              </div>
              <div class="mb-3">
                  <label for="action" class="form-label">Commentaire sur L'habitat</label>
                  <input type="text" class="form-control" id="action"  name="action"> 
              </div>
              <div class="text-center">
                  <button type="button" class="btn btn-primary" id="btn_habitat_modified">Enregistrer</button>
              </div>
          </form>
      </div>
  </div>
  </div>
</div>

<div class="ali-grid">

</div>



<br>
<br>
</section> 

<div id="veterinaire_liste" >
    <div class=" bg-arc-mint-green text-light">
        <h3>bienvenue, Vétérinaire!</h3>
    </div>
<div class="row bg-arc-mint-green-light py-3">
    

    <h4>Liste des Animaux</h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Espèce</th>
            <th>Age</th>
            <th>Habitat</th>
            <th>Poids</th>
            <th>Nourriture</th>
            <th>Visite</th>
            <th>Repas</th>
            <th>Quantité</th>
            <th>Commentaires</th>
            <th>Remarques</th>
            <th>Commentaire privé</th>
        </tr>

        <?php
                include("db_connexion.php");
                $conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

                if ($conn->connect_error) {
                    die("Échec de la connexion : " . $conn->connect_error);
                }

                $sql = "SELECT * FROM animaux";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";                        
                        echo "<td>" . htmlspecialchars($row['espece']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['age']) . " ans</td>";
                        echo "<td>" . htmlspecialchars($row['habitat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['poids']) . " kg</td>";
                        echo "<td>" . htmlspecialchars($row['typeN']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['visite']) . "</td>";                         
                        echo "<td>" . htmlspecialchars($row['repas']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['quantite']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['commentaires']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['remarques']) . "</td>";
                        echo "<td><a href='/pages/edit_animal.php'" . $row['id'] . "' class='btn btn-primary btn-sm'>Modifier</a> ";
                        echo "<a href='/pages/controleurs/supp_anim.php'" . $row['id'] . "' class='btn btn-danger btn-sm'>Supprimer</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>Aucun animaux trouvés.</td></tr>";
                }
                $conn->close();
                ?>
      
        
    </table>

    
  

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