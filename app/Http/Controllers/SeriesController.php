<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        Serie::create($request->all());

        return to_route('series.index');
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with(
            'mensagem.sucesso', "Série '{$series->nome}' Atualizada com sucesso"
        );
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        return to_route('series.index')->with(
            'mensagem.sucesso', "Série '{$series->nome}' removida com sucesso"
        );
    }
}
