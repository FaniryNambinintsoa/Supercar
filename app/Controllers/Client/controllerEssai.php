<?php 
namespace App\Controllers\Client;
use App\Models\modelEssai;
use App\Models\modelUser;

class controllerEssai extends BaseController
{   
    protected $modelEssai;
    protected $modelUser;

    public function __construct()
    {
        $this->modelEssai = new modelEssai();
        $this->modelUser = new modelUser();
    }

    public function soumettre() // ou retirer et récupérer via session
    {
        $id_user = session()->get('id');
        // Mise à jour info utilisateur
        $dataUser = [
            'us_tel'     => $this->request->getPost('tel'),
            'us_cin'     => $this->request->getPost('cin'),
            'num_permis' => $this->request->getPost('num_permis'),
            'us_address' => $this->request->getPost('adresse')
        ];
        $this->modelUser->update($id_user, $dataUser);

        // Enregistrement demande essai
        $dataEssai = [
            'date_essai' => $this->request->getPost('date_essai'),
            'dmd_status' => 'En attente',
            'us_id'      => $id_user, 
            'voit_id'    => $this->request->getPost('voit_id')
        ];
        $this->modelEssai->insert($dataEssai);
        
        $donnees = ['type' => 'success',
                    'message' => 'Demande envoyée !'];
       

        return redirect()->back()->with('success', 'Demande envoyée !');

    }
}
