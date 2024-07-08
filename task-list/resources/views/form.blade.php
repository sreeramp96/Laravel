@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
<style>
    .error_message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')

<form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="POST">
    @csrf
    isset($task){
        @method('PUT')
    }
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$task->title ?? old('title')}}">
        @error('title')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
        <div>
        <label for="description">Title</label>
        <textarea name="description" id="description">{{$task->description ?? old('description')}}</textarea>
                @error('description')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
        <div>
        <label for="long_description">Title</label>
        <textarea name="long_description" id="long_description">{{$task->long_description ?? old('long_description')}}</textarea>
                @error('long_description')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">@isset($task)
            Update Task
            @else
            Add Task
        @endisset</button>
    </div>
</form>

@endsection