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
            ['date' => '02/03/02', 'product' => 'tea', 'customer' => 'brian'],
            ['date' => '10/10/10', 'product' => 'maize', 'customer' => 'moses'],
            ['date' => '01/01/01', 'product' => 'frog', 'customer' => 'toller'],
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
