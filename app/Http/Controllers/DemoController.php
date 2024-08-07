<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        return Product::whereBetween('price', [2000, 5000])->get();
        // return Product::whereNotBetween('price', [2000, 5000])->get();
    }
}
