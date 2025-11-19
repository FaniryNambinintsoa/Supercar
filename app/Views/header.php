<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Agbalumo&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
  </head>
<body>
<header class="video-header">
            <video autoplay muted loop class="background-video" src="<?= base_url('assets/video/header-video.mp4') ?>">
                <source src="video.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
            </video>
            <div class="header" style="display: grid; grid-template-columns: 1fr 1fr 1fr;">

  <div style="display: flex; color: white;">
                <span style="font-size:45px;cursor:pointer;margin-left: 10px;" onclick="toggleNav()">&#9776;</span>
                <span style="font-size:45px;cursor:pointer;margin-left: 10px; display: none;" onclick="toggleNav()" id="navspan">Naviguer</span>
  </div>

  <div>
    <img src="<?= base_url("assets/images/conteneur_lien.png") ?>" alt="conteneur" style="justify-content: center; width: 620px; height: 95px; ">
                <div style="position: relative; top:-50px; left: 50%; transform: translate(-50%, -50%); color: rgba(0, 0, 0, 1); font-size: 24px; font-style: italic; text-align: center; font-family: 'Agbalumo', sans-serif;">
                    <?= esc($titre); ?>
                </div>
            </div>
            <div style="display: grid; justify-content: flex-end;">
    <img src="<?= base_url("assets/images/logo_supercar.png") ?>" alt="supercar" style="width: 205px; height: auto; padding: 14px 0px 14px 14px;">
  </div>
</div>
            
        </header>
   
</body>
</html>