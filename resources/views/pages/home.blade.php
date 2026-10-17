@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <p class="eyebrow">Enterprise Point of Sale</p>
        <h1>Smart POS Management System</h1>
        <p class="hero-text">Manage customer relationships, track staff user accounts, and streamline retail checkout workflows built on Laravel.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ url('/customers') }}">View Customer Accounts</a>
            <a class="button" href="{{ url('/users') }}">View Staff Users</a>
            <a class="button" href="{{ url('/about') }}">Learn More</a>
        </div>
    </div>
</section>

<section class="container content-section">
    <div class="section-heading">
        <p class="eyebrow">Overview</p>
        <h2>System Modules & Core Capabilities</h2>
    </div>

    <div class="card-grid">
        <article class="card">
            <h3>Customer Directory</h3>
            <p>Maintains customer profiles, contact numbers, membership tiers (Regular vs. VIP), and order history.</p>
            <div class="actions">
                <a class="button" href="{{ url('/customers') }}">Go to Customers &rarr;</a>
            </div>
        </article>

        <article class="card">
            <h3>Staff & User Management</h3>
            <p>Administers employee credentials, role permissions (Cashier, Manager, Admin), and shift schedules.</p>
            <div class="actions">
                <a class="button" href="{{ url('/users') }}">Go to Users &rarr;</a>
            </div>
        </article>

        <article class="card">
            <h3>MVC Architecture</h3>
            <p>Engineered using Model-View-Controller design pattern with Laravel routes, controllers, and Blade templates.</p>
            <div class="actions">
                <a class="button" href="{{ url('/about') }}">Read Architecture &rarr;</a>
            </div>
        </article>
    </div>
</section>
@endsection
