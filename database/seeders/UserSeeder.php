<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            [
                'username' => 'teacher',
                'password' => bcrypt('P@ssw0rd'),
                'email' => 'teacher@gmail.com',
                'first_name' => 'Lecturer',
                'last_name' => 'Test',
                'level' => 'lecturer',
            ],
            [
                'username' => 'admin',
                'password' => bcrypt('P@ssw0rd'),
                'email' => 'admin@gmail.com',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'level' => 'administrator'
            ]
        ];
        User::insert($data);
    }
}
