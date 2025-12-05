<?php 
namespace App\Models;
use CodeIgniter\Model;  

class modelVoiture extends Model
{
    protected $table = 'voiture';
    protected $primaryKey = 'voit_id';
    protected $autoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = [
        'voit_marq',
        'voit_mdl',
        'voit_prix',
        'voit_moteur',
        'voit_puiss',
        'voit_0_100_kmh',
        'voit_0_200_kmh',
        'voit_vitesse_max',
        'voit_chemin_dossier',
        'voit_annee'
    ];

    protected $useTimestamps = false;
}