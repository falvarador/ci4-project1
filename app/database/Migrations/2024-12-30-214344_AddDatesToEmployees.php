<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDatesToEmployees extends Migration
{
    public function up()
    {
        $this->forge->addColumn('employees', [
            'created_at' => [
                'type'       => 'datetime',
                'after'      => 'department_id',
            ],
            'updated_at' => [
                'type'       => 'datetime',
                "after"      => 'created_at',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('employees', 'updated_at');
        $this->forge->dropColumn('employees', 'created_at');
    }
}
