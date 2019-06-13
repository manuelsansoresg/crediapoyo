<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegendCat extends Model
{
    protected $table = 'legend_cat';
    protected $fillable = ['content'];
}
