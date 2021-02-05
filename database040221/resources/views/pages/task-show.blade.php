@extends('layouts.main-layout')

@section('content')

  <h1>Task:</h1>

  <ul>


      <li> Title: {{$task -> title}} </li>
      <li> Description: {{$task -> description}} </li>
      <li> Priority: {{$task -> priority}} </li>


  </ul>

@endsection
