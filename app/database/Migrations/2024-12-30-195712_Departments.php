<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type"       => "INT",
                "constraint" => 5,
                "unsigned"   => true,
                "auto_increment" => true,
            ],
            "name" => [
                "type"       => "varchar",
                "constraint" => 255,
            ],
            "description" => [
                "type"       => "tinytext",
                "null" => true
            ]
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("departments");
    }

    public function down()
    {
        $this->forge->dropTable("departments");
    }
}
