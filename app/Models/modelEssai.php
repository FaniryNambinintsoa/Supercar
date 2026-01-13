<?php
namespace App\Models;
use CodeIgniter\Model;

class modelEssai extends Model
{
  protected $table = 'dmd_essai';
  protected $primaryKey = 'dmd_id';
  protected $autoIncrement = true;
  protected $returnType = 'array';
  

  protected $allowedFields = ['date_essai', 
                              'dmd_status',
                              'us_id',
                              'voit_id'];

  protected $useTimestamps = true;

    
} 
