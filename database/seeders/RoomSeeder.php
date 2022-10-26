<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new Room();
        $room->number = '1001';
        $room->capacity = 2;
        $room->type = "Normal";
        $room->save();

        $room = new Room();
        $room->number = '1002';
        $room->capacity = 2;
        $room->type = "Normal";
        $room->save();

        $room = new Room();
        $room->number = '1003';
        $room->capacity = 2;
        $room->type = "Premium";
        $room->save();
    }
}
