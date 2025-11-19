<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
                    <form id="loginForm" action="/Acceuil"> 
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
                            <span>Vous n'avez pas de compte?  <a href="<?= url_to('controllerClient::formInscription') ?>" >S'inscrire</a> </span> 
                        </div>                         
                    </form>                     
                </div>                 
            </div>             
        </div>
    </body>   
     
<script src="<?= base_url('assets/js/pageConnexion.js') ?>"></script>
</html>