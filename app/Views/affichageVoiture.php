<?= $this->extend('miseEnPage') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.3/dist/tailwind.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/affichageVoiture.css') ?>">
    
</head>
<body>
    <div class="flex flex-col gap-8 max-w-full px-48 py-16 transform translate-x-0">
            <div class="bg-transparent font-semibold text-3xl text-center w-full">Bienvenu sur notre site web salle d&apos;exposition automobile.</div>
            <div class="bg-transparent font-medium leading-none text-6xl text-center tracking-normal">Visitez, demandez des essais avant de comander votre voiture de reve.</div>
            <div>
                <div class="bg-transparent font-bold text-2xl text-left">Faite votre choix</div>
                <div class="bg-transparent text-2xl text-left">Nos marques disponibles</div>
                <hr/>
            </div>
            <div class="cont-logo-marq">
            <div class="cont-logo-ovrfl">
                <a href="<?= url_to('controllerVoiture::vitrineVoiture') ?>"><img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>" class="p-2"/></a>
            </div>
            <div class="cont-logo-ovrfl">
                <a href=""><img src="<?= base_url('assets/uploads/Mclaren/logo/car_logo.svg') ?>" class="p-2"/></a>
            </div>
        </div>
    </div>
</body>
</html>

<?= $this->endSection() ?>