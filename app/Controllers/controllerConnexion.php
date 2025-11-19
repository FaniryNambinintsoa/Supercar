<?php

namespace App\Controllers;

class controllerConnexion extends BaseController
{
    public function connexion()
    {
        $donnees = ['admin' => 'Admin',
                    'client' => 'Espace client'];
        return view('pageConnexion', $donnees);
    }

    public function admin() 
    {

    }
    
    public function client() 
    {
        
    }

    
}


?>