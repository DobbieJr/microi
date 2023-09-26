<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceVehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_name',
        'vehicle_model',
        'organisation_id'
    ];
    public function org()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }
    // public function org()
    // {
    //     return $this->belongsTo(Organisation::class, 'organisation_id');
    // }
}
