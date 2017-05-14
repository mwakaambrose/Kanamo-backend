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
            'name' => 'Jamal',
            'email' => 'jamal@jamal.com',
            'password' => bcrypt('secret'),
            'address' => '833 Homer St. Vancouver, BC',
            'business_name' => 'Que Pasa'
        ]); 

        User::create([  
            'name' => 'Mwaka',
            'email' => 'mwkams@gmail.com',
            'password' => bcrypt('secret'),
            'address' => 'Kamapala, UG',
            'business_name' => 'Smilling Panda Gulu'
        ]);
    }
}
