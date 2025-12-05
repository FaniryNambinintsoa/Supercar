<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Agbalumo&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
<body>
<div id="mySidenav" class="sidenav">

 
        <?php if (session()->get('status_connex')) {
            // Récupère les initiales de l'utilisateur
            $initiales = strtoupper(substr(session()->get('prenom'), 0, 1) . substr(session()->get('nom'), 0, 1));
                ?>
        
            <div class="cont-session">
                  <!-- Affiche les initiales de l'utilisateur -->
                <a href="#" style="text-decoration: none; color:#ddd;">
                  <div style="background-color: #0bbe38; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">
                      <?= $initiales; ?>
                  </div>
                </a>
                <div style="display: flex; flex-direction: column; padding: 15px;">
                    <!-- Affiche le prénom de l'utilisateur -->
                    <span class="nom">Bonjour, <?= htmlspecialchars(session()->get('nom')) . " " . htmlspecialchars(session()->get('prenom')); ?></span>
                    <!-- Lien pour se déconnecter -->
                        <a href="/deconnexion" style="font-size: 12px; color: red; text-decoration: none; margin-top: 2px;">Se déconnecter</a>
                </div>
            </div>
        <?php } else { ?>
            <!-- Affiche le bouton de connexion si l'utilisateur n'est pas connecté -->
            <div class="btn-connex">
                    <a href="<?= url_to('controllerConnexion::connexion')?>">
                        <div class="btn-connexion"><img src=<?= base_url("assets/images/profil.png") ?> alt="Connexion" style="width: 40px; height: 40px;"><span>Se connecter</span></div>
                    </a>
            </div>
          <?php } ?>
    

  <div class="nav-n-contact">
      <div>
          <div class="menu-item"><a class="lien-item" href="<?= url_to('controllerAcceuil::acceuil') ?>"><span><i class="fa-solid fa-house"></i></span><span style="margin-left: 10px;"> Acceuil</span></a></div>
          <div class="menu-item"><a class="lien-item" href="<?= url_to('controllerVoiture::affichageVoiture') ?>"><span><i class="fa-solid fa-car-on"></i></span><span style="margin-left: 10px;"> Voiture</span></a></div>
          <!-- <a href="javascript:void(0)" onclick="openNcloseVoitChoice()">Voiture</a>
            <div class="voitChoice">
              <ul id="voitChoice">
                <li><a href="<?= url_to('controllerVoiture::formVoiture') ?>">Ajout Voitures</a></li>
                <li><a href="<?= route_to('affichageVoiture') ?>">Voir Voitures</a></li>
              </ul>
            </div> -->
          <div class="menu-item"><a class="lien-item" href="<?= url_to('controllerService::service') ?>"><span><i class="fa-solid fa-hand-holding-medical"></i></span><span style="margin-left: 10px;"> Services</span></a></div>
      </div>
      <div>
          <div class="menu-item"><a class="lien-item" href="<?= url_to('controllerContact::contact') ?>"><span><i class="fa-solid fa-address-book"></i></span><span style="margin-left: 10px;">Contactez-nous</span></a></div>
      </div>
  </div>
</div>

<script src="<?= base_url('assets/js/pageAcceuil.js') ?>"></script>
</body>
</html>