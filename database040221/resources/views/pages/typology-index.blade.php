@extends('layouts.main-layout')

@section('content')

  <h1>Typologies:</h1>


  @foreach ($typologies as $typology)

    <li>
      <a href="{{ route('typology-show', $typology -> id )}}">

        {{ $typology -> name }}
        {{ $typology -> description }}

     </a>
    </li>

  @endforeach

@endsection
