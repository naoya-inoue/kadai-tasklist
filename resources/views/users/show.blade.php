@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500)}}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presntation" class="{{ Request::is('users/' .$user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Tasklist <span class="badge">{{ $count_tasks }}</span></a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">followers</a></li>
            </ul>
            @if (Auth::id() == $user->id)
                {!!Form::open(['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                  <div class="input-group">
                        <span class="input-group-addon">Subject</span>
                            {!! Form::text('subject', old('subject'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Status</span>
                            {!! Form::text('status', old('status'), ['class' => 'form-control',]) !!}
                    </div>
                </div>
                            {!! Form::submit('memo',['class' => 'btn btn-primary btn-block']) !!}
                
            {!! Form::close() !!}
        @endif
        @if (count($tasks) > 0)
            @include('tasks.tasks', ['tasks' => $tasks])
        @endif
        </div>
    </div>
    
@endsection