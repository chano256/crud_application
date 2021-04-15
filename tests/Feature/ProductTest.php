<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_product_page_loads() 
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
    
    public function test_a_product_is_created()
    { 
        $product = Product::create([
            'name' => 'Fishes',
            'price' => '5000',
            'description' => 'Very big',
            'service' => '0',
        ]);

        $product->assertStatus(200);
    }
}
