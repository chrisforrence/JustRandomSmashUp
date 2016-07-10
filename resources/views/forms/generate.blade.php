<form class="form" method="get" action="/generate">
    <div class="form-group">
        <label for="players">How many players?</label>
        <input type="number" min="2" name="players" value="2">
    </div>

    <div class="form-group">
        <label>Which expansions do you own?</label>
        <div class="clearfix"></div>
            @foreach($sets as $set)
                <div style="float: left; padding-right: 2em">
                    <label><input type="checkbox" name="sets[]" value="{{ $set->id }}" checked="checked">
                    {{ $set->name }}</label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Get Ready To Smash!</button>
    </div>
</form>