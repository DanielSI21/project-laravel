<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();
        $reservation->code = "100001";
        $reservation->nights_reserved = 2;
        $reservation->amount_of_people = 2;
        $reservation->check_in = Carbon::now();
        $reservation->amount = 1000;
        $reservation->room_id = 1;
        $reservation->client_id = 1;
        $reservation->status = "activa";
        $reservation->save();

         $reservation = new Reservation();
        $reservation->code = "100002";
        $reservation->nights_reserved = 1;
        $reservation->amount_of_people = 1;
        $reservation->check_in = Carbon::now();
        $reservation->amount = 500;
        $reservation->room_id = 2;
        $reservation->client_id = 2;
        $reservation->status = "activa";
        $reservation->save();
    }
}
