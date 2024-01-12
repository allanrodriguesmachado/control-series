<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        return view('series.index')
            ->with('series', Series::all('name'));
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $nameSeries = $request->input('name');
        $series = new Series();
        $series->name = $nameSeries;
        $series->save();
        return redirect('/list');
    }
}
