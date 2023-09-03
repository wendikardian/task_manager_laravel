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
            @foreach($tasks as $task)
            <div class="task-item">
                <a href="/tasks/{{$task->id}}">
                    {{$task->title}}
                </a>
            </div>
            @endforeach
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
