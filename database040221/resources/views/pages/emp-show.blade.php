@extends('layouts.main-layout')

@section('content')

  <h1>Employee:</h1>

  <ul>

    @foreach ( $employee -> tasks as $task)

      <li>
        <a href="{{ route('task-show', $task -> id) }}">

        {{$task -> title}}

        </a>

      </li>

    @endforeach

  </ul>

@endsection
