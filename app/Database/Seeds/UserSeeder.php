<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'Admin',
                'email'    => 'admin@deskal.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'nama'     => 'User',
                'email'    => 'user@deskal.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
            ]
        ];

        // Menyisipkan data ke tabel users
        $this->db->table('users')->insertBatch($data);
    }
}
