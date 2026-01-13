<?= $this->extend('admin/miseEnPage') ?>
<?= $this->section('content') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h1 class="page-header-title">Ajouter une voiture</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Entrez les données de la voiture</h5>
                    </div>

                    <div class="card-body">
                        <form action="/ajoutUneVoiture" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label class="form-label">Marque</label>
                                <input type="text" name="voit_marq" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Modèle</label>
                                <input type="text" name="voit_mdl" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prix (€)</label>
                                <input type="number" name="voit_prix" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Motorisation</label>
                                <input type="text" name="voit_moteur" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Puissance (ch)</label>
                                <input type="number" name="voit_puiss" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">0 à 100 km/h (s)</label>
                                <input type="text" name="voit_0_100_kmh" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">0 à 200 km/h (s)</label>
                                <input type="text" name="voit_0_200_kmh" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Vitesse max (km/h)</label>
                                <input type="number" name="voit_vitesse_max" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Année de sortie</label>
                                <select name="voit_annee" class="form-select">
                                    <option disabled selected>--select--</option>
                                    <?php for ($i = 2025; $i >= 2009; $i--): ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Choisir un dossier d’images</label>
                                <input type="file" name="images[]" webkitdirectory directory multiple class="form-control">
                                <small class="text-muted">Télécharger un dossier complet d’images</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="reset" class="btn btn-secondary">Annuler</button>
                                <button type="submit" class="btn btn-dark">OK</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php 
$msg = session()->getFlashdata('message');
$err = session()->getFlashdata('error');
$type = session()->getFlashdata('message_type');
?>

<?php if($msg || $err): ?>
<div class="modal fade" id="notifModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-<?php echo $type; ?>">
      
      <div class="modal-header bg-<?php echo $type; ?> text-white">
        <h5 class="modal-title">
          <?php 
            if($type == 'success') echo "Succès";
            elseif($type == 'info') echo "Information";
            elseif($type == 'danger') echo "Erreur";
            else echo "Notification";
          ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p><?php echo $msg ?: $err; ?></p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<script>
    // Affiche automatiquement le modal au chargement de la page
    var notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
    notifModal.show();
</script>
<?php endif; ?>

<?= $this->endSection() ?>
