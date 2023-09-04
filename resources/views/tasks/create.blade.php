<!-- parents to layout.blade.php -->
@extends('tasks.layout')

<!-- title -->
@section('title')
Tasks
@endsection

<!-- content -->
@section('content')

<div class="task-container">
    <h2>Create a New Task List</h2>
    <div class="form-container">
        <!-- create container for input data -->
        <div class="input-container">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title">
        </div>
        <!-- for description -->
        <div class="input-container">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <!-- for user -->

        <div class="input-container">
            <label for="description">PIC</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>


        <!-- input type file for upload an images for tasks -->
        <div class="input-container">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <!-- button submit -->
        <div class="input-container area-center">
            <button type="submit">Create</button>
        </div>

    </div>
</div>


@endsection
