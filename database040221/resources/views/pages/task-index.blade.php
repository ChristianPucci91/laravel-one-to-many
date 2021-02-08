@extends('layouts.main-layout')

@section('content')

  <h1>Tasks:</h1>

  <h3>
   <a href="{{ route('task-create')}}">Create new Task</a>
  </h3>

  @foreach ($tasks as $task)

   <ul>
      <div class = "box">
        <a href="{{ route('task-show', $task -> id )}}">{{ $task -> title}}</a>

        ({{ $task -> employee -> name}})

        <p>Typologies:</p>
        @foreach ($task -> typologies as $typology)

        <li>  {{ $typology -> name}} </li>



        @endforeach
          <br><br>
        <a href="{{ route('task-edit', $task -> id )}}">EDIT</a>

      </div>
   </ul>
  @endforeach

@endsection
