<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'firstname' => 'testfirstname',
            'lastname' => 'testlastname',
            'email' => 'testemail'
        ]);

        factory(User::class, 50)->create();
    }
}
