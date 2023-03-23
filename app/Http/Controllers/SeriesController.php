<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = DB::select('SELECT nome FROM series');


        return view('series.index')->with('series', $series);
    }

    public function create(): View
    {
        return \view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSeries = $request->input('nome');

        if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSeries])) {
            return "Ok";
        } else {
            return "Deu ERRO";
        }
    }
}
