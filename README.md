# IT0049 - Technical Formative Assessment 5 (TFA5)
## From Zero to Four Pages, Again: Your First Laravel Application

**Course:** IT0049 (Web System Technologies)  
**Program:** College of Computer Studies and Multimedia Arts  
**Assessment:** Technical Formative Assessment 5  
**Topic:** Rebuilding the POS Application in Laravel with MVC Architecture  
**Author:** RJCodeson  

---

## 1. Project Overview

This project is a replication and architectural upgrade of the Point of Sale (POS) application originally introduced in TFA1. It demonstrates the fundamental principles of web frameworks and the **Model-View-Controller (MVC)** architecture using **Laravel 12 / PHP 8.2+**.

### Key Deliverables:
- **Four Distinct Pages:**
  1. Landing Page (`/` &rarr; `PageController@home`)
  2. About Page (`/about` &rarr; `PageController@about`)
  3. Customer Accounts Directory (`/customers` &rarr; `CustomerController@index`)
  4. User / Staff Accounts Directory (`/users` &rarr; `UserController@index`)
- **Data Source Handling:** The Customer Accounts and User Accounts pages utilize structured **static PHP arrays** inside their respective controllers as temporary data sources.
- **Blade Templating:** A responsive, shared master layout (`resources/views/layouts/app.blade.php`) with navigation links across all pages and `@foreach` loops rendering tabular data.
- **Database Migrations & Seeders:** Included in `database/` along with a standalone `database_export.sql` file to satisfy submission criteria.
- **Automated Feature Tests:** Pre-configured PHPUnit test suite verifying all 4 routes and status 200 responses.

---

## 2. Route Architecture & MVC Mapping

| Method | URI | Controller Action | View Template | Description |
|---|---|---|---|---|
| `GET` | `/` | `PageController@home` | `resources/views/pages/home.blade.php` | POS Landing Page with system module overviews and navigation |
| `GET` | `/about` | `PageController@about` | `resources/views/pages/about.blade.php` | Project documentation, course ILOs, and Laravel MVC workflow |
| `GET` | `/customers` | `CustomerController@index` | `resources/views/customers/index.blade.php` | Customer directory rendered via `@foreach` from a static PHP array |
| `GET` | `/users` | `UserController@index` | `resources/views/users/index.blade.php` | Staff directory rendered via `@foreach` from a static PHP array |

---

## 3. Data Source Architecture (Static PHP Arrays)

Per the laboratory requirements, `CustomerController` and `UserController` declare sample datasets using `protected static array`:

### Customer Records Sample (`CustomerController`):
- `id`: Customer identifier (`101`, `102`, etc.)
- `full_name`: Customer name
- `email`: Contact email address
- `phone`: Mobile phone number
- `address`: Billing / physical address
- `membership`: Tier classification (`VIP` vs. `Regular`)
- `total_spent`: Transaction history total

### Staff User Records Sample (`UserController`):
- `id`: User account identifier (`1`, `2`, etc.)
- `username`: System handle (e.g., `admin_juan`, `maria_cashier`)
- `full_name`: Staff member's name
- `role`: System privilege (`System Administrator`, `Head Cashier`, `Store Manager`, etc.)
- `email`: Corporate email address
- `status`: Work status (`Active`, `On Duty`)
- `created_at`: Account provisioning timestamp

---

## 4. Local Installation & Setup Guide

### Prerequisites:
- **PHP >= 8.2** (e.g. from XAMPP or PHP standalone)
- **Composer >= 2.0**
- **Git**

### Step-by-Step Setup:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/RJCodeson/naluan-tfa5.git
   cd naluan-tfa5
   ```

2. **Install Composer dependencies:**
   ```bash
   composer install
   ```

3. **Environment configuration:**
   Copy the `.env.example` file to create your `.env`:
   ```bash
   cp .env.example .env
   ```
   Generate the application encryption key:
   ```bash
   php artisan key:generate
   ```

4. **Database setup (Optional/Migration & Seeders):**
   ```bash
   php artisan migrate --seed
   ```
   *Note: An SQL dump is also provided in `database/database_export.sql`.*

5. **Start the local development server:**
   ```bash
   php artisan serve
   ```
   The application will be live at `http://127.0.0.1:8000`.

---

## 5. Running Automated Tests

Run the included PHPUnit feature tests to verify that all routes and static array loops operate cleanly:

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
✓ customers page returns successful response with records
✓ users page returns successful response with records

Tests:  6 passed (25 assertions)
```

---

## 6. Directory Structure Overview

```text
naluan-tfa5/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php
│           ├── PageController.php       # Landing & About routes
│           ├── CustomerController.php   # Static customer array
│           └── UserController.php       # Static staff user array
├── database/
│   ├── database_export.sql              # Raw SQL export for submission
│   ├── migrations/                      # Table definitions (customers, users)
│   └── seeders/                         # Seed data matching static arrays
├── public/
│   └── css/
│       └── style.css                    # Responsive TFA styling
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            # Shared master layout with navigation
│       ├── pages/
│       │   ├── home.blade.php           # Landing page view
│       │   └── about.blade.php          # About page view
│       ├── customers/
│       │   └── index.blade.php          # Customer list (@foreach loop)
│       └── users/
│           └── index.blade.php          # User list (@foreach loop)
├── routes/
│   └── web.php                          # Defined routes for all 4 pages
├── tests/
│   └── Feature/
│       └── PageRoutesTest.php           # Automated test coverage
└── README.md
```

---

## 7. Submission Checklist

- [x] Rebuilt POS application with 4 pages (`/`, `/about`, `/customers`, `/users`)
- [x] Routes registered in `routes/web.php`
- [x] `PageController`, `CustomerController`, and `UserController` implemented
- [x] Static PHP arrays with &ge; 5 records in `CustomerController` and `UserController`
- [x] Blade views using master layout and `@foreach` loops
- [x] Database migration, seeders, and `database_export.sql` provided
- [x] Automated test suite passing (6 tests, 25 assertions)
- [x] Git repository with comprehensive documentation
