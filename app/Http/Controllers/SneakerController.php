<?php

namespace App\Http\Controllers;
use App\Models\Sneaker;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
public function index()
    {
        $sneakers = Sneaker::with('brand')->get();
        return view('sneakers.index', compact('sneakers'));
    }

    public function show(Sneaker $sneaker)
    {
        return view('sneakers.show', compact('sneaker'));
    }
}
