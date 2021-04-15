<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            ['firstname' => 'Mavrwce', 'lastname' => 'seattle', 'email' => 'paflfjebd@taboo.com', 'number' => '124534234', 'address' => 'Kungu'],
            ['firstname' => 'bvrvrw', 'lastname' => 'toodd', 'email' => 'tbomgndr@goog.com', 'number' => '45342133', 'address' => 'Gulu'],
            ['firstname' => 'Burwgfw', 'lastname' => 'poodle', 'email' => 'ttestr@toople.com', 'number' => '8942623', 'address' => 'Ntinda'],
        ];

        foreach($customers as $customer) {
            Customer::create(array(
                'firstname' => $customer['firstname'], 
                'lastname' => $customer['lastname'],
                'email' => $customer['email'],
                'number' => $customer['number'],
                'address' => $customer['address'],
            ));
        }
    }
}
