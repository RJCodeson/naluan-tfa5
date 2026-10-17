<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Static PHP array serving as temporary data source for customer records.
     * Contains at least 5 sample records as required by TFA5.
     *
     * @var array<int, array<string, mixed>>
     */
    protected static array $customers = [
        [
            'id' => 101,
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan.delacruz@example.com',
            'phone' => '+63 917 123 4567',
            'address' => '123 Rizal Avenue, Manila',
            'membership' => 'VIP',
            'total_spent' => '₱24,500.00',
        ],
        [
            'id' => 102,
            'full_name' => 'Maria Clara Santos',
            'email' => 'maria.santos@example.com',
            'phone' => '+63 918 234 5678',
            'address' => '456 Mabini Street, Quezon City',
            'membership' => 'Regular',
            'total_spent' => '₱8,920.00',
        ],
        [
            'id' => 103,
            'full_name' => 'Antonio Luna',
            'email' => 'antonio.luna@example.com',
            'phone' => '+63 919 345 6789',
            'address' => '789 Luna Boulevard, San Juan',
            'membership' => 'VIP',
            'total_spent' => '₱31,450.00',
        ],
        [
            'id' => 104,
            'full_name' => 'Gabriela Silang',
            'email' => 'gabriela.silang@example.com',
            'phone' => '+63 920 456 7890',
            'address' => '101 Ilocos Road, Pasig City',
            'membership' => 'Regular',
            'total_spent' => '₱12,300.00',
        ],
        [
            'id' => 105,
            'full_name' => 'Jose Rizal',
            'email' => 'jose.rizal@example.com',
            'phone' => '+63 921 567 8901',
            'address' => '55 Calamba Way, Makati City',
            'membership' => 'VIP',
            'total_spent' => '₱45,120.00',
        ],
        [
            'id' => 106,
            'full_name' => 'Melchora Aquino',
            'email' => 'melchora.aquino@example.com',
            'phone' => '+63 922 678 9012',
            'address' => '88 Banlat Road, Caloocan City',
            'membership' => 'Regular',
            'total_spent' => '₱6,750.00',
        ],
    ];

    /**
     * Display a listing of customer accounts from the static PHP array.
     */
    public function index(): View
    {
        return view('customers.index', [
            'title' => 'Customer Accounts',
            'customers' => self::$customers,
        ]);
    }
}
