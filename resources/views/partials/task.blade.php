<li>
    <div class="task">
        {{ $task->title }}
    </div>
    <div class="action">
        <a href="{{ route('getEdit', ['id' => $task->id]) }}"><i class="fa fa-edit"></i></a>
    </div>
    <div class="action">
        <a href="{{ route('delete', ['id' => $task->id]) }}"><i class="fa fa-trash-alt"></i></a>
    </div>
</li>
