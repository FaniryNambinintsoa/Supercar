<?php
namespace App\Models;
use CodeIgniter\Model;

class modelContact extends Model {
    protected $table = 'commentaires';
    protected $primaryKey = 'coms_id';
    protected $autoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['coms_desc', 'nom', 'prenom', 'email', 'tel', 'modalite_contact'];
    protected $useTimestamps = true;
}