@extends('layouts.app')

@section('content')
    @if(count($results['additional_decks']) > 0)
        <div class="ui icon message">
            <i class="info circle icon"></i>
            <div class="content">
                <div class="header">
                    You'll need more decks!
                </div>
                <ul>
                    @foreach($results['additional_decks'] as $deck)
                        <li>{{ $deck }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    @endif
    <div class="row">
        @foreach($results['players'] as $i => $player)
            <div class="ui cards">
                <div class="card">
                    <div class="content">
                        <div class="header">Player {{ $i + 1 }}</div>
                        <div class="description">
                            @foreach($player['factions'] as $faction)
                                <p>{{ $faction['label'] }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection