@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        @include('forms.generate')
    </div>
</div>
@endsection
