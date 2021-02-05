@extends('layouts.main-layout')

@section('content')

  <h1>Typology:</h1>

  <ul>

      <li> name: {{$typology -> name}} </li>
      <li> Description: {{$typology -> description}} </li>

      <h2>Tasks:</h2>

      @foreach ($typology -> tasks as $task)

        {{$task -> title}}

      @endforeach

  </ul>

@endsection
