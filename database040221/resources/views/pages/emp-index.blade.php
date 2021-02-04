@extends('layouts.main-layout')

@section('content')

  <h1>Employees:</h1>

  <ul>
    @foreach ($employees as $employee)

      <li>

        {{ $employee -> name }}

        <ol>
          @foreach ($employee -> tasks as $tasks)

            <li> {{ $tasks -> title}}</li>

          @endforeach
        </ol>

      </li>

    @endforeach
  </ul>

@endsection
