<?php 

namespace App\Controllers;
class Acceuil extends BaseController
{
    public function index(): string
    {
        return view('header') . view('page_acceuil');
    }
}

