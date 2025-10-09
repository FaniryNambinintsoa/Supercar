<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
  </head>
<body>
<header class="header">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?= route_to('Acceuil') ?>">Acceuil</a>
  <a href="javascript:void(0)" onclick="openNcloseVoitChoice()">Voiture</a>
  <div class="voitChoice">    
    <ul id="voitChoice">
      <li><a href="<?= route_to('formVoiture') ?>">Ajout Voitures</a></li>
      <li><a href="<?= route_to('affichageVoiture') ?>">Voir Voitures</a></li>
    </ul>
  </div>
  <a href="#">Services</a> 
  <a href="#">Contact</a>
  <?php
    // Vérifie si les données de l'utilisateur sont présentes dans la session
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        // Récupère les initiales de l'utilisateur
        $initiales = strtoupper(substr($_SESSION['prenom'], 0, 1) . substr($_SESSION['nom'], 0, 1));
    ?>
        <a href="#" style="text-decoration: none; color:#ddd;">
          <div style="display: flex; align-items: center;">
              <!-- Affiche les initiales de l'utilisateur -->
              <div style="background-color: #0bbe38; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">
                  <?php echo $initiales; ?>
              </div>
        </a>
            <div style="display: flex; flex-direction: column;">
                <!-- Affiche le prénom de l'utilisateur -->
                <span class="nom">Bonjour, <?php echo htmlspecialchars($_SESSION['nom']) . " " . htmlspecialchars($_SESSION['prenom']);?></span>
                <!-- Lien pour se déconnecter -->
                <a href="/supercar_project/Pages/connexion/deconnection.php" style="font-size: 12px; color: red; text-decoration: none; margin-top: 2px;">Se déconnecter</a>
            </div>
          </div>
  <?php } else { ?>
        <!-- Affiche le bouton de connexion si l'utilisateur n'est pas connecté -->
        <a href="/supercar_project/Pages/connexion/page_connexion.php">
            <img src=<?= base_url("assets/images/profil.png") ?> class="img1 mx-5" alt="Connexion" style="width: 40px; height: 40px;">
        </a>
  <?php } ?>
</div> 
<div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
  <div>
    <span style="font-size:45px;cursor:pointer;margin-left: 10px;" onclick="openNav()">&#9776; Naviguer</span>
  </div>

  <div style="position: absolute; left: 50%; transform: translateX(-50%); padding: 10px;">
    
    <img src="<?= base_url("assets/images/conteneur_lien.png") ?>" alt="conteneur" style="justify-content: center; width: 700px; height: auto; ">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;  font-size: 24px; font-weight: bold; text-align: center;">
    <?php echo $titre; ?>
    </div>
  </div>

  <div>
    <img src="<?= base_url("assets/images/logo_supercar.png") ?>" alt="supercar" style="width: 150px; height: auto;">
  </div>
</div>
</header>
<script src="<?= base_url('assets/js/page_Acceuil.js') ?>"></script>
</body>
</html>