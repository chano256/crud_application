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
            ['firstname' => 'Mtuyrte', 'lastname' => 'seattle', 'email' => 'goply@tymllo.com', 'number' => '778969543', 'address' => 'Kungu'],
            ['firstname' => 'bvrvrw', 'lastname' => 'toodd', 'email' => 'tbomdr@gtgg.com', 'number' => '78263567', 'address' => 'Gulu'],
            ['firstname' => 'Burwgfw', 'lastname' => 'poodle', 'email' => 'ttestr@toohgle.com', 'number' => '893474236', 'address' => 'Ntinda'],
            ['firstname' => 'Maeqrwce', 'lastname' => 'goog', 'email' => 'pafnbfd@taboo.com', 'number' => '98256109', 'address' => 'Kungu'],
            ['firstname' => 'bvrvgrsfrw', 'lastname' => 'tmoof', 'email' => 'tbsaddr@gteteog.com', 'number' => '8286239', 'address' => 'Gulu'],
            ['firstname' => 'Burwfsggfw', 'lastname' => 'pgyud', 'email' => 'ttvrr@toople.com', 'number' => '88932742', 'address' => 'Ntinda'],
            ['firstname' => 'Mavrwdarfrce', 'lastname' => 'sead', 'email' => 'prwbvcebd@tatedfo.com', 'number' => '98653427', 'address' => 'Kungu'],
            ['firstname' => 'brgw', 'lastname' => 'toofgdd', 'email' => 'tbomgny@yhgr.com', 'number' => '533', 'address' => 'Gulu'],
            ['firstname' => 'Burgvsffw', 'lastname' => 'poodle', 'email' => 'tthtr@toogre.com', 'number' => '6454', 'address' => 'Ntinda'],
            ['firstname' => 'Mawrffwce', 'lastname' => 'seattle', 'email' => 'psdyfjebd@tah.com', 'number' => '466453', 'address' => 'Kungu'],
            ['firstname' => 'brwtfw', 'lastname' => 'toodd', 'email' => 'tjundr@hfog.com', 'number' => '45342523', 'address' => 'Gulu'],
            ['firstname' => 'Burfrw', 'lastname' => 'poodle', 'email' => 'jufdr@toolhe.com', 'number' => '89423301', 'address' => 'Ntinda'],
            ['firstname' => 'Magrwfe', 'lastname' => 'seattle', 'email' => 'hytrfd@thyeo.com', 'number' => '12632014', 'address' => 'Kungu'],
            ['firstname' => 'bvrvrwfwfsdf', 'lastname' => 'toodd', 'email' => 'wr@goet.com', 'number' => '45345783', 'address' => 'Gulu'],
            ['firstname' => 'Bfghygfw', 'lastname' => 'poodle', 'email' => 'hhtr@toothve.com', 'number' => '89469763', 'address' => 'Ntinda'],
            ['firstname' => 'Mhyte', 'lastname' => 'seattle', 'email' => 'pahyebd@ttevro.com', 'number' => '13565434', 'address' => 'Kungu'],
            ['firstname' => 'bvh4tfrw', 'lastname' => 'toodd', 'email' => 'tbokujyr@getgg.com', 'number' => '90652893', 'address' => 'Gulu'],
            ['firstname' => 'Burwgfw', 'lastname' => 'poodle', 'email' => 'ttlpef@tohfe.com', 'number' => '96379257', 'address' => 'Ntinda'],
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
