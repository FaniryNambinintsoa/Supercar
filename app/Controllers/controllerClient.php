<?php
namespace App\Controllers;
use App\Models\modelClient;
class controllerClient extends BaseController
{
    public function formInscription(): string
    {
       
        
        return view('pageInscription'); 
    }
    
   public function inscription()
{
    $messages = ['succes' => 'Compte creer avec succès !'];
    $mdpClair = $this->request->getPost('password');
    $mdpConf  = $this->request->getPost('confpassword');
    
    if ($mdpClair !== $mdpConf) {

        $donnees = [
            'message' => 'Les mots de passe ne correspondent pas ❌'
        ];

        return view('pageInscription');
    }

    $hash = password_hash($mdpClair, PASSWORD_DEFAULT);

    $model = new modelClient();
    $data = [
        'us_nom'    => $this->request->getPost('nom'),
        'us_prenom' => $this->request->getPost('prenom'),
        'us_mail'   => $this->request->getPost('email'),
        'us_mdp'    => $hash
    ];
    $model->insert($data);

   $donnees = ['admin' => 'Admin',
                    'client' => 'Espace client'];
        
        return view('pageConnexion', $donnees) . view('messageSucces', $messages);
}

}
?>