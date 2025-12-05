<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/pageInscription.css') ?>"> 
    </head>
    <body>
        <div class="cont-pp">
            
            <img class="bg-image" src="<?= base_url('assets/images/bg_login.jpg')?>" alt=""> 
            <div class="conteneur-gbl"> 
                <div class="cont-en-tt"> 
                    <span>Inscription</span> 
                </div>                 
                <div> 
                    <form action="<?=route_to('inscription')?>" method="post"> 
                        <div class="cont-champ">
                            <div>
                                <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" required> 
                            </div>                             
                            <div>
                                <input type="text" placeholder="Prenom" class="form-control" id="prenom" name="prenom" required> 
                            </div>                             
                            <div>
                                <input type="email" placeholder="Adresse email" class="form-control" id="email" name="email" required> 
                            </div>                             
                            <div> 
                                <input type="password" placeholder="Creer un mot de passe" class="form-control" id="password" name="password" required> 
                            </div>
                            <div> 
                                <input type="password" placeholder="Confirmer le mot de passe" class="form-control" id="confirmationpassword" name="confpassword" required> 
                            </div>
                            <div> 
                                <input type="hidden" id="role" name="role" value="client"> 
                            </div>
                        </div>
                        <div class="cont-boutton"> 
                            <button type="submit" class="btn-connex">Creer mon compte</button>     
                        </div>                         
                        <div class="cont-insc"> 
                            <span>Vous avez deja un compte?  <a href="<?= url_to('controllerConnexion::connexion')?>">Se connecter</a> </span> 
                        </div>                         
                    </form>                     
                </div>                 
            </div>    
            
            <div class="modal fade" id="messageModal" tabindex="-1">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header 
              <?php if(isset($type) && $type === 'success') echo 'bg-success text-white'; else echo 'bg-danger text-white'; ?>">
              <h5 class="modal-title">Information</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div style="color: black;" class="modal-body">
              <?= isset($message) ? esc($message) : '' ?>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
      </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php if (isset($message)) : ?>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('messageModal'));
    myModal.show();
</script>
<?php endif; ?>
        </div>
    </body>     
</html>