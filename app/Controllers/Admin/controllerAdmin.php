<?php
namespace App\Controllers\Admin;

class controllerAdmin extends BaseController
{
public function index(): string
{
    return view('admin/index');
}

}
?>