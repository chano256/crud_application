<?php

use Illuminate\Database\Seeder;
use App\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            ['date' => '02/03/02', 'product' => 'tea', 'customer' => 'modd'],
            ['date' => '10/10/10', 'product' => 'maize', 'customer' => 'tollow'],
            ['date' => '01/01/01', 'product' => 'frog', 'customer' => 'caller'],
            ['date' => '10/10/10', 'product' => 'rice', 'customer' => 'main'],
            ['date' => '01/01/01', 'product' => 'millet', 'customer' => 'picker'],
            ['date' => '10/10/10', 'product' => 'tails', 'customer' => 'num'],
            ['date' => '01/01/01', 'product' => 'fedb', 'customer' => 'nun'],
        ];

        foreach($invoices as $invoice) {
            Invoice::create(array(
                'date' => $invoice['date'], 
                'product' => $invoice['product'],
                'customer' => $invoice['customer'],
            ));
        }
    }
}
