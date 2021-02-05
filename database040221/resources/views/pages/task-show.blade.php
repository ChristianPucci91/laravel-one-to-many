@extends('layouts.main-layout')

@section('content')

  <h1>Task:</h1>

  <ul>


      <li> Title: {{$tasks -> title}} </li>
      <li> Description: {{$tasks -> description}} </li>
      <li> Priority: {{$tasks -> priority}} </li>


  </ul>



@endsection
