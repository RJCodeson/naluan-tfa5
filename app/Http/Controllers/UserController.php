<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Static PHP array serving as temporary data source for user accounts.
     * Contains at least 5 sample records as required by TFA5.
     *
     * @var array<int, array<string, mixed>>
     */
    protected static array $users = [
        [
            'id' => 1,
            'username' => 'admin_juan',
            'full_name' => 'Juan Dela Cruz',
            'role' => 'System Administrator',
            'email' => 'admin.juan@possystem.local',
            'status' => 'Active',
            'created_at' => '2026-01-15 08:30:00',
        ],
        [
            'id' => 2,
            'username' => 'maria_cashier',
            'full_name' => 'Maria Clara Santos',
            'role' => 'Head Cashier',
            'email' => 'maria.cashier@possystem.local',
            'status' => 'On Duty',
            'created_at' => '2026-02-01 09:15:00',
        ],
        [
            'id' => 3,
            'username' => 'antonio_mgr',
            'full_name' => 'Antonio Luna',
            'role' => 'Store Manager',
            'email' => 'antonio.mgr@possystem.local',
            'status' => 'Active',
            'created_at' => '2026-02-18 10:45:00',
        ],
        [
            'id' => 4,
            'username' => 'gabriela_inv',
            'full_name' => 'Gabriela Silang',
            'role' => 'Inventory Clerk',
            'email' => 'gabriela.inv@possystem.local',
            'status' => 'Active',
            'created_at' => '2026-03-05 13:20:00',
        ],
        [
            'id' => 5,
            'username' => 'jose_supervisor',
            'full_name' => 'Jose Rizal',
            'role' => 'Shift Supervisor',
            'email' => 'jose.sup@possystem.local',
            'status' => 'On Duty',
            'created_at' => '2026-03-22 15:00:00',
        ],
        [
            'id' => 6,
            'username' => 'tandang_sora',
            'full_name' => 'Melchora Aquino',
            'role' => 'Accountant',
            'email' => 'melchora.acct@possystem.local',
            'status' => 'Active',
            'created_at' => '2026-04-10 11:00:00',
        ],
    ];

    /**
     * Display a listing of user accounts from the static PHP array.
     */
    public function index(): View
    {
        return view('users.index', [
            'title' => 'User Accounts',
            'users' => self::$users,
        ]);
    }
}
