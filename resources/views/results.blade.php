@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('forms.generate')
        </div>
    </div>
    <hr>
    @if(count($results['additional_decks']) > 0)
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="alert alert-info">
                    You will definitely be using the following additional decks:
                    <ul>
                        @foreach($results['additional_decks'] as $deck)
                            <li>{{ $deck }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        @foreach($results['players'] as $i => $player)
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Player {{ $i + 1 }}
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            @foreach($player['factions'] as $faction)
                                <li>{{ $faction['label'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection