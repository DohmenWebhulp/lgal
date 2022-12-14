<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBoek extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'titel' => [
                'type' => 'NVARCHAR',
                'constraint' => 255, 
            ],
            'auteur' => [
                'type' => 'NVARCHAR',
                'constraint' => 255, 
            ],
            'samenvatting' => [
                'type' => 'text',
                'null' => true,
            ],
            'afbeelding' => [
                'type' => 'NVARCHAR',
                'constraint' => 255, 
            ]
        ];
        $this->forge->addKey('id', true, true);
        $this->forge->addField($fields);
        $this->forge->createTable('boeken');
    }

    public function down()
    {
        $this->forge->dropTable('boeken');
    }
}
