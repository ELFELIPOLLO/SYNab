<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Francisco López',
            'Grupo'                 => '5AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-01',
        ]);

        DB::table('alumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Francisco López',
            'Grupo'                 => '5AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-01',
        ]);

        DB::table('alumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Francisco López',
            'Grupo'                 => '5AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-01',
        ]);

    }
}
