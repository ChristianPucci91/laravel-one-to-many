@extends('layouts.main-layout')

@section('content')

  <h1>Employees:</h1>

  <a href="{{ route('emp-create')}}">Create new Emp</a>

  <ul>
    @foreach ($employees as $employee)

        <div class = "box">
          <p>Employee name:</p>
          <a href="{{ route('emp-show', $employee -> id )}}">

            {{ $employee -> name }}

          </a>

          <ol>
            <p>Tasks:</p>
            @foreach ($employee -> tasks as $task)

              <li> {{ $task -> title}}</li>

            @endforeach
          </ol>
       </div>

    @endforeach
  </ul>

@endsection
