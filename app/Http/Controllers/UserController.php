<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of user accounts retrieved through Eloquent ORM.
     */
    public function index(): View
    {
        $users = User::orderBy('id', 'asc')->get();

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
