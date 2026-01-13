<?php
namespace App\Controllers\Client;
use App\Models\modelContact;

class controllerContact extends BaseController {
    public function contact() {

        $donnees = [
            'titre' => 'Contactez-nous'
        ];
        
        return view('pageContact', $donnees);
    }
    public function envoyerMessage() {
        $coms = new modelContact();
        $data = [
            'coms_desc' => $this->request->getPost('message'),
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'email' => $this->request->getPost('email'),
            'tel' => $this->request->getPost('telephone'),
            'modalite_contact' => $this->request->getPost('modalite_contact')
        ];

        $coms->insert($data);

        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }
}