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
            ['firstname' => 'Mtuyrte', 'lastname' => 'seattle', 'email' => 'gdagkmncd@tkho.com', 'number' => '13323184', 'address' => 'Kungu'],
            ['firstname' => 'bvrvrw', 'lastname' => 'toodd', 'email' => 'tbomgndr@gtgg.com', 'number' => '46133', 'address' => 'Gulu'],
            ['firstname' => 'Burwgfw', 'lastname' => 'poodle', 'email' => 'ttestr@toohgle.com', 'number' => '8923523', 'address' => 'Ntinda'],
            ['firstname' => 'Maeqrwce', 'lastname' => 'goog', 'email' => 'pafnbfd@taboo.com', 'number' => '126634234', 'address' => 'Kungu'],
            ['firstname' => 'bvrvgrsfrw', 'lastname' => 'tmoof', 'email' => 'tbsaddr@gteteog.com', 'number' => '452133', 'address' => 'Gulu'],
            ['firstname' => 'Burwfsggfw', 'lastname' => 'pgyud', 'email' => 'ttvrr@toople.com', 'number' => '894783', 'address' => 'Ntinda'],
            ['firstname' => 'Mavrwdarfrce', 'lastname' => 'sead', 'email' => 'prwbvcebd@tatedfo.com', 'number' => '9834234', 'address' => 'Kungu'],
            ['firstname' => 'brgw', 'lastname' => 'toofgdd', 'email' => 'tbomgny@yhgr.com', 'number' => '45348633', 'address' => 'Gulu'],
            ['firstname' => 'Burgvsffw', 'lastname' => 'poodle', 'email' => 'tthtr@toogre.com', 'number' => '8943', 'address' => 'Ntinda'],
            ['firstname' => 'Mawrffwce', 'lastname' => 'seattle', 'email' => 'psdyfjebd@tah.com', 'number' => '16534234', 'address' => 'Kungu'],
            ['firstname' => 'brwtfw', 'lastname' => 'toodd', 'email' => 'tjundr@hfog.com', 'number' => '453421353', 'address' => 'Gulu'],
            ['firstname' => 'Burfrw', 'lastname' => 'poodle', 'email' => 'jufdr@toolhe.com', 'number' => '8942243', 'address' => 'Ntinda'],
            ['firstname' => 'Magrwfe', 'lastname' => 'seattle', 'email' => 'hytrfd@thyeo.com', 'number' => '1284634', 'address' => 'Kungu'],
            ['firstname' => 'bvrvrwfwfsdf', 'lastname' => 'toodd', 'email' => 'wr@goet.com', 'number' => '4534783', 'address' => 'Gulu'],
            ['firstname' => 'Bfghygfw', 'lastname' => 'poodle', 'email' => 'hhtr@toothve.com', 'number' => '899763', 'address' => 'Ntinda'],
            ['firstname' => 'Mhyte', 'lastname' => 'seattle', 'email' => 'pahyebd@ttevro.com', 'number' => '13534', 'address' => 'Kungu'],
            ['firstname' => 'bvh4tfrw', 'lastname' => 'toodd', 'email' => 'tbokujyr@getgg.com', 'number' => '903', 'address' => 'Gulu'],
            ['firstname' => 'Burwgfw', 'lastname' => 'poodle', 'email' => 'ttlpef@tohfe.com', 'number' => '957', 'address' => 'Ntinda'],
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
