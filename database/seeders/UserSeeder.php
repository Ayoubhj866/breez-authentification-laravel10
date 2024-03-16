<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "name" => 'Admin',
                    "email" => 'admin@gmail.com',
                    "password" => bcrypt("0000"),
                    "role" => 'admin',
                ],
                [
                    "name" => 'Vendor',
                    "email" => 'vendor@gmail.com',
                    "password" => bcrypt("0000"),
                    "role" => 'vendor',
                ],
                [
                    "name" => 'Costumer',
                    "email" => 'costumer@gmail.com',
                    "password" => bcrypt("0000"),
                    "role" => 'costumer',
                ],
            ]
        );
    }
}
