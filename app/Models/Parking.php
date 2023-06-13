<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'county',
        'make',
        'model',
        'vehicle_plate',
        'color',
        'phone_number'
    ];
}
