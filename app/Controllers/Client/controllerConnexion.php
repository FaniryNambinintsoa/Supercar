<?php

namespace App\Controllers\Client;
use App\Models\modelUser;

class controllerConnexion extends BaseController
{
    public function connexion()
    {
       return view('pageConnexion');
    }
    
    public function client() 
    {
        $email = $this->request->getPost('email');
        $mdp   = $this->request->getPost('password');

        $model = new modelUser();
        $user  = $model->where(['us_mail' => $email,
                                'us_role' => 'client'])->first();

        // Vérification email
        if (!$user) {
            return view('pageConnexion', [
                'message' => "Utilisateur inexistant",
                'type'    => 'error'
            ]);
        }

        // Vérification mot de passe
        if (!password_verify($mdp, $user['us_mdp'])) {
            return view('pageConnexion', [
                'message' => "Mot de passe incorrect",
                'type'    => 'error'
            ]);
        }

        // Création de session
        session()->set([
            'id'    => $user['us_id'],       // adapte selon ton champ
            'nom'   => $user['us_nom'],
            'prenom' => $user['us_prenom'],
            'email' => $user['us_mail'],
            'role'  => $user['us_role'],
            'tel'   => $user['us_tel'],
            'adresse' => $user['us_address'],
            'cin'   => $user['us_cin'],
            'num_permis' => $user['num_permis'],
            'status_connex' => true
            
        ]);

        
            return redirect()->to('/Acceuil');
        
    }
public function deconnexion()
{
    // Destruction de toute la session
    session()->destroy();

    // Redirection après déconnexion
    return redirect()->to('/connexion');
}
    
}


?>