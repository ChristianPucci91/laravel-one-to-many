@extends('layouts.main-layout')

@section('content')

  <h1>Typologies:</h1>


  @foreach ($typologies as $typology)

    <li>

      {{ $typology -> name }}
      {{ $typology -> description }}

    </li>

  @endforeach

@endsection
