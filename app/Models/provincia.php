<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'PROV_NAME',
        'region_id'
    ];

    public function region()
    {
        return $this->belongsTo(region::class);
    }
}
