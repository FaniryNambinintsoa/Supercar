<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenue - SuperCar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      
    } 

    h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    p {
      width: 80%;
      max-width: 700px;
      font-size: 0.9rem;
      line-height: 1.6rem;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 25px;
      background: #007bff;
      border-radius: 10px;
      color: white;
      text-decoration: none;
      font-size: 1.1rem;
      transition: 0.3s;
    }

    .btn:hover {
      background: #005fcc;
    }

    /* Flags container */
    .flags {
      position: absolute;
      bottom: 40px;
      display: flex;
      gap: 15px;
      opacity: 0;
      animation: fadeContainer 1s forwards 0.5s;
    }

    @keyframes fadeContainer {
      to { opacity: 1; }
    }

    /* Individual flag animation */
    .flag {
      width: 65px;
      height: 45px;
      opacity: 0;
      transform: translateY(20px);
      transition: 0.6s ease;
    }

    .bg-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    object-fit: cover;
    z-index: -1000;
}
.contenu{
    position: relative;
    display: flex;
    height: 95vh;
    justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      overflow: hidden;
    z-index: 1;
}

.presentation{
    display: flex;
    justify-content: center;
    flex-direction: column;
      align-items: center;
     background: #0d0d0d91;
      color: white;
      width: 900px;
      height: 300px;
      border-radius: 25px;

}
.img-logo{
  width: 100%;
  display: flex;
  justify-content: center;
  transform: translateY(20px);
}
.img-logo img{
    position: absolute;
    top: 20px;
    width: 250px;
    height: auto;
}
  </style>
</head>
<body>
   <div class="img-logo"><img src="<?= base_url('assets/images/logo_supercar.png')?>" alt=""></div>
    <div><video autoplay muted loop class="bg-video" src="<?= base_url('assets/video/bienvenue.mp4') ?>"></div>
 <div class="contenu">  
    <div class="presentation">
<h1>Le monde de l’automobile premium, livré chez vous</h1>
  <p>
    Depuis 2009, nous importons des voitures de prestige depuis les plus grandes routes du monde :
    Japon, Singapour, Afrique du Sud, États-Unis, Chine, Allemagne, France… et bien plus encore.
  </p>

  <a href="<?=url_to('controllerAcceuil::acceuil')?>" class="btn">Découvrir SuperCar</a>
</div>
  <div class="flags" id="flagsContainer">
    <img class="flag" src="https://flagcdn.com/w40/jp.png" alt="Japon">
    <img class="flag" src="https://flagcdn.com/w40/sg.png" alt="Singapour">
    <img class="flag" src="https://flagcdn.com/w40/za.png" alt="Afrique du Sud">
    <img class="flag" src="https://flagcdn.com/w40/us.png" alt="États-Unis">
    <img class="flag" src="https://flagcdn.com/w40/cn.png" alt="Chine">
    <img class="flag" src="https://flagcdn.com/w40/de.png" alt="Allemagne">
    <img class="flag" src="https://flagcdn.com/w40/fr.png" alt="France">
  </div>
  </div>


  <script>
    // Animation apparition drapeaux un par un
    window.onload = () => {
      const flags = document.querySelectorAll('.flag');

      flags.forEach((flag, index) => {
        setTimeout(() => {
          flag.style.opacity = "1";
          flag.style.transform = "translateY(0)";
        }, 400 * index);
      });
    };
  </script>

</body>
</html>
