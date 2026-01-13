<?php 

namespace App\Controllers\Client;


class controllerAcceuil extends BaseController
{
    public function index(): string
    {
       
        return view('pageBienvenue');
    }
    
    public function acceuil(): string 
    {
        $donnees = [
            'titre' => 'Acceuil'
        ];
        return view('pageAcceuil', $donnees);
    }
}

