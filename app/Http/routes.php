<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', 'FactionGeneratorController@index');
Route::get('/generate', 'FactionGeneratorController@show');

/*function (Request $request) {
    $factions = App\Faction::all()->shuffle();
    $player_count = $request->get('players', 2);
    if($player_count * 2 > $factions->count()) {
        return view('welcome')
            ->with('players', [])
            ->with('player_count', $player_count)
            ->withErrors(['Too many players :(']);
    }
    if($player_count < 2) {
        return view('welcome')
            ->with('players', [])
            ->with('player_count', $player_count)
            ->withErrors(['Too few players :(']);
    }

    $players = [];
    $requires_madness = false;
    $requires_monsters = false;
    $requires_treasure = false;

    // Set up the players array
    for($i = 0; $i < $player_count; $i++) {
        $players[$i] = ['factions' => []];
    }

    // Give a faction to each player
    for($rounds = 0; $rounds < 2; $rounds++) {
        for($i = 0; $i < $player_count; $i++) {
            $faction = $factions->pop();
            $requires_madness |= $faction->requires_madness;
            $requires_monsters |= $faction->requires_monsters;
            $requires_treasure |= $faction->requires_treasure;
            $players[$i]['factions'][] = $faction;
        }
    }
    return view('welcome')
        ->with('players', $players)
        ->with('player_count', count($players))
        ->with('requires_madness', $requires_madness)
        ->with('requires_monsters', $requires_monsters)
        ->with('requires_treasure', $requires_treasure);
});*/
