<?php
namespace App\Controllers;

class controllerContact extends BaseController {
    public function pageContact() {

        $donnees = [
            'titre' => 'Contactez-nous'
        ];
        
        return view('contact', $donnees);
    }
}

?>