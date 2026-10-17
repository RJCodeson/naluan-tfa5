@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Project Specifications</p>
        <h1>About the POS Application</h1>
        <p>A modern Laravel web system replicating TFA1, demonstrating MVC architecture, routing, controllers, and Blade templating.</p>
    </div>
</section>

<section class="container content-section">
    <div class="about-grid">
        <div>
            <h2>Course Context & Objectives</h2>
            <p>
                This project satisfies <strong>Technical Formative Assessment 5 (TFA5)</strong> for 
                <strong>IT0049 (Web System Technologies)</strong> at the College of Computer Studies and Multimedia Arts.
            </p>
            <p>
                The primary purpose is to transition foundational MVC concepts from CodeIgniter to Laravel,
                verifying how routes dispatch actions to controllers and render responsive Blade views.
            </p>
            <p>
                In this development stage, <strong>static PHP arrays</strong> serve as the temporary data layer for 
                Customer and User account listings prior to full ORM database persistence.
            </p>

            <div class="actions" style="margin-top: 24px;">
                <a class="button button-primary" href="{{ url('/customers') }}">Inspect Customers</a>
                <a class="button" href="{{ url('/users') }}">Inspect Users</a>
            </div>
        </div>

        <aside class="flow-box">
            <h2>Laravel MVC Flow</h2>
            <ol>
                <li>
                    <strong>Routes:</strong> <code>routes/web.php</code> maps incoming URI requests to explicit controller methods.
                </li>
                <li>
                    <strong>Controllers:</strong> <code>PageController</code>, <code>CustomerController</code>, and <code>UserController</code> encapsulate business logic and data preparation.
                </li>
                <li>
                    <strong>Data Source:</strong> Static PHP arrays emulate database recordsets with typed arrays.
                </li>
                <li>
                    <strong>Views:</strong> Blade engine compiles layouts and uses <code>@@foreach</code> directives to iterate through datasets.
                </li>
            </ol>
        </aside>
    </div>
</section>
@endsection
