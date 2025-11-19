<?php 

namespace App\Controllers;
use App\Models\modelVoiture;

class TESTAGE extends BaseController
{
    public function pageTest(): string
    {
        /* $model = new modelVoiture();
        $donnees = [
            'titre' => 'Page de test',
            'voitures' => $model->findAll()
        ];
        return view('detailVoiture', $donnees); */

        /* return view('admin/dashboard/index'); */
/* $donnees = ['val' => $this->request->getPost('maValeur')];
        return view('pageConnexion', $donnees); */
        $donnee = ['valeur' => $this->request->getPost('valeur'),
        'data' => $this->request->getJSON()];
        return view('pageConnexion', $donnee);
    }

    public function hello(): string
    {
        $donnees = [
            'titre' => 'Hello Page'
        ];
        return view('Hello', $donnees);
    }

    public function save()
    {
        // Vérifie si la requête est bien une requête AJAX
        if ($this->request->isAJAX()) {
$json = $this->request->getBody();
$data = json_decode($json, true);
            
      if (isset($data['resultat'])) {
    $valeur = $data['resultat'];
      }
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Utilisateur ajouté avec succès ✅'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'Requête non autorisée ❌'
        ]);
        
    }
}
