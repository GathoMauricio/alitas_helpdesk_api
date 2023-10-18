<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'active' => 1,
            'name' => 'Gatho',
            'middle_name' => 'Soriano',
            'email' => 'mauricio2769@gmail.com',
            'username' => 'mauricio2769@gmail.com',
            'password' => bcrypt('Hannibal2769'),
            'user_rol_id' => 1,

        ]);
    }
}
