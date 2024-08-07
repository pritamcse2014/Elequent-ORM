<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction() {
        // return Product::simplePaginate(5);
        // return Product::paginate(5);
        return Product::paginate(
            $perPage = 10,
            $columns = ['*'],
            // $columns = ['title', 'price'],
            $pageNumber = 'ItemNumber'
        );
    }
}
