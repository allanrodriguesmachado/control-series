<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request): RedirectResponse
    {
         $series = Serie::create($request->all());
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' adicionada com sucesso");
    }


    public function edit(Serie $series): View
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request): RedirectResponse
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' alterada com sucesso");
    }

    public function destroy(Serie $series): RedirectResponse
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }
}
