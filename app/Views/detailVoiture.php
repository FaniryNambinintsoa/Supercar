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
        <link rel="stylesheet" href="<?= base_url('assets/css/detailVoiture.css') ?>">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.3/dist/tailwind.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded&display=swap">
        <script>/* Pinegrow Interactions, do not remove */ (function(){try{if(!document.documentElement.hasAttribute('data-pg-ia-disabled')) { window.pgia_small_mq=typeof pgia_small_mq=='string'?pgia_small_mq:'(max-width:767px)';window.pgia_large_mq=typeof pgia_large_mq=='string'?pgia_large_mq:'(min-width:768px)';var style = document.createElement('style');var pgcss='html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}';if(document.documentElement.hasAttribute('data-pg-id') && document.documentElement.hasAttribute('data-pg-mobile')) {pgia_small_mq='(min-width:0)';pgia_large_mq='(min-width:99999px)'} pgcss+='@media ' + pgia_small_mq + '{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}';pgcss+='@media ' + pgia_large_mq + '{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}';style.innerHTML=pgcss;document.querySelector('head').appendChild(style);}}catch(e){console&&console.log(e);}})()</script>
    </head>
    <body>
        <div class="label-mrq">
            <ol class="breadcrumb-triangle">
                <li><a href="/">Accueil</a></li>
                <li><a href="/services">Services</a></li>
                <li aria-current="page">Consulting</li>
            </ol>
        </div>
        <div class="conteneur-pp-1">
            <div id="car-360" data-folder="<?= base_url('assets/uploads/Mclaren/720S/') ?>" data-filename="car_{index}.webp" data-amount="32" class="conteneur-img-360 conteneur-voiture image-360 relative ">
                <img id="car-image" src="<?= base_url('assets/uploads/Mclaren/720S/car_1.webp') ?>" class="img-voiture" alt="Car 360">
            </div>
            <div class="conteneur-action-voiture">
                <div class="cont-logo">
                    <img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>" class="img-logo w-10/12" alt="">
                </div>
                <div class="cont-p-mdl">
                    <p class="p-mdl">720S <br> Prix: 3 000 000 RS</p>
                </div>
                <div class="cont-boutton">
                    <button class="boutton-act">Demander un essai</button>
                    <button class="boutton-act">Commander</button>
                </div>
                <div class="conteneur-act">
                    <a href="#"> <div class="cont-fleche-bas">
                            <p>Information du model</p>
                            <img class="h-4 w-3 fleche-bas" src="<?= base_url('assets/images/fleche_bas.png') ?>" alt="">
                        </div> </a>
                </div>                 
            </div>             
        </div>
        <div class="label-mrq label-specif specif-label">
            <h1>SPECIFICATION MCLAREN 720S</h1>
        </div>
        <div class="conteneur-gbl-2">
            <div class="conteneur-img-dfa ">
                <div class="conteneur-img-d">
                    <img class="img-d" src="<?= base_url('assets/uploads/Mclaren/720S/car_9.webp') ?>" alt="">
                </div>
                <div class="conteneur-img-fa"> 
                    <div class="conteneur-img-f">
                        <img class="img-f" src="<?= base_url('assets/uploads/Mclaren/720S/car_1.webp') ?>" alt="">
                    </div>
                    <div class="conteneur-img-a">
                        <img class="img-a" src="<?= base_url('assets/uploads/Mclaren/720S/car_17.webp') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center justify-center tableau w-full">
                <table class="bg-white border border-black border-solid h-full tableau-specification text-center w-full">
                    <tr class="border border-black border-solid">
                        <th colspan="2">Annee de sortie: 2017</th>
                    </tr>
                    <tr class="border border-black border-solid divide-black divide-x">
                        <td class="">Moteur:</td>
                        <td>datahe</td>
                    </tr>
                    <tr class="border border-black border-solid divide-black divide-x">
                        <td class="">Puissance:</td>
                        <td>datagerge</td>
                    </tr>
                    <tr class="border border-black border-solid divide-black divide-x">
                        <td class="">0-100 km/h:</td>
                        <td>data</td>
                    </tr>
                    <tr class="border border-black border-solid divide-black divide-x">
                        <td class="">0-200 km/h:</td>
                        <td>data</td>
                    </tr>
                    <tr class="border border-black border-solid divide-black divide-x">
                        <td class="">Vitesse max:</td>
                        <td>data</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="label-mrq label-specif specif-label">
            <h1>AUTRES MARQUES</h1>
        </div>
        <div class="cont-logo-marq">
            <div class="cont-logo-ovrfl">
                <a href=""><img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px;grid-gap:0px;" class="p-2"/></a>
            </div>
            <div class="cont-logo-ovrfl">
                <a href=""><img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px;grid-gap:0px;" class="p-2"/></a>
            </div>
        </div>
        <script src="<?=base_url('assets/js/detailVoiture.js')?>"></script>
    </body>
</html>

<?= $this->endSection() ?>


