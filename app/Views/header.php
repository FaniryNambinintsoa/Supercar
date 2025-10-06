<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
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
</div> 
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</header>

<script src="<?= base_url('assets/js/page_Acceuil.js') ?>"></script>
</body>
</html>