@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>TRY! Task!</h1>
            {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection