<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Anakin';
        $user->lastname = 'Skywalker';
        $user->email = 'anakin@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new User();
        $user->name = 'Malcolm';
        $user->lastname = 'Wilkerson';
        $user->email = 'malcolm@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new User();
        $user->name = 'Daniel';
        $user->lastname = 'Sepulveda';
        $user->email = 'daniel@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
