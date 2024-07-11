@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
<nav class="mb-4">
    <a href="{{route('tasks.create')}}" class="link">
        Add Task</a>
</nav>

@forelse ($tasks as $task)
<div>
    <a href="{{route('tasks.show',['task'=>$task->id])}}" @@class('p-4', 'font-bold' )>
        {{$task->title}}
    </a>
</div>
@empty
<div>There are no Tasks!</div>
@endforelse

@if ($tasks->count())
<nav class="mt-4">
    {{$tasks->links()}}
</nav>
@endif
@endsection