@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Accounts Directory</p>
        <h1>Customer Accounts</h1>
        <p>Customer accounts retrieved from the database via the Customer Eloquent model.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ url('/users') }}">View Staff Accounts</a>
            <a class="button" href="{{ url('/') }}">Back to Home</a>
        </div>
    </div>
</section>

<section class="container content-section">
    <div class="notice">
        <strong>Data Source Note:</strong> These records are retrieved dynamically from the database using Laravel's Eloquent ORM (<code>Customer::orderBy('id', 'asc')->get()</code>) and looped through using <code>@@foreach</code> in Blade.
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @if ($customers->isEmpty())
                    <tr>
                        <td colspan="5" style="text-align: center;">No customer records found.</td>
                    </tr>
                @else
                    @foreach ($customers as $customer)
                        <tr>
                            <td>#{{ $customer->id }}</td>
                            <td><strong>{{ $customer->full_name }}</strong></td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? 'N/A' }}</td>
                            <td>{{ $customer->created_at ? $customer->created_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div style="margin-top: 18px;">
        <p>Total Records Displayed: <strong>{{ $customers->count() }}</strong></p>
    </div>
</section>
@endsection
