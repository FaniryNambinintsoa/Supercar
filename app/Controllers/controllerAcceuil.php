<?php 

namespace App\Controllers;
class controllerAcceuil extends BaseController
{
    public function index(): string
    {
        $donnees = [
            'titre' => 'Acceuil'
        ];
        return view('header', $donnees) . view('page_acceuil');
    }
}

