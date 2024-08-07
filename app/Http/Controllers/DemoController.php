<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        // return Product::whereDate('updated_at', '2024-08-03')->get();
        // return Product::whereMonth('updated_at', '08')->get();
        // return Product::whereDay('updated_at', '03')->get();
        // return Product::whereYear('updated_at', '2024')->get();
        // return Product::whereTime('created_at', '20:08:12')->get();
        // return Product::whereTime('updated_at', '17:03:23')->get();
        return Product::whereTime('created_at', '>', 'updated_at')->get();
        // return Product::whereTime('created_at', '<', 'updated_at')->get();
    }
}
