<form class="pure-form" method="get" action="/generate">

    <label for="players">How Many Players?</label>
    <input id="players" name="players" type="number" min="0" placeholder="2-4 is recommended.">
    <p>You can have multiple concurrent games! Just enter in as many players as you need.</p>

    @foreach($sets as $set)
        <label class="pure-checkbox" for="set-{{ $set->id }}">
            <input id="set-{{ $set->id }}" type="checkbox" name="sets[]" value="{{ $set->id }}" checked="checked">
            {{ $set->name }}
        </label>
    @endforeach
    <button class="pure-button">Get Ready To Smash!</button>
</form>