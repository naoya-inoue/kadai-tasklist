<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <img class="media-object img-rounded" src="{{ Gravatar::src($user->rmail, 50) }}" alt="">
    </li>
    <div class="media-body">
        <div>
            {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
        </div>
        <div>
            <p>id:{!! ($task->id) !!} Subject:[{!! ($task->subject) !!}] Status:[ {!! ($task->status) !!} ]</p>
        </div>
        <div>
            @if (Auth::id() == $task->user_id)
                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endforeach
</ul>
{!! $tasks->render() !!}