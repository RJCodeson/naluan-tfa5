<?php

namespace Tests\Feature;

use Database\Seeders\CustomerSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(CustomerSeeder::class);
        $this->seed(UserSeeder::class);
    }

    /**
     * Test the landing page ('/').
     */
    public function test_landing_page_returns_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Smart POS Management System');
        $response->assertSee('Customer Directory');
        $response->assertSee('System Modules');
    }

    /**
     * Test the about page ('/about').
     */
    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('About the POS Application');
        $response->assertSee('Laravel Database');
    }

    /**
     * Test the customer accounts page ('/customers') with Eloquent model.
     */
    public function test_customers_page_returns_successful_response_with_eloquent_records(): void
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);
        $response->assertSee('Customer Accounts');
        $response->assertSee('Angela Cruz');
        $response->assertSee('Marco Santos');
        $response->assertSee('Beatrice Reyes');
        $response->assertSee('Joshua Garcia');
        $response->assertSee('Nicole Mendoza');
        $response->assertSee('Total Records Displayed');
    }

    /**
     * Test the user accounts page ('/users') with Eloquent model.
     */
    public function test_users_page_returns_successful_response_with_eloquent_records(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertSee('User Accounts');
        $response->assertSee('admin');
        $response->assertSee('admin01');
        $response->assertSee('manager01');
        $response->assertSee('cashier01');
        $response->assertSee('cashier02');
        $response->assertSee('staff01');
        $response->assertSee('Total Records Displayed');
    }
}
