<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\WineReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WineController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('wines', [
            'wines' => Wine::all()->load('wineType')
        ]);
    }

    public function show($id)
    {
        return view('wine', [
            'wine' => Wine::find($id)
        ]);
    }
}
