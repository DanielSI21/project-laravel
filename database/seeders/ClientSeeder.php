<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = "Peter Parker";
        $client->phone_number = "6121149550";
        $client->email = "peter@gmail.com";
        $client->save();

        $client = new Client();
        $client->name = "Gwen Stacy";
        $client->phone_number = "6121344538";
        $client->email = "gwen@gmail.com";
        $client->save();

        $client = new Client();
        $client->name = "Harry Osborn";
        $client->phone_number = "6121344538";
        $client->email = "harry@gmail.com";
        $client->save();
    }
}
