<?php

namespace App\Http\Controllers;

use App\FactionGenerator;
use App\Http\Requests\FactionGenerateRequest;
use App\Set;
use Illuminate\Http\Request;

use App\Http\Requests;

class FactionGeneratorController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome')->with('sets', Set::all());
    }

    public function show(FactionGenerateRequest $request)
    {
        $results = (new FactionGenerator)
            ->withPlayers($request->get('players'))
            ->withSets($request->get('sets'))
            ->generate();
        return view('results')
            ->with('results', $results)
            ->with('sets', Set::all());
    }
}
