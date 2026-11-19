<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('brands.index', compact('brands'));
    }

    public function show(Brand $brand)
    {
        return view('brands.show', compact('brand'));
    }
}