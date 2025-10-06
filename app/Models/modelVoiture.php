<?php 
namespace App\Models;
use CodeIgniter\Model;  

class modelVoiture extends Model
{
    protected $table = 'voiture';
    protected $primaryKey = 'voit_id';
    protected $autoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = ['voit_marq', 'voit_mdl', 
                                'voit_prix', 'voit_img_lf', 
                                'voit_img_rb', 'voit_img_int_l', 
                                'voit_img_int_r', 'voit_moteur', 
                                'voit_boite', 'voit_puiss', 
                                'voit_annee'];
}
?>