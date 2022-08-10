<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BoekSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'titel' => $title,
            'auteur' => url_title($title),
            'samenvatting' => 'In deze column vertel ik alleen maar wat de mensen willen horen en verder niets relevants.',
        ];

        $this->db->table('news')->insert($data);
    }
}
