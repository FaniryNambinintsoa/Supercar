<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/pageConnexion.css') ?>">
</head>
<body>
  <div class="conteneur-pp">
<img class="bg-image" src="<?= base_url('assets/images/bg_login.jpg')?>" alt="">
        <div class="conteneur-gbl">
            <div style="position: absolute; top: 45px;  text-align: center;">
                    <h2>Connexion</h2>
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
                                <div class="mb-3">
                                    <a href="#" class="link-primary">Mot de passe oublié?</a>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                                <div class="mt-3 text-center">
                                  <h5>Vous n'avez pas de compte? 
                                    <a href="#">S'inscrire</a>
                                  </h5>
                                </div>
                            </form>
                        </div>
        </div>
  </div>
</body>
</html>