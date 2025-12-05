<?= $this->extend('miseEnPage')?>
<?= $this->section('content')?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= base_url('assets/css/pageService.css') ?>" rel="stylesheet">
        <title>New page</title>
        
    </head>
    <body>
        <div class="grid-flex">
            <div class="cont-etp">
                <div class="cont-list-etp">
                    <span>1-DEMANDER UNE DEVISE</span>
                </div>
                <div class="cont-list-etp">
                    <span>2-FAITES REPARER VOTRE VOITURE</span>
                </div>
                <div class="cont-list-etp">
                    <span>3-VEHICULE PRET</span>
                </div>
            </div>
            <div class="cont-serv">
                <div class="cont-desc-serv">
                    <div class="cont-img-1-1">
                        <img src="<?= base_url('assets/uploads/services/Atelier-maintenance/ate-1-1.jpg') ?>" class="img-1-1"/>
                    </div>
                    <div class="cont-desc">
                        <div class="desc-sec-1">
                            <span class="desc-titre">Redonnez toute sa puissance à votre voiture</span>
                            <span>Notre service Réparation & Performance combine expertise mécanique et optimisation moderne pour remettre votre véhicule au meilleur de sa forme.
Du diagnostic précis aux réglages avancés, nous veillons à améliorer la fiabilité, la réactivité et les performances globales de votre voiture</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="">Demander un devis -></a>
                            <div class="cont-img-3-2">
                                <img src="<?= base_url('assets/uploads/services/Atelier-maintenance/ate-3-2.jpg') ?>" class="img-3-2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="separateur-hr">
            <div class="cont-serv">
                <div class="cont-desc-serv">
                    <div class="cont-img-1-1">
                        <img src="<?= base_url('assets/uploads/services/detailling-esthetique/det-1-1.jpg') ?>" class="img-1-1"/>
                    </div>
                    <div class="cont-desc">
                        <div class="desc-sec-1">
                            <span class="desc-titre">Redonnez toute sa puissance à votre voiture</span>
                            <span>Notre service Réparation & Performance combine expertise mécanique et optimisation moderne pour remettre votre véhicule au meilleur de sa forme.
Du diagnostic précis aux réglages avancés, nous veillons à améliorer la fiabilité, la réactivité et les performances globales de votre voiture</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="">Link</a>
                            <div class="cont-img-3-2">
                                <img src="<?= base_url('assets/uploads/services/detailling-esthetique/det-3-2.jpg') ?>" class="img-3-2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="separateur-hr">
            <div class="cont-serv">
                <div class="cont-desc-serv">
                    <div class="cont-img-1-1">
                        <img src="<?= base_url('assets/uploads/services/Reparation-performance/rep-1-1.jpg') ?>" class="img-1-1"/>
                    </div>
                    <div class="cont-desc">
                        <div class="desc-sec-1">
                            <span class="desc-titre">Redonnez toute sa puissance à votre voiture</span>
                            <span>Notre service Réparation & Performance combine expertise mécanique et optimisation moderne pour remettre votre véhicule au meilleur de sa forme.
Du diagnostic précis aux réglages avancés, nous veillons à améliorer la fiabilité, la réactivité et les performances globales de votre voiture</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="">Link</a>
                            <div class="cont-img-3-2">
                                <img src="<?= base_url('assets/uploads/services/Reparation-performance/rep-3-2.jpg') ?>" class="img-3-2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<?= $this->endSection()?>