<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pt_provincia extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'PROV_NAME',
        'pt_region_id'
    ];
}
