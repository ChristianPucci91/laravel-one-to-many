@extends('layouts.main-layout')

@section('content')

  <h1>Typologies:</h1>

  <h3>
   <a href="{{ route('typology-create')}}">Create new typology</a>
  </h3>

  @foreach ($typologies as $typology)

    <ul>
      <div class="box">

        <a class="color" href="{{ route('typology-show', $typology -> id )}}">

          {{ $typology -> name }}
          {{ $typology -> description }}

        </a>

     </div>
   </ul>

  @endforeach

@endsection
