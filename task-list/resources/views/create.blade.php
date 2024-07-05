@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
    .error_message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')

<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        @error('title')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
        <div>
        <label for="description">Title</label>
        <textarea name="description" id="description">{{old('description')}}</textarea>
                @error('description')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
        <div>
        <label for="long_description">Title</label>
        <textarea name="long_description" id="long_description">{{old('long_description')}}</textarea>
                @error('long_description')
            <p class="error_message">{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Add Task</button>
    </div>
</form>

@endsection