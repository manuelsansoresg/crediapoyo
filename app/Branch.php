<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    static function branch_state($state_id)
    {
        $state = Branch::select('branches.sucursal as name', 'states.id', 'mounth_rate')->join('states', 'branches.state_id', '=', 'states.id')
                    ->where('state_id', $state_id)
                    ->get();
        return $state;
    }
}
