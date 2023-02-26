<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stay extends Model
{
    use HasFactory;

    protected $fillable = ['matricula', 'vehicle_type_id', 'entry_time', 'departure_time', 'acumulated_time'];

    protected $guarded =[];


    public function vehicleTypes(){
        return $this->belongsTo('App\Models\VehicleTypes');
    }
}
