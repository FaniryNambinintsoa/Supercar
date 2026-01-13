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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>New page</title>
        
    </head>
    <body>
        <div class="label-mrq">
            <ol class="breadcrumb-triangle">
                <li><a href="/Acceuil">Accueil</a></li>
                <li aria-current="page">Services</li>
            </ol>
        </div>
        <div class="grid-flex">
            <div class="cont-etp">
                <div class="cont-list-etp">
                    <span>1-DEMANDER UN DEVIS</span>
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
                            <span>Notre service <strong>Réparation & Performance</strong> associe expertise mécanique
                        et technologies modernes pour restaurer et optimiser votre véhicule.
                        Du diagnostic précis aux réglages avancés, chaque intervention vise
                        fiabilité, performance et plaisir de conduite.</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="" class="link-devis" data-bs-toggle="modal"
   data-bs-target="#devisModal"
   data-service="reparation">Demander un devis →</a>
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
                            <span class="desc-titre">Votre supercar, plus éclatante que jamais.</span>
                            <span>Le <strong>détailling esthétique</strong> est bien plus qu’un simple nettoyage.
                        Polissage, protection de carrosserie et finitions haut de gamme
                        pour redonner à votre véhicule son éclat d’origine, voire plus.</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="" class="link-devis" data-bs-toggle="modal"
   data-bs-target="#devisModal"
   data-service="detailing">Demander un devis →</a>
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
                            <span class="desc-titre">Votre SuperCar mérite l’excellence</span>
                            <span> De l’<strong>entretien avancé à l’optimisation des performances</strong>,
                        nos spécialistes prennent soin de chaque détail.
                        Vous profitez d’un service fiable, précis et adapté aux véhicules haut de gamme.</span>
                        </div>
                        <div class="desc-sec-2">
                            <a href="#" class="link-devis" data-bs-toggle="modal"
   data-bs-target="#devisModal"
   data-service="excellence">Demander un devis →</a>
                            <div class="cont-img-3-2">
                                <img src="<?= base_url('assets/uploads/services/Reparation-performance/rep-3-2.jpg') ?>" class="img-3-2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="modal fade" id="devisModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Demande de devis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- ETAPE 1 -->
        <div id="step-1">
          <h6>Informations du véhicule</h6>

          <div class="mb-3">
            <label class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" placeholder="Ex : Audi">
          </div>

          <div class="mb-3">
            <label class="form-label">Modèle</label>
            <input type="text" class="form-control" id="modele" placeholder="Ex : RS7">
          </div>

          <button class="btn btn-dark w-100" id="btnSuivant">
            Suivant →
          </button>
        </div>

        <!-- ETAPE 2 -->
        <div id="step-2" style="display:none;">
          <h6>Devis estimatif</h6>

          <span id="result-devis" class="mt-3"></span>

          <button class="btn btn-outline-secondary mt-3 w-100" id="btnRetour">
            ← Modifier le véhicule
          </button>
          <br><br>
          <form action="">
            <input type="hidden" id="marque-hidden" name="marque">
            <input type="hidden" id="modele-hidden" name="modele">
            <input type="hidden" id="devis-id-hidden" name="id_devis">
            <input type="hidden" id="user-id-hidden" name="id_user">
            <button class="btn btn-dark w-100" id="btnSuivant" type="submit">
            Prcoceder →
            </button>
          </form>
          
        </div>

      </div>
    </div>
  </div>
</div>


<script>
let selectedService = '';

document.querySelectorAll('.link-devis').forEach(btn => {
  btn.addEventListener('click', function () {
    selectedService = this.dataset.service;
    document.getElementById('step-1').style.display = 'block';
    document.getElementById('step-2').style.display = 'none';
  });
});

document.getElementById('btnSuivant').addEventListener('click', () => {
  const marque = document.getElementById('marque').value;
  const modele = document.getElementById('modele').value;

  if (!marque || !modele) {
    alert('Veuillez renseigner la marque et le modèle');
    return;
  }

  let devisHTML = '';

  if (selectedService === 'reparation') {
    devisHTML = `
      <p><strong>Réparation & Performance</strong></p>
      
       
            <div style="display:flex; justify-content:center; border:1px solid black; margin:10px;">
                <table >
                    <tr>
                        <td>Diagnostic & réglages moteur : 7 500 – 10 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Révision performance : 12 000 – 18 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Pack optimisation : 15 000 – 25 000 MUR</td>
                    </tr>
                </table>
            </div>
    `;


  }

  if (selectedService === 'detailing') {
    devisHTML = `
      <p><strong>Détailling esthétique</strong></p>
      
       <div style="display:flex; justify-content:center; border:1px solid black; margin:10px;">
                <table >
                    <tr>
                        <td>Detailing extérieur : 8 000 – 12 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Detailing complet : 18 000 – 25 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Protection céramique : 30 000 – 45 000 MUR</td>
                    </tr>
                </table>
            </div>
    `;
  }

  if (selectedService === 'excellence') {
    devisHTML = `
      <p><strong>Pack Excellence SuperCar</strong></p>
        <div style="display:flex; justify-content:center; border:1px solid black; margin:10px;">
                <table >
                    <tr>
                        <td>Entretien avancé : 10 000 – 15 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Optimisation moteur : 20 000 – 30 000 MUR</td>
                    </tr>
                    <tr>
                        <td>Pack complet : 35 000 – 50 000 MUR</td>
                    </tr>
                </table>
            </div>
    `;
  }

  document.getElementById('result-devis').innerHTML = `
    <p>Véhicule : <strong>${marque} ${modele}</strong></p>
    ${devisHTML}
  `;
  document.getElementById('marque-hidden').value = marque;
  document.getElementById('modele-hidden').value = modele;  
  document.getElementById('devis-id-hidden').value = selectedService;
  /* document.getElementById('user-id-hidden').value = ; */

  document.getElementById('step-1').style.display = 'none';
  document.getElementById('step-2').style.display = 'block';
});

document.getElementById('btnRetour').addEventListener('click', () => {
  document.getElementById('step-1').style.display = 'block';
  document.getElementById('step-2').style.display = 'none';
});
</script>


    </body>
</html>


<?= $this->endSection()?>