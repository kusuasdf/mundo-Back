<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calle extends Model
{
    use HasFactory;

    protected $fillable = [
        'CAL_NAME',
        'ciudad_id'
    ];

    public function ciudad()
    {
        return $this->belongsTo(ciudad::class);
    }
}
