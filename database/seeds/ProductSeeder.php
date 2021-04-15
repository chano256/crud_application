<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'milk', 'price' => '299', 'description' => 'tall', 'service' => '0'],
            ['name' => 'cod', 'price' => '1293', 'description' => 'long', 'service' => '1'],
            ['name' => 'fish', 'price' => '1393', 'description' => 'medium', 'service' => '1'],
            ['name' => 'milks', 'price' => '299', 'description' => 'tall', 'service' => '0'],
            ['name' => 'cods', 'price' => '1293', 'description' => 'long', 'service' => '1'],
            ['name' => 'fishs', 'price' => '1393', 'description' => 'medium', 'service' => '1'],
            ['name' => 'milker', 'price' => '299', 'description' => 'tall', 'service' => '0'],
            ['name' => 'coder', 'price' => '1293', 'description' => 'long', 'service' => '1'],
            ['name' => 'fisher', 'price' => '1393', 'description' => 'medium', 'service' => '1'],
        ];

        foreach($products as $product) {
            Product::create(array(
                'name' => $product['name'], 
                'price' => $product['price'],
                'description' => $product['description'],
                'service' => $product['service'],
            ));
        }
    }
}
