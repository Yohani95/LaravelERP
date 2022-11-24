<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name'=>'Pendiente']);
        Status::create(['name'=>'Aceptado']);
        Status::create(['name'=>'Cancelado']);
        Status::create(['name'=>'Enviado']);
        Status::create(['name'=>'Error']);
    }
}
