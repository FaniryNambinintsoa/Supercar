<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/TESTAGE.css') ?>">
    <title>Test Page</title>
</head>

 <!-- ################################################ -->   
    <!-- <button onclick="openModal()" class="btn btn-success">Test Modal</button>
                <div id="successModal" class="modal">
                    <div class="modal-content">
                    <h2>✔ Succès !</h2>
                    <p>cd</p>
                </div> -->

<!-- ################################################## -->

<!-- ################################################### -->
<!-- HTML (adaptable en CodeIgniter avec base_url) -->
 <style>
    body {
    height: 2000px; /* pour pouvoir scroller */
    font-family: Arial, sans-serif;
    }
    a:hover .imgdv {
      animation: updown 0.3s ease-in-out infinite;
    }
    @keyframes updown {
    0%   { transform: translateY(0); }
    50%  { transform: translateY(-10px); }
    100% { transform: translateY(0); }
    }
 </style>
 <body>
<div style="display:flex; position:relative; border: 2px solid #f3f3f3; margin-left: 60px; margin-right: 60px; margin-top: 55px;">

        <div id="car-360" data-folder="<?= base_url('assets/images/Mclaren/720S/') ?>" data-filename="car_{index}.webp" data-amount="32" style="max-width:1024px; max-height:1024px; position:relative; justify-content: center; touch-action:none; user-select:none; overflow:hidden;">
            <img id="car-image" src="<?= base_url('assets/images/Mclaren/720S/car_1.webp') ?>" alt="Car 360" style="width:100%; height:100%; object-fit:contain; display:block; -webkit-user-drag:none;">
            <div id="ci-loading" style="position:absolute;left:8px;top:8px;background:rgba(0,0,0,0.5);color:#fff;padding:4px 8px;border-radius:4px;font-size:12px;">
                Chargement...
            </div>
        </div>
        
        <div style="position: relative; display: flex; flex-direction: column; align-items: center; width: 100%;">
            <div>
                <img src="<?= base_url('assets/images/Mclaren/logo/car_logo.svg') ?>" style="width: 350px; height: auto; " alt="">
            </div>
                
            <div style="text-align: center; margin-top: 10px;">
                <p style="font-size: 50px; font-weight: bold;">720S</p><br>
                <p style="font-size: 30px;">Prix: 3 000 000 RS</p>
            </div>

            <div style="display: flex; position: relative;top: 30px; gap: 20px; ">
                <button>Demander un essai</button>
                <button>Commander</button>
            </div>

            <a href="#" style="text-decoration: none; color: black; ">
                <div style="position: relative; top: 110px;  text-align: center; justify-content: center; padding: 2px;">
                
                    <p>Information du model</p>
                    <div style="position: absolute; transform: translateY(-50%); left: 47%; top: 40px; ">
                        <img class="imgdv" src="<?= base_url('assets/images/fleche_bas.png') ?>" style="width: 10px; height: auto; " alt="">
                    </div>
                   
                </div>
            </a> 
        </div>    
</div>

<div style="position: relative; width:auto; margin-left: 60px; margin-right: 60px; padding-top: 27px; padding-bottom: 20px; ">
    <h1>SPECIFICATION MCLAREN 720S</h1>
</div>

<div style="display: flex; width:auto; border: 2px solid black; margin-left: 60px; margin-right: 60px; background-color: #f3f3f3;">

<div style="position: relative; display: flex; flex-direction: column; max-width: 600px; max-height: 600px;">
<div style="width: 450px; height: 200px; overflow: hidden;">
    <img src="<?= base_url('assets/images/Mclaren/720S/car_9.webp') ?>" alt="" style="width: 100%; height: 100%; object-fit: scale-down; transform: scale(1.5);">
</div>

<div style="position: relative; display: flex; width: 100%; height: auto;"> 
    <div style="width: 225px; height: 200px; overflow: hidden;">
        <img src="<?= base_url('assets/images/Mclaren/720S/car_1.webp') ?>" alt="" style="width: 100%; height: 100%; object-fit: scale-down; transform: scale(1.8);">
    </div>

    <div style="width: 225px; height: 200px; overflow: hidden;">
        <img src="<?= base_url('assets/images/Mclaren/720S/car_17.webp') ?>" alt="" style="width: 100%; height: 100%; object-fit: scale-down; transform: scale(1.8);">
    </div>
</div>
</div>
    <div style="position: relative; width: 100%; background-color: white; transform: scale(0.91); border-radius: 10px; object-fit: contain;">

        <table style="width: 100%; border: 1px solid black; text-align: center; transform: scale(0.9); border-collapse: collapse; border-radius: 5px; overflow: hidden;">
            <tr>
                <th style="border: 1px solid black; font-size: 30px;" colspan="2">Annee de sortie: 2017</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 15px;">Moteur:</td>
                <td style="border: 1px solid black; padding: 15px;">data</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 15px;">Puissance:</td>
                <td style="border: 1px solid black; padding: 15px;">data</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 15px;">0-100 km/h:</td>
                <td style="border: 1px solid black; padding: 15px;">data</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 15px;">0-200 km/h:</td>
                <td style="border: 1px solid black; padding: 15px;">data</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 15px;">Vitesse max:</td>
                <td style="border: 1px solid black; padding: 15px;">data</td>
            </tr>
        </table>

    </div>
</div>

<script>
</script>
<script src="<?= base_url('assets/js/TESTAGE.js') ?>"></script>
</body>
</html>


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
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/page_connexion.css') ?>">
</head>
<body style="height: 3000px;">
    <main>
        <div style="position: relative; height: 75vh; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: lightgray; width: 1000px; margin: 100px auto; border: 2px solid #333; border-radius: 8px;">
            <div style="position: absolute; top: 50px;  text-align: center;">
                                <h2>Connexion</h2>
                                <br>
                                <h4>Vous n'avez pas de compte? <a href="#">S'inscrire</a></h4>
                            </div>
                        <div>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                            </form>
                        </div>
               
            
        </div>
     
</body>
</html> -->