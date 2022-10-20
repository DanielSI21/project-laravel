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
        $user->name = 'Benito';
        $user->lastname = 'Juarez';
        $user->email = 'benito@gmail.com';
        $user->password = 'secret';
        $user->save();

        $user = new User();
        $user->name = 'Venustiano';
        $user->lastname = 'Carranza';
        $user->email = 'venustiano@gmail.com';
        $user->password = 'secret';
        $user->save();

        $user = new User();
        $user->name = 'Daniel';
        $user->lastname = 'Sepulveda';
        $user->email = 'daniel@gmail.com';
        $user->password = 'secret';
        $user->save();
    }
}
