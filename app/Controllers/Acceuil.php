<?php 

namespace App\Controllers;
class Acceuil extends BaseController
{
    public function index(): string
    {
        $donnees = [
            'titre' => 'Acceuil'
        ];
        return view('header', $donnees) . view('page_acceuil');
    }
}

