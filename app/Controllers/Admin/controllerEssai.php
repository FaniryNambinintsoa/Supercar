<?php
namespace App\Controllers\Admin;
use App\Models\modelEssai;    

class controllerEssai extends BaseController {
    public function listeDmd() {

        $modelEssai = new modelEssai();


        $donnees = [
            'titre' => 'Liste des demandes d\'essai',
            'demandes' => $modelEssai->select('dmd_essai.*, users.us_nom, users.us_prenom, users.us_mail, users.us_tel, voitures.voit_marq, voitures.voit_mdl')->join('users', 'users.us_id = dmd_essai.us_id')->join('voitures', 'voitures.voit_id = dmd_essai.voit_id')->findAll()
        ];
        
        return view('admin/listeDemandeEssai', $donnees);
    }
}
?>