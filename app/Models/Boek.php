<?php

namespace App\Models;

use CodeIgniter\Model;

class Boek extends Model
{
    protected $table = 'boeken';

    protected $allowedFields = ['titel', 'auteur', 'samenvatting', 'afbeelding'];

    public function getBoeken()
    {
        
    }
}