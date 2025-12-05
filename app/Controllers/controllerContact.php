<?php
namespace App\Controllers;

class controllerContact extends BaseController {
    public function contact() {

        $donnees = [
            'titre' => 'Contactez-nous'
        ];
        
        return view('pageContact', $donnees);
    }
}

?>