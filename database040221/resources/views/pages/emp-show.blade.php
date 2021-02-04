@extends('layouts.main-layout')

@section('content')

  <h1>Employee:</h1>

  <ul>

    @foreach ( $employee -> tasks as $task)

      <li>

        {{$task -> title}}

      </li>

    @endforeach

  </ul>

@endsection
