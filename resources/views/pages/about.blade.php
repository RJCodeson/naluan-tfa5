@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Project Specifications</p>
        <h1>About the POS Application</h1>
        <p>A modern Laravel web system demonstrating MVC architecture, database migrations, seeders, and Eloquent ORM.</p>
    </div>
</section>

<section class="container content-section">
    <div class="about-grid">
        <div>
            <h2>Course Context & Objectives</h2>
            <p>
                This project satisfies <strong>Technical Formative Assessment 6 (TFA6)</strong>: <em>From Arrays to Eloquent</em> for 
                <strong>IT0049 (Web System Technologies)</strong> at the College of Computer Studies and Multimedia Arts.
            </p>
            <p>
                The primary purpose is to transition from temporary static arrays (TFA5) to a fully database-backed application 
                using <strong>Laravel Migrations</strong>, <strong>Database Seeders</strong>, and <strong>Eloquent ORM</strong>, 
                implementing the schema originally established in TFA2.
            </p>
            <p>
                Records for <strong>Customer Accounts</strong> and <strong>User Accounts</strong> are retrieved dynamically via 
                <code>Customer::all()</code> and <code>User::all()</code> Eloquent models and passed to Blade templates for presentation.
            </p>

            <div class="actions" style="margin-top: 24px;">
                <a class="button button-primary" href="{{ url('/customers') }}">Inspect Customers</a>
                <a class="button" href="{{ url('/users') }}">Inspect Users</a>
            </div>
        </div>

        <aside class="flow-box">
            <h2>Laravel Database & MVC Flow</h2>
            <ol>
                <li>
                    <strong>Migrations:</strong> Describe database table schemas for <code>customers</code> and <code>users</code> as version-controlled PHP code.
                </li>
                <li>
                    <strong>Seeders:</strong> Automatically populate sample records matching the TFA2 schema without manual SQL execution.
                </li>
                <li>
                    <strong>Eloquent Models:</strong> <code>Customer</code> and <code>User</code> models represent database tables and provide object-relational mapping.
                </li>
                <li>
                    <strong>Controllers:</strong> Query records using Eloquent (e.g. <code>Customer::orderBy('id', 'asc')->get()</code>) and pass datasets to views.
                </li>
                <li>
                    <strong>Views:</strong> Blade engine renders responsive layouts and iterates over Eloquent collections using <code>@@foreach</code>.
                </li>
            </ol>
        </aside>
    </div>
</section>
@endsection
