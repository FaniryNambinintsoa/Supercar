<?php
namespace App\Controllers\Client;

use App\Models\modelUser;

class controllerClient extends BaseController
{
    public function formInscription()
    {
        return view('pageInscription');
    }

    public function inscription()
    {
        $model = new modelUser();

        $nom       = $this->request->getPost('nom');
        $prenom    = $this->request->getPost('prenom');
        $email     = $this->request->getPost('email');
        $mdp       = $this->request->getPost('password');
        $mdpConf   = $this->request->getPost('confpassword');
        $role      = $this->request->getPost('role');

        // Vérif mot de passe
        if ($mdp !== $mdpConf) {
            return view('pageInscription', [
                'message' => 'Les mots de passe ne correspondent pas',
                'type'    => 'error'
            ]);
        }

        // Vérif si email existe déjà
        $existe = $model->groupStart()->where(['us_mail'=> $email,
        'us_role' => $role])->groupEnd()->first();

        if ($existe) {
            return view('pageInscription', [
                'message' => 'Un compte avec cet email existe déjà',
                'type'    => 'error'
            ]);
        }

        // OK → insertion
        $hash = password_hash($mdp, PASSWORD_DEFAULT);

        $model->insert([
            'us_nom'    => $nom,
            'us_prenom' => $prenom,
            'us_mail'   => $email,
            'us_mdp'    => $hash,
            'us_role'   => $role
        ]);

        return view('pageConnexion', [
            'message' => 'Inscription réussie, Vous pouvez maintenant vous connecter.',
            'type'    => 'success'
        ]);
    }
}


?>