<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/affichageVoiture.css') ?>">
    
</head>
<body>
    <div class="voiture-container">
<?php foreach ($voitures as $voiture): ?>    
        <div class="voiture-cadre">
            <img src="data:image/png;base64,<?= base64_encode($voiture['voit_img_lf']) ?>" alt="<?= $voiture['voit_mdl'] ?>">
            <div class="voiture-titre">
                <?= $voiture['voit_marq'] . ' ' . $voiture['voit_mdl']; ?>
            </div>
            <div class="voiture-titre">
                À partir de <?= $voiture['voit_prix'] ?> RS
            </div>
            
        <?php endforeach; ?>
    </div>
</body>
</html>