<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Invoice;

class InvoiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_invoice_page_loads() 
    {
        $response = $this->get('/invoices');

        $response->assertStatus(200);
    }
    
    public function test_invoice_is_created()
    { 
        $invoice = Invoice::create([
            'date' => '09/10/10',
            'product' => 'salt',
            'customer' => 'mailer',
        ]);

        $invoice->assertStatus(200);
    }
}
