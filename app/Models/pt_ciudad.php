<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pt_ciudad extends Model
{
    use HasFactory;

    protected $fillable = [
        'CIU_NAME',
        'pt_provincia_id'
    ];
}
