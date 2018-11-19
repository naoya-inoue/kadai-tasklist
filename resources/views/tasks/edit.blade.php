@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('subject', '件名：') !!}
        {!! Form::text('subject') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection