<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="container mt-5">
            <h1> Entrez les données de la voiture: </h1>
            <form action=<?= route_to("ajoutVoiture") ?> method="POST">

                <input type="text" class="form-control données w-50" placeholder="Marque" name="marque" required><br>


                <input type="text" class="form-control données w-50" placeholder="Modèle" name="modele" required><br>

                <input type="number" step="50" class="form-control données w-50" placeholder="Prix en RS" name="prix"
                    required><br>

                <label>Face gauche: </label><input type="file" id="champvoit_img_lf" class="form-control données w-50"
                    name="img_lf" accept="image/*" required><br>

                <label>Arrière droite: </label><input type="file" id="champvoit_img_rb" class="form-control données w-50"
                    name="img_rb" accept="image/*" required><br>

                <label>Intérieur droite: </label><input type="file" id="champvoit_img_int_R" class="form-control données w-50"
                    name="img_int_r" accept="image/*" required><br>

                <label>Intérieur gauche: </label><input type="file" id="champvoit_img_int_l" class="form-control données w-50"
                    name="img_int_l" accept="image/*" required><br>

                <input type="text" class="form-control données w-50" placeholder="Specification moteur"
                    name="moteur" required><br>

                <input type="text" step="1" class="form-control données w-50"
                    placeholder="Specification boîte de vitesse" name="boite" required><br>

                <input type="number" class="form-control données w-50" placeholder="Puissance en CV"
                    name="puissance" required><br>

                <label>Année de sortie: </label>
                <select name="annee" id="annee">
                    <option value="" disabled selected>--select--</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                </select><br><br>

                <button type="submit" name="submit" class="btn btn-dark">OK</button>
                <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
                
            </form>
            
        </div>
    </div>
</body>
</html>

