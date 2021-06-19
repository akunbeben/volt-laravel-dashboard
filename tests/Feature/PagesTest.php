<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_welcome_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_dashboard_page()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_transactions_page()
    {
        $response = $this->get('/dashboard/transactions');

        $response->assertStatus(200);
    }

    public function test_settings_page()
    {
        $response = $this->get('/dashboard/settings');

        $response->assertStatus(200);
    }

    public function test_tables_page()
    {
        $response = $this->get('/dashboard/tables');

        $response->assertStatus(200);
    }

    public function test_authentication_base()
    {
        $response = $this->get('/authentication');

        $response->assertStatus(302);
        $response->assertRedirect('/authentication/sign-in');
    }

    public function test_sign_in_page()
    {
        $response = $this->get('/authentication/sign-in');

        $response->assertStatus(200);
    }

    public function test_sign_up_page()
    {
        $response = $this->get('/authentication/sign-up');

        $response->assertStatus(200);
    }

    public function test_forgot_password_page()
    {
        $response = $this->get('/authentication/forgot-password');

        $response->assertStatus(200);
    }

    public function test_reset_password_page()
    {
        $response = $this->get('/authentication/reset-password');

        $response->assertStatus(200);
    }

    public function test_error_base()
    {
        $response = $this->get('/error');

        $response->assertStatus(302);
        $response->assertRedirect('/error/404');
    }

    public function test_error_404_page()
    {
        $response = $this->get('/error/404');

        $response->assertStatus(200);
    }

    public function test_error_500_page()
    {
        $response = $this->get('/error/500');

        $response->assertStatus(200);
    }
}
