<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Cassandra\Timestamp;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(Serie $series): View
    {
        return view('series.index')->with('series', $series::all());
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSeries = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSeries;
        $serie->save();
        return redirect('/series');
    }
}
