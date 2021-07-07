@extends('layouts.app')

@section('content')
    @include('partials.error')

    <form action="{{ route('edit') }}" method="post">
        @csrf
        <div id="myDIV" class="header">
            <input type="hidden" name="id" value="{{ $task->id }}">
            <input type="text" name="taskTitle" value="{{ $task->title }}">
            <button type="submit" class="addBtn">Submit</button>
        </div>
    </form>
@endsection
