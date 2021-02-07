@extends('layouts.main-layout')

@section('content')

  <h1>Employee's tasks:</h1>

  <ul>

    @foreach ( $employee -> tasks as $task)

      <div class = "box">
        <a class = "color" href="{{ route('task-show', $task -> id) }}">

        {{$task -> title}}

        </a>

      </div>

    @endforeach

  </ul>


@endsection
