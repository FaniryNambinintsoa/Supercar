<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
                        </div>
                        <div class="cont-boutton"> 
                            <button type="submit" class="btn-connex">Creer mon compte</button>  
                                                     
                        </div>                         
                        <div class="cont-insc"> 
                            <span>Vous avez deja un compte?  <a href="#">Se connecter</a> </span> 
                        </div>                         
                    </form>                     
                </div>                 
            </div>             
        </div>
    </body>     
</html>