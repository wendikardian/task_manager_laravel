<!-- parents to layout.blade.php -->
@extends('tasks.layout')

<!-- title -->
@section('title')
Tasks
@endsection

<!-- content -->
@section('content')
<div class="container">
    <div class="task-container">
        <h2>Tasks</h2>
        <div class="task-list">
            <ul>
                @foreach($tasks as $task)
                <li>
                    <a href="/tasks/{{$task->id}}">
                        {{$task->title}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

<!-- pagination -->
@section('pagination')
<div class="pagination">
    {{$tasks->links()}}


</div>

@endsection
