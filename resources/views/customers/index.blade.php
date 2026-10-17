@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Accounts Directory</p>
        <h1>Customer Accounts</h1>
        <p>Customer accounts listed from the controller's static PHP array data source.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ url('/users') }}">View Staff Accounts</a>
            <a class="button" href="{{ url('/') }}">Back to Home</a>
        </div>
    </div>
</section>

<section class="container content-section">
    <div class="notice">
        <strong>Data Source Note:</strong> These records are rendered dynamically via Laravel's Blade engine using <code>@@foreach</code> from a static PHP array defined in <code>CustomerController</code>.
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Membership</th>
                    <th>Total Spent</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($customers))
                    <tr>
                        <td colspan="7" style="text-align: center;">No customer records found.</td>
                    </tr>
                @else
                    @foreach ($customers as $customer)
                        <tr>
                            <td>#{{ $customer['id'] }}</td>
                            <td><strong>{{ $customer['full_name'] }}</strong></td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td>{{ $customer['address'] }}</td>
                            <td>
                                <span class="badge {{ $customer['membership'] === 'VIP' ? 'badge-vip' : 'badge-active' }}">
                                    {{ $customer['membership'] }}
                                </span>
                            </td>
                            <td>{{ $customer['total_spent'] }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div style="margin-top: 18px;">
        <p>Total Records Displayed: <strong>{{ count($customers) }}</strong></p>
    </div>
</section>
@endsection
