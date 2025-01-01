<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
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
            "code" => [
                "type"       => "varchar",
                "constraint" => 10,
                "unique"     => true,
            ],
            "name" => [
                "type"       => "varchar",
                "constraint" => 50,
            ],
            "birthdate" => [
                "type"       => "date",
                "null" => true
            ],
            "phone" => [
                "type"       => "varchar",
                "constraint" => 25,
            ],
            "email" => [
                "type"       => "varchar",
                "constraint" => 50,
                "null" => true
            ],
            "department_id" => [
                "type"       => "INT",
                "constraint" => 5,
                "unsigned"   => true,
            ],
        ]);

        $this->forge->addKey("id", true);
        $this->forge->addForeignKey("department_id", "departments", "id");
        $this->forge->createTable("employees");
    }

    public function down()
    {
        $this->forge->dropTable("employees");
    }
}
