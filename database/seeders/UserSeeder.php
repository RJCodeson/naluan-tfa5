<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        User::truncate();

        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Administrator',
                'avatar' => null,
                'created_at' => '2026-09-13 13:00:00',
                'updated_at' => '2026-09-13 13:00:00',
            ],
            [
                'id' => 2,
                'username' => 'admin01',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Paolo Dela Cruz',
                'avatar' => null,
                'created_at' => '2026-09-13 13:00:00',
                'updated_at' => '2026-09-13 13:00:00',
            ],
            [
                'id' => 3,
                'username' => 'manager01',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Sofia Ramos',
                'avatar' => null,
                'created_at' => '2026-09-13 13:05:00',
                'updated_at' => '2026-09-13 13:05:00',
            ],
            [
                'id' => 4,
                'username' => 'cashier01',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Miguel Torres',
                'avatar' => null,
                'created_at' => '2026-09-13 13:10:00',
                'updated_at' => '2026-09-13 13:10:00',
            ],
            [
                'id' => 5,
                'username' => 'cashier02',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Andrea Flores',
                'avatar' => null,
                'created_at' => '2026-09-13 13:15:00',
                'updated_at' => '2026-09-13 13:15:00',
            ],
            [
                'id' => 6,
                'username' => 'staff01',
                'password' => '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G',
                'full_name' => 'Daniel Lim',
                'avatar' => null,
                'created_at' => '2026-09-13 13:20:00',
                'updated_at' => '2026-09-13 13:20:00',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
