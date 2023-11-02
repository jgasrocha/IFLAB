<?php

namespace Database\Seeders;

use App\Models\Laboratorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratorio::create([
            'name' => 'Lab Informatica',
        ]);
        Laboratorio::create([
            'name' => 'Lab Programação',
        ]);
        Laboratorio::create([
            'name' => 'Lab Agroindustria',
        ]);
        Laboratorio::create([
            'name' => 'Lab Geoprocessamento',
        ]);
        Laboratorio::create([
            'name' => 'Lab Quimica',
        ]);
        Laboratorio::create([
            'name' => 'Lab Artes',
        ]);
    }
}
