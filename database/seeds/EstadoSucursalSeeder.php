<?php

use App\Branch;
use App\State;
use Illuminate\Database\Seeder;

class EstadoSucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new State();
        $estado->name = 'Chiapas';
        $estado->save();

        $estado = new State();
        $estado->name = 'Tamaulipas';
        $estado->save();

        $estado = new State();
        $estado->name = 'Michoacán';
        $estado->save();

        /* sucursales */
        $sucursal = new Branch();
        $sucursal->state_id = 1;
        $sucursal->sucursal = 'Gobierno';
        $sucursal->mounth_rate = 3.30;
        $sucursal->save();

        $sucursal = new Branch();
        $sucursal->state_id = 1;
        $sucursal->sucursal = 'Salud';
        $sucursal->mounth_rate = 3.50;
        $sucursal->save();

        $sucursal = new Branch();
        $sucursal->state_id = 1;
        $sucursal->sucursal = 'Policias';
        $sucursal->mounth_rate = 3.80;
        $sucursal->save();


        $sucursal = new Branch();
        $sucursal->state_id = 2;
        $sucursal->sucursal = 'Gobierno';
        $sucursal->mounth_rate = 3.30;
        $sucursal->save();

        $sucursal = new Branch();
        $sucursal->state_id = 2;
        $sucursal->sucursal = 'Salud';
        $sucursal->mounth_rate = 3.50;
        $sucursal->save();

        $sucursal = new Branch();
        $sucursal->state_id = 2;
        $sucursal->sucursal = 'Policias';
        $sucursal->mounth_rate = 3.80;
        $sucursal->save();

        $sucursal = new Branch();
        $sucursal->state_id = 3;
        $sucursal->sucursal = 'Morelia';
        $sucursal->mounth_rate = 3.30;
        $sucursal->save();

    }
}
