@extends('layouts.main-layout')

@section('content')

  <h1>Tasks:</h1>

  <a href="{{ route('task-create')}}">CREATE NEW TASK</a>

  @foreach ($tasks as $task)

    <li>
       {{ $task -> title}}
       ({{ $task -> employee -> name}})
    </li>

  @endforeach

@endsection
