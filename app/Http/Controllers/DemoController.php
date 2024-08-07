<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        // return Product::orderBy('price', 'desc')->get();
        // return Product::orderBy('price', 'asc')->get();
        return Brand::inRandomOrder()->first();
    }
}
