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
<div class="text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{$tasks->previousPageUrl()}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @for ($i = 1; $i <= $tasks->lastPage(); $i++)
                <!-- <li><a href="{{$tasks->url($i)}}">{{$i}}</a></li> -->
                <!-- fix pagination based on search keyword also -->
                <li class="page-item"><a class="page-link" href="{{$tasks->appends(['search' => request()->search])->url($i)}}">{{$i}}</a></li>
                @endfor
                <li class="page-item">
                    <a class="page-link" href="{{$tasks->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </nav>
</div>


@endsection
