@extends('layouts.app')

@section('content')

    <h1>新規タスクの登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('subject', '件名:') !!}
        {!! Form::text('subject') !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection