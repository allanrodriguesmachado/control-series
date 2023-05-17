<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request): RedirectResponse
    {
        $series = Series::create($request->all());
        for ($i = 1; $i < $request->seasonQty; $i++) {
            $season = $series->seasons()->create([
                'number' => $i
            ]);

            for ($j = 1; $j < $request->episodesPerSeason; $j++) {
                $episode = $series->episodes()->create([
                    'number' => $j
                ]);
            }
        }
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' adicionada com sucesso");
    }


    public function edit(Series $series): View
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request): RedirectResponse
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' alterada com sucesso");
    }

    public function destroy(Series $series): RedirectResponse
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }
}
