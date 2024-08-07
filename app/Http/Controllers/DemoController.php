<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        return Product::whereIn('price', [2000, 5000])->get();
        // return Product::whereNotIn('price', [2000, 5000])->get();
    }
}
