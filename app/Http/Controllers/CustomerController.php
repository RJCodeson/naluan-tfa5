<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of customer accounts retrieved through Eloquent ORM.
     */
    public function index(): View
    {
        $customers = Customer::orderBy('id', 'asc')->get();

        return view('customers.index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
