<?php

use App\User;
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
        User::truncate();

        User::create([
            'name' => 'Jamal Alawes',
            'email' => 'jamal@jamal.com',
            'password' => bcrypt('secret'),
            'address' => '833 Homer St. Vancouver, BC',
        ]);

        User::create([
            'name' => 'Mwaka Ambrose',
            'email' => 'mwkams@ambrose.com',
            'password' => bcrypt('secret'),
            'address' => 'Kamapala, UG',
        ]);
    }
}
