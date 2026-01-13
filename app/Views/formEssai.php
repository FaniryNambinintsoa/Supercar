<div class="modal fade" id="demandeEssaiModal" tabindex="-1" aria-labelledby="demandeEssaiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="demandeEssaiModalLabel">Demande d'essai de véhicule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= route_to('soumettreEssai') ?>" method="post">
        <div class="modal-body">
            <input type="hidden" class="form-control" id="voit_id" name="voit_id"  value="<?= esc($voiture['voit_id']) ?>" readonly>
          <div class="mb-3">
            <label for="nom" class="form-label" >Nom</label>
            <input type="text" class="form-control" id="nom" name="nom"  value="<?= esc($nom) ?>" readonly>
          </div>

          <div class="mb-3">
            <label for="prenom" class="form-label" >Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?= esc($prenom) ?>" readonly>
          </div>

          <div class="mb-3">
            <label for="tel" class="form-label" >Téléphone</label>
            <input type="text" class="form-control" id="tel" name="tel"  required>
          </div>

          <div class="mb-3">
            <label for="mail" class="form-label" >Email</label>
            <input type="email" class="form-control" id="mail" name="mail" value="<?= esc($email) ?>" readonly>
          </div>

          <div class="mb-3">
            <label for="cin" class="form-label" >CIN</label>
            <input type="text" class="form-control" id="cin" name="cin"  required>
          </div>

          <div class="mb-3">
            <label for="num_permis" class="form-label" >Numero permis</label>
            <input type="text" class="form-control" id="num_permis" name="num_permis"  required>
          </div>

          <div class="mb-3">
            <label for="adresse" class="form-label" >Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse"  required>
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Date de l'essai</label>
            <input type="date" class="form-control" id="date_essai" name="date_essai" required>
          </div>

          <div class="mb-3">
            <label for="voiture" class="form-label">Voiture concernée</label>
            <input type="text" class="form-control" id="voiture" name="voiture" readonly value="<?= esc($voiture['voit_marq'] . ' ' . $voiture['voit_mdl']) ?>">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-success">Envoyer la demande</button>
        </div>
      </form>
      
    </div>
  </div>
</div>