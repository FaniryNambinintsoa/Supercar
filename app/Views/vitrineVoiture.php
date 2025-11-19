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
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="/services">Services</a>
                </li>
                <li aria-current="page">Consulting</li>
            </ol>
        </div>
        <hr>
        <div class="cont-pp">
            <div class="cont-logo">
                <img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>">
            </div>
            <div class="cont-text">
                <div class="mrq-txt">
                    <h1>Mclaren</h1>
                </div>
                <div class="nbr-mdl">
                    <div class="cont-tout">
                        <div class="cont-nbr">1</div>
                        <div class="cont-desc">Model de presentation</div>
                    </div>
                    <div class="cont-tout">
                        <div class="cont-nbr">1</div>
                        <div class="cont-desc">Total des voitures 
</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="cont-voiture-gbl">

            <a href="<?= url_to('controllerVoiture::detailVoiture') ?>">
                <div class="cont-style">
                    <div class="cont-voiture">
                        <img src="<?= base_url('assets/uploads/Mclaren/720S/car_3.webp') ?>" class="img-voit">
                    </div>
                    <div>
                        <h1 class="mrq-mdl">Mclaren 720S</h1>
                        <button class="boutton-act">Specification</button>
                    </div>
                </div>
            </a>

            <div class="cont-style">
                <div class="cont-voiture">
                    <img src="<?= base_url('assets/uploads/Mclaren/720S/car_3.webp') ?>" class="img-voit">
                </div>
                <div>
                    <h1 class="mrq-mdl">Mclaren 720S</h1>
                    <button class="boutton-act">Specification</button>
                </div>
            </div>
            <div class="cont-style">
                <div class="cont-voiture">
                    <img src="<?= base_url('assets/uploads/Mclaren/720S/car_3.webp') ?>" class="img-voit">
                </div>
                <div>
                    <h1 class="mrq-mdl">Mclaren 720S</h1>
                    <button class="boutton-act">Specification</button>
                </div>
            </div>
            <div class="cont-style">
                <div class="cont-voiture">
                    <img src="<?= base_url('assets/uploads/Mclaren/720S/car_3.webp') ?>" class="img-voit">
                </div>
                <div>
                    <h1 class="mrq-mdl">Mclaren 720S</h1>
                    <button class="boutton-act">Specification</button>
                </div>
            </div>
            <div class="cont-style">
                <div class="cont-voiture">
                    <img src="<?= base_url('assets/uploads/Mclaren/720S/car_3.webp') ?>" class="img-voit">
                </div>
                <div>
                    <h1 class="mrq-mdl">Mclaren 720S</h1>
                    <button class="boutton-act">Specification</button>
                </div>
            </div>
        </div>
    </body>
</html>
<?= $this->endSection() ?>
