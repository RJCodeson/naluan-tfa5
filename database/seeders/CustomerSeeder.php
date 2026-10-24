<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Customer::truncate();

        $customers = [
            [
                'id' => 1,
                'full_name' => 'Angela Cruz',
                'email' => 'angela.cruz@example.com',
                'phone' => '0917 123 4567',
                'created_at' => '2026-09-13 13:00:00',
                'updated_at' => '2026-09-13 13:00:00',
            ],
            [
                'id' => 2,
                'full_name' => 'Marco Santos',
                'email' => 'marco.santos@example.com',
                'phone' => '0918 234 5678',
                'created_at' => '2026-09-13 13:05:00',
                'updated_at' => '2026-09-13 13:05:00',
            ],
            [
                'id' => 3,
                'full_name' => 'Beatrice Reyes',
                'email' => 'beatrice.reyes@example.com',
                'phone' => '0919 345 6789',
                'created_at' => '2026-09-13 13:10:00',
                'updated_at' => '2026-09-13 13:10:00',
            ],
            [
                'id' => 4,
                'full_name' => 'Joshua Garcia',
                'email' => 'joshua.garcia@example.com',
                'phone' => '0920 456 7890',
                'created_at' => '2026-09-13 13:15:00',
                'updated_at' => '2026-09-13 13:15:00',
            ],
            [
                'id' => 5,
                'full_name' => 'Nicole Mendoza',
                'email' => 'nicole.mendoza@example.com',
                'phone' => '0921 567 8901',
                'created_at' => '2026-09-13 13:20:00',
                'updated_at' => '2026-09-13 13:20:00',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
