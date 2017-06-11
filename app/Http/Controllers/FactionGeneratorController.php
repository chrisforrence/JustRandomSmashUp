<?php

namespace App\Http\Controllers;

use App\FactionGenerator;
use App\Game;
use App\Http\Requests\FactionGenerateRequest;
use App\Set;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class FactionGeneratorController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome')->with('sets', Cache::remember('sets', 120, function() { 
            return Set::where('released_on', '<=', Carbon\Carbon::today())->get();
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
