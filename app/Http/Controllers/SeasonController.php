<?php

namespace App\Http\Controllers;

use App\Models\Season;

class SeasonController extends Controller
{
    public function index(int $series): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $seasons = Season::query()
            ->with('episodes')
            ->where('series_id', $series)
            ->get();

        return view('seasons.index')->with('seasons', $seasons);
    }
}
