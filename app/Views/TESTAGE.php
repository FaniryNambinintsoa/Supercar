<!-- <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exemple position CSS</title>
<style>
  body {
    height: 2000px; /* pour pouvoir scroller */
    font-family: Arial, sans-serif;
  }

  /* Conteneur principal */
  .parent {
    position: relative;
    width: 400px;
    height: 200px;
    background-color: lightgray;
    margin: 100px auto;
    border: 2px solid #333;
  }

  /* Bloc 1 : relative */
  .relative {
    position: relative;
    top: 20px;
    left: 30px;
    background-color: lightblue;
    padding: 10px;
  }

  /* Bloc 2 : absolute */
  .absolute {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: lightcoral;
    padding: 10px;
  }

  /* Bloc 3 : fixed */
  .fixed {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: lightgreen;
    padding: 10px;
    border: 2px solid #000;
  }
</style>
</head>
<body>

  <h1 style="text-align:center;">Exemples des positions CSS</h1>

  <div class="parent">
    <div class="relative">Position: relative</div>
    <div class="absolute">Position: absolute</div>
  </div>
  <div style=" position: relative;
    background-color: lightblue;
    padding: 20px;
    margin: 30px;
        border: 2px solid blue;
    ">
    Exemple de boîte
  </div>
  <div class="fixed">Position: fixed (reste en bas à droite)</div>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/pageChoixVoiture.css') ?>">
</head>
<body>
 <div class="conteneur-pp">
    <h1>Page de test TESTAGE.php</h1>
 </div>
</body>
</html>