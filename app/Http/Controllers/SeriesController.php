<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Lost',
            'You',
        ];

        return view('series.index')->with('series', $series);
    }
}
