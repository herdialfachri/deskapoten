<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role'        => 1,
                'name' => 'Admin',
            ],
            [
                'role'        => 2,
                'name' => 'User',
            ],
        ];

        // Menyisipkan data ke tabel role
        $this->db->table('role')->insertBatch($data);
    }
}
