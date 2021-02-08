@extends('layouts.main-layout')

@section('content')

  <h1>Employee's details & tasks:</h1>

  <ul>
    <div class = "box">

      <p>Name: {{ $employee -> name}}</p>
      <p>Lastname: {{ $employee -> lastname}}</p>
      <p>Date of Birth: {{ $employee -> dateOfBirth}}</p>

      <p> Tasks: </p>

      @foreach ( $employee -> tasks as $task)

          <a class = "color" href="{{ route('task-show', $task -> id) }}">

          {{$task -> title}}

          </a>

      @endforeach
   </div>
  </ul>


@endsection
