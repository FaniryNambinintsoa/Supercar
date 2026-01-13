<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/pageConnexion.css') ?>"> 
        
        

    </head>
    
    <body>
        <div class="cont-pp">
            <div class="cont-ch-esp">
                <div class="ch-esp-champ">
                    <div class="client-admin" id="toggle">
                        Espace client
                    </div>                                                                                                                         
                </div>
            </div>
            <img class="bg-image" src="<?= base_url('assets/images/bg_login.jpg')?>" alt=""> 
            <div class="conteneur-gbl"> 
                <div class="cont-en-tt"> 
                    <span>Connexion</span> 
                </div>                 
                <div> 
                    <form id="loginForm" action="<?= route_to('verifClient') ?>" method="post"> 
                        <div class="cont-champ">
                            <div>
                                <input type="email" placeholder="Email" class="form-control" id="email" name="email" required> 
                            </div>                             
                            <div> 
                                <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" required> 
                            </div>                             
                        </div>
                        <div class="cont-oubl"> 
                            <a href="#" class="link-primary" onclick="test()">Mot de passe oublié?</a> 
                        </div>                         
                        <div> 
                            <button type="submit" class="btn-connex" >Se connecter</button>                             
                        </div>                         
                        <div class="cont-insc"> 
                            <span>Vous n'avez pas de compte?  <a href="<?= url_to('Client\controllerClient::formInscription') ?>" >S'inscrire</a> </span> 
                        </div>                         
                    </form>                     
                </div>                 
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
     
<script src="<?= base_url('assets/js/pageConnexion.js') ?>"></script>
</html>