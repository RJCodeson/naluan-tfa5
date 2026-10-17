@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Staff Directory</p>
        <h1>User Accounts</h1>
        <p>System staff and store user accounts loaded from the controller's static PHP array.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ url('/customers') }}">View Customer Accounts</a>
            <a class="button" href="{{ url('/') }}">Back to Home</a>
        </div>
    </div>
</section>

<section class="container content-section">
    <div class="notice">
        <strong>Data Source Note:</strong> These staff records are rendered dynamically via Laravel's Blade engine using <code>@@foreach</code> from a static PHP array defined in <code>UserController</code>.
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($users))
                    <tr>
                        <td colspan="7" style="text-align: center;">No user records found.</td>
                    </tr>
                @else
                    @foreach ($users as $user)
                        <tr>
                            <td>#{{ $user['id'] }}</td>
                            <td><code>{{ $user['username'] }}</code></td>
                            <td><strong>{{ $user['full_name'] }}</strong></td>
                            <td>
                                <span class="badge {{ str_contains($user['role'], 'Admin') ? 'badge-admin' : (str_contains($user['role'], 'Cashier') ? 'badge-cashier' : 'badge-staff') }}">
                                    {{ $user['role'] }}
                                </span>
                            </td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                <span class="badge badge-active">{{ $user['status'] }}</span>
                            </td>
                            <td>{{ $user['created_at'] }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div style="margin-top: 18px;">
        <p>Total Records Displayed: <strong>{{ count($users) }}</strong></p>
    </div>
</section>
@endsection
