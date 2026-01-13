<?php
namespace App\Controllers\Client;

class controllerService extends BaseController
{
    public function service()
    {
        $donnees = [
            'titre' => 'Service'
        ];
        return view('pageService', $donnees);
    }

    public function adminService()
    {
        return view('admin/pageService');
    }
}   