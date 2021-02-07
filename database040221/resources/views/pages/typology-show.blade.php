@extends('layouts.main-layout')

@section('content')

  <h1>Typology:</h1>

  <ul>
    <div class="box">

      <li> name: {{$typology -> name}} </li>
      <li> Description: {{$typology -> description}} </li>

      <p>Tasks:</p>

      @foreach ($typology -> tasks as $task)

        {{$task -> title}}

      @endforeach

   </div>
  </ul>

@endsection
