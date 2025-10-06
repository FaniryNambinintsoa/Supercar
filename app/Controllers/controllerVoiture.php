<?php

namespace App\Controllers;

use App\Models\modelVoiture;

class controllerVoiture extends BaseController
{
    public function formVoiture(): string
    {
        return view('header') . view('formVoiture');
    }

    public function affichageVoiture(): string
    {
        $model = new modelVoiture();
        $donnees['voitures'] = $model->findAll();
        return view('affichageVoiture', $donnees);
    }

    public function ajoutVoiture(): string
    {
        $message = ['succes' => 'La voiture a été ajoutée avec succès !'];
        $model = new modelVoiture();

        $data = [
            'voit_marq' => $this->request->getPost('marque'),
            'voit_mdl' => $this->request->getPost('modele'),
            'voit_prix' => $this->request->getPost('prix'),
            'voit_img_lf' => $this->request->getPost('img_lf'),
            'voit_img_rb' => $this->request->getPost('img_rb'),
            'voit_img_int_l' => $this->request->getPost('img_int_l'),
            'voit_img_int_r' => $this->request->getPost('img_int_r'),
            'voit_moteur' => $this->request->getPost('moteur'),
            'voit_boite' => $this->request->getPost('boite'),
            'voit_puiss' => $this->request->getPost('puissance'),
            'voit_annee' => $this->request->getPost('annee')
        ];

        $model->insert($data);

        return view('header') . view('formVoiture') . view('messagesucces', $message);
    }
}
