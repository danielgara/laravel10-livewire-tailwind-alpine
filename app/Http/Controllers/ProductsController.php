<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('products.index')->with('viewData', $viewData);
    }

    public function search(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';

        return view('products.search')->with('viewData', $viewData);
    }
}
