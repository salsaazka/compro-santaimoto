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
            'username' => 'Santaimoto Admin', 
            'email' => 'santaimoto@gmail.com', 
            'password' => bcrypt('12345'), 
            'role' => 'admin'
        ]);
    }
}
