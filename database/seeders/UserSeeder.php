<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                [
                    'name' => 'user1',
                    'email' => 'user1@gmail.com',
                    'password' => 'user1',
                ],
                [
                    'name' => 'user2',
                    'email' => 'user2@gmail.com',
                    'password' => 'user2',
                ],
                [
                    'name' => 'user3',
                    'email' => 'user3@gmail.com',
                    'password' => 'user3',
                ],
            ]
        );
    }
}
