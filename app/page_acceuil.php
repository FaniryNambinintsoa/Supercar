<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="<?= base_url('assets/css/page_acceuil.css') ?>">
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?= route_to('Acceuil') ?>">Acceuil</a>
  <a href="javascript:void(0)" onclick="openNcloseVoitChoice()">Voiture</a>
  <div class="voitChoice">    
    <ul id="voitChoice">
      <li><a href="<?= route_to('formVoiture') ?>">Ajout Voitures</a></li>
      <li><a href="<?= base_url('Voiture/viewVoiture') ?>">Voir Voitures</a></li>
    </ul>
  </div>
  <a href="#">Services</a> 
  <a href="#">Contact</a>
</div> 

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script src="<?= base_url('assets/js/page_Acceuil.js') ?>"></script>

</body>
</html>