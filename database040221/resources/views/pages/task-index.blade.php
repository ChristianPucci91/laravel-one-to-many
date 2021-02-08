@extends('layouts.main-layout')

@section('content')

  <h1>Tasks:</h1>

  <h3>
   <a href="{{ route('task-create')}}">Create new Task</a>
  </h3>

  @foreach ($tasks as $task)

   <ul>
      <div class = "box">

        {{ $task -> title}}
        ({{ $task -> employee -> name}})
        <a href="{{ route('task-edit', $task -> id )}}">EDIT</a>

      </div>
   </ul>
  @endforeach

@endsection
