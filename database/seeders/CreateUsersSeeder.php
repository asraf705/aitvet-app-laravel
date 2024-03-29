<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'status'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Subadmin User',
               'email'=>'subadmin@gmail.com',
               'status'=>2,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Student',
               'email'=>'student@gmail.com',
               'status'=>0,
               'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }

}
