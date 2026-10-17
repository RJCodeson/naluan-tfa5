<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '+63 917 123 4567',
                'address' => '123 Rizal Avenue, Manila',
                'membership' => 'VIP',
                'total_spent' => '₱24,500.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Clara Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '+63 918 234 5678',
                'address' => '456 Mabini Street, Quezon City',
                'membership' => 'Regular',
                'total_spent' => '₱8,920.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Antonio Luna',
                'email' => 'antonio.luna@example.com',
                'phone' => '+63 919 345 6789',
                'address' => '789 Luna Boulevard, San Juan',
                'membership' => 'VIP',
                'total_spent' => '₱31,450.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Gabriela Silang',
                'email' => 'gabriela.silang@example.com',
                'phone' => '+63 920 456 7890',
                'address' => '101 Ilocos Road, Pasig City',
                'membership' => 'Regular',
                'total_spent' => '₱12,300.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Jose Rizal',
                'email' => 'jose.rizal@example.com',
                'phone' => '+63 921 567 8901',
                'address' => '55 Calamba Way, Makati City',
                'membership' => 'VIP',
                'total_spent' => '₱45,120.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Melchora Aquino',
                'email' => 'melchora.aquino@example.com',
                'phone' => '+63 922 678 9012',
                'address' => '88 Banlat Road, Caloocan City',
                'membership' => 'Regular',
                'total_spent' => '₱6,750.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
