<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        return view('series.index')
            ->with('series', DB::select('SELECT name FROM series'));
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        DB::insert('INSERT INTO series (name) VALUES (?)', [$request->input('name')]);
        return view('series.index');
    }
}
