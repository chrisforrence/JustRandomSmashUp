<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Cache;
use App\FactionGenerator;
use App\Game;
use App\Set;
use App\Http\Requests;
use App\Http\Requests\FactionGenerateRequest;
use Illuminate\Http\Request;

class FactionGeneratorController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome')->with('sets', Cache::remember('sets', 120, function() { 
            return Set::where('released_on', '<=', Carbon::today())->get();
        }));
    }

    public function show(FactionGenerateRequest $request)
    {
        $game = Game::create(['created_at' => Carbon::now()])->generate(
            $request->get('players'),
            $request->get('sets')
        );
        $game = Game::with('players', 'players.factions')->find($game->id);

        return response()->json($game);

    }
}
