@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pb-4">Tasks</h1>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if (count($tasks)>0)
                    @foreach ($tasks as $task)
                        <div class="well">
                        <h5>{{$task->title}}</h5>
                        <p>{{$task->body}}</p>
                        </div>
                    @endforeach
                @else
                    <h1>no tasks yet</h1>
                @endif
            </div>
        </div>
    </div>
@endsection