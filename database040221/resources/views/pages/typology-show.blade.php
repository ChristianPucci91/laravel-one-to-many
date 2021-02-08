@extends('layouts.main-layout')

@section('content')

  <h1>Typology:</h1>

  <ul>
    <div class="box">

      <li> name: {{$typology -> name}} </li>
      <li> Description: {{$typology -> description}} </li>

      <p>Tasks:</p>

      <ol>

        @foreach ($typology -> tasks as $task)

          <li>  {{$task -> title}}</li>

        @endforeach
        
      </ol>
   </div>
  </ul>

@endsection
