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
        User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'is_Admin' => '0',
            'phone' => '0123',
        ]);
    }
}
