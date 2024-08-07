<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        return Product::skip(10)
            ->take(2)
            ->get();
    }
}
