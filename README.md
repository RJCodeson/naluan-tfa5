# IT0049 - Technical Formative Assessment 6 (TFA6)
## From Arrays to Eloquent: Database-Backed Laravel Application

**Course:** IT0049 (Web System Technologies)  
**Program:** College of Computer Studies and Multimedia Arts  
**Assessment:** Technical Formative Assessment 6 (TFA6)  
**Topic:** Migrations, Database Seeders, and Eloquent ORM Integration  

---

## 1. Project Overview

This project transitions the POS (Point of Sale) application from temporary static PHP arrays (TFA5) to a fully database-backed web application using **Laravel Migrations**, **Database Seeders**, and **Eloquent ORM**, implementing the schema established in TFA2.

### Core Features:
- **Database Migrations:** Schema definitions for `customers` and `users` tables managed via version-controlled migration files.
- **Database Seeders:** Automated seeding of realistic records matching the TFA2 schema using Eloquent models.
- **Eloquent Models:** `Customer` and `User` models encapsulating database interactions without raw SQL queries.
- **MVC Architecture:** Controllers query the database through Eloquent (`Customer::orderBy('id', 'asc')->get()`, `User::orderBy('id', 'asc')->get()`) and pass datasets to Blade templates.
- **Blade Views:** Shared layout (`resources/views/layouts/app.blade.php`) and `@foreach` loops rendering customer and user records.
- **Automated Feature Tests:** PHPUnit test suite validating all routes, HTTP 200 responses, and database record rendering.
- **Raw SQL Export:** Complete schema and data dump provided in `database/database_export.sql`.

---

## 2. Database Schema (TFA2 Specification)

### `customers` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PRIMARY KEY, AUTO_INCREMENT | Customer unique identifier |
| `full_name` | VARCHAR(100) | NOT NULL | Customer full name |
| `email` | VARCHAR(100) | NOT NULL | Contact email address |
| `phone` | VARCHAR(20) | NULLABLE | Contact telephone / mobile number |
| `created_at` | TIMESTAMP | NULLABLE | Record creation timestamp |
| `updated_at` | TIMESTAMP | NULLABLE | Record last update timestamp |

### `users` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PRIMARY KEY, AUTO_INCREMENT | User unique identifier |
| `username` | VARCHAR(50) | UNIQUE, NOT NULL | Unique login handle |
| `password` | VARCHAR(255) | NOT NULL | Encrypted password string |
| `full_name` | VARCHAR(100) | NOT NULL | Employee / user full name |
| `avatar` | VARCHAR(255) | NULLABLE | Profile picture filename or path |
| `remember_token` | VARCHAR(100) | NULLABLE | Token for persistent sessions |
| `created_at` | TIMESTAMP | NULLABLE | Record creation timestamp |
| `updated_at` | TIMESTAMP | NULLABLE | Record last update timestamp |

---

## 3. Route Architecture & Controller Mapping

| Method | URI | Controller Action | View Template | Data Source |
|---|---|---|---|---|
| `GET` | `/` | `PageController@home` | `resources/views/pages/home.blade.php` | Static / View Data |
| `GET` | `/about` | `PageController@about` | `resources/views/pages/about.blade.php` | Static / Documentation |
| `GET` | `/customers` | `CustomerController@index` | `resources/views/customers/index.blade.php` | `Customer::orderBy('id', 'asc')->get()` |
| `GET` | `/users` | `UserController@index` | `resources/views/users/index.blade.php` | `User::orderBy('id', 'asc')->get()` |

---

## 4. Installation & Local Setup Guide

### Prerequisites
- PHP >= 8.2 (with `pdo`, `pdo_sqlite` or `pdo_mysql`, `openssl`, `mbstring` enabled)
- Composer >= 2.0
- Git

### Step-by-Step Instructions

1. **Clone the repository:**
   ```bash
   git clone https://github.com/RJCodeson/naluan-tfa5.git
   cd naluan-tfa5
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure the environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations and seeders:**
   ```bash
   php artisan migrate:fresh --seed
   ```
   *This drops existing tables, runs migrations for customers and users, and seeds sample data.*

5. **Start the local development server:**
   ```bash
   php artisan serve --host=127.0.0.1 --port=8000
   ```

6. **Access the application in your browser:**
   - Landing Page: `http://127.0.0.1:8000/`
   - About Page: `http://127.0.0.1:8000/about`
   - Customer Accounts: `http://127.0.0.1:8000/customers`
   - User Accounts: `http://127.0.0.1:8000/users`

---

## 5. Automated Testing

Run the feature and unit test suite:
```bash
php artisan test
```

Expected output:
```text
PASS  Tests\Unit\ExampleTest
✓ that true is true

PASS  Tests\Feature\ExampleTest
✓ the application returns a successful response

PASS  Tests\Feature\PageRoutesTest
✓ landing page returns successful response
✓ about page returns successful response
✓ customers page returns successful response with eloquent records
✓ users page returns successful response with eloquent records

Tests:  6 passed (26 assertions)
```

---

## 6. Directory Structure

```text
naluan-tfa5/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php
│   │       ├── PageController.php
│   │       ├── CustomerController.php    # Queries Customer Eloquent model
│   │       └── UserController.php        # Queries User Eloquent model
│   └── Models/
│       ├── Customer.php                  # Eloquent model for customers
│       └── User.php                      # Eloquent model for users
├── database/
│   ├── database_export.sql               # TFA2-compatible SQL schema & data dump
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   └── 2026_10_17_134905_create_customers_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── CustomerSeeder.php            # Populates customer sample records
│       └── UserSeeder.php                # Populates user sample records
├── public/
│   ├── css/
│   │   └── style.css                     # Responsive application stylesheet
│   └── index.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             # Master layout with navigation
│       ├── pages/
│       │   ├── home.blade.php            # Landing page
│       │   └── about.blade.php           # About page
│       ├── customers/
│       │   └── index.blade.php           # Customer accounts table (@foreach)
│       └── users/
│           └── index.blade.php           # User accounts table (@foreach)
├── routes/
│   └── web.php                           # Route definitions
├── tests/
│   └── Feature/
│       └── PageRoutesTest.php            # Automated route & Eloquent tests
├── .htaccess                             # Root redirect for shared hosting
├── index.php                             # Root entry point for shared hosting
└── README.md
```

---

## 7. Submission Checklist

- [x] Migrations for `customers` (`full_name`, `email`, `phone`) and `users` (`username` unique, `full_name`) matching TFA2 schema
- [x] Database seeder populating sample records for both tables
- [x] `Customer` and `User` Eloquent models created in `app/Models/`
- [x] `CustomerController` and `UserController` updated to retrieve records through Eloquent models
- [x] Blade views displaying retrieved Eloquent records with `@foreach` loops
- [x] Raw SQL database export provided at `database/database_export.sql`
- [x] Automated test suite passing with 6 tests (26 assertions)
- [x] Git repository organized and up to date
