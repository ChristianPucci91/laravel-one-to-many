@extends('layouts.main-layout')

@section('content')

  <h1>Employees:</h1>

  <ul>
    @foreach ($employees as $employee)

      <li>

        <a href="{{ route('emp-show', $employee -> id )}}">

         {{ $employee -> name }}

        </a>

        <ol>
          @foreach ($employee -> tasks as $task)

            <li> {{ $task -> title}}</li>

          @endforeach
        </ol>

      </li>

    @endforeach
  </ul>

@endsection
