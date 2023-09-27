<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Identification_Type;
class Identification_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identification_Type::create([
            'id'=>1,
            'name'=>'Cédula'
        ]);
        Identification_Type::create([
            'id'=>2,
            'name'=>'Tarjeta de identidad'
        ]);
        Identification_Type::create([
            'id'=>3,
            'name'=>'Cédula de extranjeria'
        ]);
    }
}
