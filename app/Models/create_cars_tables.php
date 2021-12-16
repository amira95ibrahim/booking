<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_cars_tables extends Model
{
    use HasFactory;
    protected $fillable=[
            'brand',
            'id',
            'color',
            'description',
            'price',
            'airConditioning',
            'milage',
            'automatic',
            'driver_age',
    ];
}
