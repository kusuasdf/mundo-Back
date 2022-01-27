<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;

    protected $fillable = [
        'CIU_NAME',
        'provincia_id'
    ];

    public function provincia()
    {
        return $this->belongsTo(provincia::class);
    }

    public function calle(){
        return $this->hasMany(calle::class);
    }
}
