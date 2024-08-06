<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // use HasFactory;
    // default value
    protected $attributes = [
        'brandName' => 'Default Brand',
        'brandImg' => 'default.jpg',
    ];
}
