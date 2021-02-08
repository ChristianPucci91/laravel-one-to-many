@extends('layouts.main-layout')

@section('content')

  <h1>Typologies:</h1>

  <h3>
   <a href="{{ route('typology-create')}}">Create new typology</a>
  </h3>

  @foreach ($typologies as $typology)

    <ul>
      <div class="box">

         Name:
        <a class="color" href="{{ route('typology-show', $typology -> id )}}">

          {{ $typology -> name }}

        </a>
        <p> Description: {{ $typology -> description }}</p>

        <br>

        <p> <a href="{{ route('typology-edit', $typology -> id) }}">EDIT</a>  </p>

     </div>
   </ul>

  @endforeach

@endsection
