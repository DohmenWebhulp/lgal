<?php

namespace App\Models;

use CodeIgniter\Model;

class Film extends Model
{
    protected $table = 'films';

    protected $allowedFields = ['titel', 'maker', 'beschrijving', 'video_url', 'type'];

    public function getFilms()
    {
        
    }
}