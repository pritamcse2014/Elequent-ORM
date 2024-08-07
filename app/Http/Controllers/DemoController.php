<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        // return Brand::latest()->first();
        return Brand::oldest()->first();
    }
}
