<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        return Product::select('title',)->distinct()->get();
    }
}
