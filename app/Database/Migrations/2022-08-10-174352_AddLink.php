<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLink extends Migration
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
            'url' => [
                'type' => 'NVARCHAR',
                'constraint' => 255, 
            ],
            'type' => [
                'type' => 'NVARCHAR',
                'constraint' => 255, 
            ],
        ];
        $this->forge->addKey('id', true, true);
        $this->forge->addField($fields);
        $this->forge->createTable('links');
    }

    public function down()
    {
        $this->forge->dropTable('links');
    }
}
