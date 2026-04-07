<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@email.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'name'     => 'User',
                'email'    => 'user@email.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
            ]
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('user');

        foreach ($data as $user) {
            // Cek apakah email sudah ada
            $exists = $builder->where('email', $user['email'])->countAllResults(false);
            if ($exists == 0) {
                $builder->insert($user);
            }
        }

        echo "Seeder selesai, data user sudah diperiksa.\n";
    }
}