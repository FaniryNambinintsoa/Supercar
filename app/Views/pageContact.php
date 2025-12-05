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
        <link href="<?= base_url('assets/css/pageContact.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.3/dist/tailwind.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <div class="descri">
            <span>Voulez-vous plus d'informations?,</span>
            <span>Obtenir de l'aide? Ou juste donner votre avis.</span>
        </div>
        <hr>
        <div class="titre1">
            <span>
                N'hesitez pas a nous contacter. <i class="fa-solid fa-face-smile-beam"></i> </span>
        </div>
        <form>
            <div class="cont-champ">
                <input type="text" placeholder="Votre Nom" name="nom" id="nom" class="champ"/>
                <input type="text" placeholder="Votre Prenom" name="prenom" id="prenom" class="champ"/>
                <input type="email" placeholder="Votre Email" name="email" id="email" class="champ"/>
                <input type="number" placeholder="Votre Numero Telephone" name="telephone" id="telephone" class="champ"/>
                <textarea placeholder="Dites-nous?"></textarea>
                <div>
                    <button type="submit">Soumettre</button>
                    <button type="reset">Annuler</button>
                </div>
            </div>
        </form>
        <div class="cont-loca">
            <div class="cont-label-map">
                <span>Où nous trouver ?</span>
            </div>
            <div class="cont-present">
                <span>SuperCar est une entreprise innovante située à Ébène, Maurice, spécialisée dans la vente et la location de voitures haut de gamme. Avec un service client exceptionnel et une flotte de véhicules de luxe, SuperCar s'engage à offrir une expérience unique à ses clients, alliant performance, élégance et confort.</span>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1573.9001167778467!2d57.460944072382404!3d-20.242802104542186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDE0JzM0LjgiUyA1N8KwMjcnNDAuOSJF!5e0!3m2!1sfr!2smu!4v1746176181912!5m2!1sfr!2smu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </body>
</html>

<?= $this->endSection() ?>