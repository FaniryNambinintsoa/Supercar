<?php
namespace App\Models;
use CodeIgniter\Model;

class modelUser extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'us_id';
  protected $autoIncrement = true;
  protected $returnType = 'array';

  protected $allowedFields = ['us_nom', 
                              'us_prenom', 
                              'us_tel', 
                              'us_address', 
                              'us_mdp', 
                              'us_mail',
                              'us_role', 
                              'us_cin', 
                              'num_permis'];
} 
?>