<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
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
        $response->assertSee('Laravel MVC Flow');
    }

    /**
     * Test the customer accounts page ('/customers') with static array loop.
     */
    public function test_customers_page_returns_successful_response_with_records(): void
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);
        $response->assertSee('Customer Accounts');
        $response->assertSee('Juan Dela Cruz');
        $response->assertSee('Maria Clara Santos');
        $response->assertSee('Antonio Luna');
        $response->assertSee('Gabriela Silang');
        $response->assertSee('Jose Rizal');
        $response->assertSee('Total Records Displayed');
    }

    /**
     * Test the user accounts page ('/users') with static array loop.
     */
    public function test_users_page_returns_successful_response_with_records(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertSee('User Accounts');
        $response->assertSee('admin_juan');
        $response->assertSee('maria_cashier');
        $response->assertSee('antonio_mgr');
        $response->assertSee('gabriela_inv');
        $response->assertSee('jose_supervisor');
        $response->assertSee('Total Records Displayed');
    }
}
