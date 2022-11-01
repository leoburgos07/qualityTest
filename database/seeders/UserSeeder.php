<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Leonardo',
            'email' => 'leo@gmail.com',
            'password' => '12345678'
        ]);
        User::create([
            'name' => 'Leonardo Hdez',
            'email' => 'le23o@gmail.com',
            'password' => '12345678'
        ]);
        User::create([
            'name' => 'Leonardo Burgos',
            'email' => 'leo534@gmail.com',
            'password' => '12345678'
        ]);
    }
}
