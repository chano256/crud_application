<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker as Fake;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Customer;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //use RefreshDatabase;

    public function test_customer_page_loads() 
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);
    }
    
    public function test_customer_is_created()
    { 
        $customer = Customer::create([
            'firstname' => 'mail',
            'lastname' => 'mailer',
            'email' => 'tmailgune@hun.com',
            'number' => '13481704',
            'description' => 'ewjjk',
        ]);

        $customer->assertStatus(200);
    }
        
}