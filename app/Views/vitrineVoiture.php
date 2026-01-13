<?= $this->extend('miseEnPage') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>New page</title>
        <link href="<?= base_url('assets/css/vitrineVoiture.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.3/dist/tailwind.min.css">
    </head>
    <body>
        <div class="label-mrq">
            <ol class="breadcrumb-triangle">
                <li><a href="/Acceuil">Accueil</a></li>
                <li><a href="/Voiture/ListeVoiture">Voitures</a></li>
                <li aria-current="page"><?= esc($marque) ?></li>
            </ol>
        </div>
        <hr>
        <div class="cont-pp">
            <div class="cont-logo">
                <?php foreach($voitures as $voiture): ?>
                <img src="<?= base_url($voiture['voit_chemin_dossier'] . '/car_logo.svg') ?>">
                <?php endforeach; ?>
            </div>
            <div class="cont-text">
                <div class="mrq-txt">
                    <h1><?= esc($marque) ?></h1>
                </div>
                <div class="nbr-mdl">
                    <div class="cont-tout">
                        <div class="cont-nbr"><?= esc($nbrVoiture) ?></div>
                        <div class="cont-desc">Model de presentation</div>
                    </div>
                    <!-- <div class="cont-tout">
                        <div class="cont-nbr">1</div>
                        <div class="cont-desc">Total des voitures 
</div>
                    </div> -->
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="cont-voiture-gbl">
         <?php foreach($voitures as $voiture): ?>
            <a href="<?= url_to('Client\controllerVoiture::detailVoiture', $voiture['voit_id']) ?>">
                <div class="cont-style">
                    
                    <div class="cont-voiture">
                        <img src="<?= base_url($voiture['voit_chemin_dossier'] . '/car_3.webp') ?>" class="img-voit">
                    </div>
                    <div>
                        <h1 class="mrq-mdl"><?= esc($marque . ' ' . $voiture['voit_mdl']) ?></h1>
                        <button class="boutton-act">Specification</button>
                    </div>
                    
                    <?php endforeach; ?>
                </div>
            </a>
        </div>
    </body>
</html>
<?= $this->endSection() ?>
