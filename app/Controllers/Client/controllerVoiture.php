<?php

namespace App\Controllers\Client;

use App\Models\modelVoiture;

class controllerVoiture extends BaseController
{

    public function affichageVoiture(): string
    {
        $model = new modelVoiture();
        $donnees = [
            'titre' => 'Voiture',
            'voitures' => $model->findAll()
        ];
        return view('affichageVoiture', $donnees);
    }
        

    public function create()
    {
        return view('voiture_create');
    }

public function ajoutVoiture()
{
    $model = new modelVoiture();
    $files = $this->request->getFiles();

    //--------------------------------------------
    //  VALIDATION des champs obligatoires
    //--------------------------------------------
    $marque = trim($this->request->getPost('voit_marq'));
    $modele = trim($this->request->getPost('voit_mdl'));

    if (!$marque || !$modele) {
        session()->setFlashdata('error', 'La marque et le modèle sont obligatoires.');
        session()->setFlashdata('message_type', 'danger');
        return redirect()->back()->withInput();
    }

    //--------------------------------------------
    //  GÉNÉRATION DU DOSSIER : public/assets/uploads/voitures/marques/Marque/Modèle/
    //--------------------------------------------
    $basePath = FCPATH . 'assets/uploads/voitures/marques/';

    // On normalise les noms (facultatif)
    $safeMarque = ucfirst($marque);
    $safeModele = ucfirst($modele);

    // Chemin final
    $folderPath = $basePath . $safeMarque . '/' . $safeModele . '/';

    // Création du dossier
    if (!is_dir($folderPath)) {
        mkdir($folderPath, 0777, true);
    }

    //--------------------------------------------
    //  UPLOAD DES IMAGES DU DOSSIER CHOISI (webkitdirectory)
    //--------------------------------------------
    if (!isset($files['images']) || empty($files['images'])) {
        session()->setFlashdata('error', 'Aucun dossier d\'images n’a été sélectionné.');
        session()->setFlashdata('message_type', 'danger');
        return redirect()->back()->withInput();
    }

    foreach ($files['images'] as $img) {
        if ($img->isValid() && !$img->hasMoved()) {
            $img->move($folderPath, $img->getClientName());
        }
    }

    //--------------------------------------------
    //  INSERTION SQL
    //--------------------------------------------
    try {

        // On retire "public/" pour stocker un chemin propre
        $dbPath = 'assets/uploads/voitures/marques/' . $safeMarque . '/' . $safeModele;

        $model->insert([
            'voit_marq'          => $marque,
            'voit_mdl'           => $modele,
            'voit_prix'          => $this->request->getPost('voit_prix'),
            'voit_moteur'        => $this->request->getPost('voit_moteur'),
            'voit_puiss'         => $this->request->getPost('voit_puiss'),
            'voit_0_100_kmh'     => $this->request->getPost('voit_0_100_kmh'),
            'voit_0_200_kmh'     => $this->request->getPost('voit_0_200_kmh'),
            'voit_vitesse_max'   => $this->request->getPost('voit_vitesse_max'),
            'voit_annee'         => $this->request->getPost('voit_annee'),
            'voit_chemin_dossier' => $dbPath,
        ]);

    } catch (\Exception $e) {
        session()->setFlashdata('error', 'Erreur lors de l’insertion : ' . $e->getMessage());
        session()->setFlashdata('message_type', 'danger');
        return redirect()->back()->withInput();
    }

    //--------------------------------------------
    //  MESSAGE DE SUCCÈS
    //--------------------------------------------
    session()->setFlashdata('message', 'Voiture ajoutée avec succès !');
    session()->setFlashdata('message_type', 'success');
    return redirect()->to('/Voiture/ajoutVoiture');
}
    

    public function edit($id)
    {
        $model = new modelVoiture();
        $data['voiture'] = $model->find($id);

        return view('voiture_edit', $data);
    }

    public function update($id)
    {
        $model = new modelVoiture();

        $model->update($id, [
            'voit_marq'        => $this->request->getPost('voit_marq'),
            'voit_mdl'         => $this->request->getPost('voit_mdl'),
            'voit_prix'        => $this->request->getPost('voit_prix'),
            'voit_moteur'      => $this->request->getPost('voit_moteur'),
            'voit_puiss'       => $this->request->getPost('voit_puiss'),
            'voit_0_100_kmh'   => $this->request->getPost('voit_0_100_kmh'),
            'voit_0_200_kmh'   => $this->request->getPost('voit_0_200_kmh'),
            'voit_vitesse_max' => $this->request->getPost('voit_vitesse_max'),
            'voit_annee'       => $this->request->getPost('voit_annee'),
        ]);

        return redirect()->to('/voiture');
    }

    public function delete($id)
    {
        $model = new VoitureModel();
        $model->delete($id);

        return redirect()->to('/voiture');
    }

    public function formVoiture(): string
    {
        return view('admin/ajoutVoiture');
    }

    public function vitrineVoiture($marque)
{
    $modelVoiture = new modelVoiture();
    $nbrVoiture = $modelVoiture->where('voit_marq', $marque)->countAllResults();

    $donnees = [ 'voitures' => $modelVoiture->where('voit_marq', $marque)->findAll(),
                 'titre' => 'Voiture',
                 'marque' => $marque,
                 'nbrVoiture' => $nbrVoiture

    ]; 


    return view('vitrineVoiture', $donnees);
}
   
    public function detailVoiture($id): string
    {
        $modelVoiture = new modelVoiture();
        $voiture = $modelVoiture->find($id);
        $marques = $modelVoiture->findAll();
        $session = session();
        $donnees = [
            'voiture' => $voiture,
                 'titre' => 'Voiture',
                 'marques' => $marques,
                 'id_user' => $session->get('id'),
                   'nom' => $session->get('nom'),
                   'prenom' => $session->get('prenom'),
                   'email' => $session->get('email')
        ];

      
        return view('detailVoiture', $donnees);
    }




    















}
