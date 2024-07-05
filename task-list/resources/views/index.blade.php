@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    @forelse ($tasks as $task)
    <div>
        <a href="{{route('tasks.show',['task'=>$task->id])}}">{{$task->title}}</a>
    </div>
    @empty
    <div>There are no Tasks!</div>  
    @endforelse
@endsection