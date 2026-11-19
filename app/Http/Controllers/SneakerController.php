<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SneakerController extends Controller
{
    public function index()
    {
        $sneakers = Sneaker::all();

        return view('sneakers.index', compact('sneakers'));
    }

    public function show($id)
    {
        $sneaker = Sneaker::findOrFail($id);

        return view('sneakers.show', compact('sneaker'));
    }
}
