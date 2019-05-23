<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class CotizadorController extends Controller
{
    /*TODO: tabla de ejemplo para el calculo

             monto       plazo   tasa mensual    interes                      iva                        total
            7000        2       3.30            monto*tasamensual/2*plazo    interes*0.16 
                                                23.100
                                                231

            rmonto =monto/plazo                 interes/plazo                riva = interes*0.16        rmonto+riva

            3500                                11,550                       1848                       3,633.98
                                                11550    
    */

    /*TODO: estado
    Estados:
Chiapas
3 sucursales en Tuxtla, Tapachula y Palenque.
Tamaulipas
3 sucursales en Cd. Victoria, Tampico y Reynosa.
Michoacán
2 sucursales Morelia y Zamora

     * */
    public function get_dependency($state_id)
    {
        return response()->json(Branch::branch_state($state_id));
    }
}
