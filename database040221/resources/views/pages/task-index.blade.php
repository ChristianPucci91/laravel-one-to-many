@extends('layouts.main-layout')

@section('content')

  <h1>Tasks:</h1>

  <a href="{{ route('task-create')}}">CREATE NEW TASK</a>

  @foreach ($tasks as $task)

    <li>
      
      {{ $task -> title}}
      ({{ $task -> employee -> name}})
      <a href="{{ route('task-edit', $task -> id )}}">EDIT</a>

    </li>

  @endforeach

@endsection
