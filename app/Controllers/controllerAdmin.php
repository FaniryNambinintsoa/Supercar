<?php
namespace App\Controllers;

class controllerAdmin extends BaseController
{
public function index(): string
{
    return view('admin/dashboard/index');
}
}
?>