<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status_Booking;

class Status_bookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status_Booking::create([
            'id'=>1,
            'name'=>'Pendiente'
        ]);

        Status_Booking::create([
            'id'=>2,
            'name'=>'Aceptado'
        ]);

        Status_Booking::create([
            'id'=>3,
            'name'=>'Rechazado'
        ]);
    }
}
