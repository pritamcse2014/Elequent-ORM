<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        // return Product::sum('price');
        // return Product::avg('price');
        return Product::count('price');
        // return Product::max('price');
        // return Product::min('price');
    }
}
