<?php 

namespace App\Controllers;
use App\Models\modelVoiture;

class TESTAGE extends BaseController
{
    public function TESTAGE(): string
    {
        $model = new modelVoiture();
        $donnees = [
            'titre' => 'Page de test',
            'voitures' => $model->findAll()
        ];
        return view('detailVoiture', $donnees);
    }
}
