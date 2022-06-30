<?php 
namespace App\Models;

use CodeIgniter\Model;

class Camiseta extends Model{
    protected $table      = 'camisetas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'imagen'];
}