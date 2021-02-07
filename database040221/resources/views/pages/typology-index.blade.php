@extends('layouts.main-layout')

@section('content')

  <h1>Typologies:</h1>

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
