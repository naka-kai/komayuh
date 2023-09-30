<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'komayuh',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
