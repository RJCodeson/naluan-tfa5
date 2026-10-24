@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Staff Directory</p>
        <h1>User Accounts</h1>
        <p>System staff and user accounts retrieved from the database via the User Eloquent model.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ url('/customers') }}">View Customer Accounts</a>
            <a class="button" href="{{ url('/') }}">Back to Home</a>
        </div>
    </div>
</section>

<section class="container content-section">
    <div class="notice">
        <strong>Data Source Note:</strong> These staff records are retrieved dynamically from the database using Laravel's Eloquent ORM (<code>User::orderBy('id', 'asc')->get()</code>) and looped through using <code>@@foreach</code> in Blade.
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->isEmpty())
                    <tr>
                        <td colspan="4" style="text-align: center;">No user records found.</td>
                    </tr>
                @else
                    @foreach ($users as $user)
                        <tr>
                            <td>#{{ $user->id }}</td>
                            <td><code>{{ $user->username }}</code></td>
                            <td><strong>{{ $user->full_name }}</strong></td>
                            <td>{{ $user->created_at ? $user->created_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div style="margin-top: 18px;">
        <p>Total Records Displayed: <strong>{{ $users->count() }}</strong></p>
    </div>
</section>
@endsection
