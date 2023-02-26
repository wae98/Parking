<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTypes extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'tariff', ];

    protected $guarded =[];


    public function stays(){
        return $this->belongsTo('App\Models\Stay');
    }
}
