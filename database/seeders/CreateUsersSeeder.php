<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [
                'name' => 'Manager',
                'surname' => 'Manager User',
                'typeid' => 'C.C',
                'idnumber' => '12345',
                'email' => 'manager@correo.com',
                'email_verified_at' => now(),
                'type' => 2,
                'password' => bcrypt('123456'),
                'avatar' => 'https://jamday-app-s3.s3.amazonaws.com/avatars/avatar_default.jpeg',
                'external_id' => '',

            ],
            [
                'name' => 'Admin ',
                'surname' => 'Admin User',
                'typeid' => 'C.C',
                'idnumber' => '12345',
                'email' => 'admin@correo.com',
                'email_verified_at' => now(),
                'type' => 1,
                'password' => bcrypt('123456'),
                'avatar' => 'https://jamday-app-s3.s3.amazonaws.com/avatars/avatar_default.jpeg',
                'external_id' => '',
            ],
            [
                'name' => 'User',
                'surname' => 'User User',
                'typeid' => 'C.C',
                'idnumber' => '12345',
                'email' => 'user@correo.com',
                'email_verified_at' => now(),
                'type' => 0,
                'password' => bcrypt('123456'),
                'avatar' => 'https://jamday-app-s3.s3.amazonaws.com/avatars/avatar_default.jpeg',
                'external_id' => '',

            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
