<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'    => 'Engineering',
                'description' => 'Engineering department',
            ],
            [
                'name'    => 'Sales',
                'description' => 'Sales department',
            ],
            [
                'name'    => 'Marketing',
                'description' => 'Marketing department',
            ],
            [
                'name'    => 'Finance',
                'description' => 'Finance department',
            ],
            [
                'name'    => 'HR',
                'description' => 'Human Resources department',
            ],
        ];

        $this->db->table('departments')->insertBatch($data);
    }
}
