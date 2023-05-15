<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $series = Serie::all();

        return view('series.index')->with('series', $series);
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('series.create');
    }

    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Serie::create($request->all());

       return to_route('series.index');

    }
}
