<?php

namespace App\Models;

use CodeIgniter\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $allowedFields = ['titel', 'url', 'type'];

    public function getLinks()
    {
        
    }
}