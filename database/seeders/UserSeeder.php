<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory as Faker;

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
        
        $user = User::create([
            'name' => 'Fahrul Ihsan',
            'email' => 'fahrul@example.com',
            'password' => 'fahrul123',
            'role' => 'admin',
        ]);
    }
}
