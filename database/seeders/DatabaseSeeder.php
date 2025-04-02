<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dentista;
use App\Models\Paciente;
use App\Models\ListaTratamientos;
use App\Models\DentistaTratamiento;
use App\Models\Cita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario administrador
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@consultorio.com',
        ]);

        // Dentistas
        $dentistas = [
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'especialidad' => 'Ortodoncista',
                'telefono' => '555-0101',
                'email' => 'juan.perez@consultorio.com',
                'direccion' => 'Calle Principal 123',
                'contrasena' => bcrypt('password123'),
                'es_administrador' => true
            ],
            [
                'nombre' => 'María',
                'apellido' => 'González',
                'especialidad' => 'Endodoncista',
                'telefono' => '555-0102',
                'email' => 'maria.gonzalez@consultorio.com',
                'direccion' => 'Avenida Central 456',
                'contrasena' => bcrypt('password123'),
                'es_administrador' => false
            ],
        ];

        foreach ($dentistas as $dentistaData) {
            Dentista::create($dentistaData);
        }

        // Pacientes
        $pacientes = [
            [
                'nombre' => 'Ana',
                'apellido' => 'López',
                'fecha_nacimiento' => '1990-05-15',
                'telefono' => '555-0201',
                'email' => 'ana.lopez@email.com',
                'direccion' => 'Calle 789'
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Martínez',
                'fecha_nacimiento' => '1985-08-22',
                'telefono' => '555-0202',
                'email' => 'carlos.martinez@email.com',
                'direccion' => 'Avenida 012'
            ],
        ];

        foreach ($pacientes as $pacienteData) {
            Paciente::create($pacienteData);
        }

        // Tratamientos
        $tratamientos = [
            [
                'nombre' => 'Limpieza Dental',
                'descripcion' => 'Limpieza dental profunda',
                'precio' => 800.00
            ],
            [
                'nombre' => 'Extracción',
                'descripcion' => 'Extracción dental simple',
                'precio' => 1000.00
            ],
            [
                'nombre' => 'Brackets',
                'descripcion' => 'Tratamiento de ortodoncia',
                'precio' => 15000.00
            ],
        ];

        foreach ($tratamientos as $tratamientoData) {
            ListaTratamientos::create($tratamientoData);
        }

        // Asignar tratamientos a dentistas
        $dentista1 = Dentista::find(1);
        $dentista2 = Dentista::find(2);
        
        DentistaTratamiento::create(['dentista_id' => $dentista1->id, 'tratamiento_id' => 1]);
        DentistaTratamiento::create(['dentista_id' => $dentista1->id, 'tratamiento_id' => 3]);
        DentistaTratamiento::create(['dentista_id' => $dentista2->id, 'tratamiento_id' => 1]);
        DentistaTratamiento::create(['dentista_id' => $dentista2->id, 'tratamiento_id' => 2]);

        // Citas
        $citas = [
            [
                'paciente_id' => 1,
                'dentista_id' => 1,
                'fecha' => '2025-04-15 10:00:00',
                'motivo' => 'Consulta de ortodoncia',
                'estado' => 'Confirmada'
            ],
            [
                'paciente_id' => 2,
                'dentista_id' => 2,
                'fecha' => '2025-04-16 15:30:00',
                'motivo' => 'Limpieza dental',
                'estado' => 'Pendiente'
            ],
        ];

        foreach ($citas as $citaData) {
            Cita::create($citaData);
        }
    }
}
