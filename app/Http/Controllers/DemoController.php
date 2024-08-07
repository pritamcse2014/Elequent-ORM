<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        return Product::where('price', '=', '2000')->get();
        // return Product::where('price', '>', '2000')->get();
        // return Product::where('price', '<', '2000')->get();
        // return Product::where('price', '!=', '2000')->get();
        // return Product::where('title', 'LIKE', '%CAR%')->get();
        // return Product::where('title', 'NOT LIKE', '%CAR%')->get();
    }
}
