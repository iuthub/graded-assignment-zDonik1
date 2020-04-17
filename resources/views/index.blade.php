@extends('layouts.app')

@section('content')
    @include('partials.error')

    <form action="{{ route('add') }}" method="post">
        @csrf
        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <input type="text" name="taskTitle" placeholder="Title...">
            <button type="submit" class="addBtn">Add</button>
        </div>
    </form>

    <ul id="myUL">
        @foreach($tasks as $task)
            @include('partials.task')
        @endforeach
    </ul>
@endsection
