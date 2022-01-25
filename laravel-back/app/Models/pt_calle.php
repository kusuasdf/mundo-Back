<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pt_calle extends Model
{
    use HasFactory;

    protected $fillable = [
        'CAL_NAME',
        'pt_ciudad_id'
    ];
}
