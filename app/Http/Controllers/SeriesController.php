<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'You'
        ];

        return view('series.index')->with('series', $series);
    }

    public function create(Request $request)
    {
        return \view('series.create');
    }
}
