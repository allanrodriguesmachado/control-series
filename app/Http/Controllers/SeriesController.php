<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select('SELECT name FROM series');

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $query = sprintf('INSERT INTO series (name) VALUES (%s)', $request->input('name'));

        DB::insert($query);
    }
}
