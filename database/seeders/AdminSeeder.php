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
            'name' => 'Rene',
            'middle_name' => 'Ortuno',
            'email' => 'rene_rotuno@hotmail.com',
            'username' => 'rene_rotuno@hotmail.com',
            'password' => bcrypt('12345678'),
            'user_rol_id' => 1,

        ]);
    }
}
