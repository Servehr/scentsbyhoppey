<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facade\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'firstname' => 'Dumar',
                'surname' => 'Wright',
                'phone' => '08097924718',
                'email' => 'servertstng@gmail.com',
                'status' => 'active',
                'role' => 'admin',
                'password' => Hash::make('admin12345'),
            ],
            [
                'firstname' => 'Chris',
                'surname' => 'Nathaniel',
                'phone' => '07021348432',
                'email' => 'nathan8432@gmail.com',
                'status' => 'active',
                'role' => 'customer',
                'password' => Hash::make('customer12345'),
            ]
        ])
    }
}
