<?php 

namespace App\Controllers;

class TESTAGE extends BaseController
{
    public function TESTAGE(): string
    {
        $donnees = [
            'titre' => 'Page de test'
        ];
        return view('header', $donnees) . view('TESTAGE');
    }
}
