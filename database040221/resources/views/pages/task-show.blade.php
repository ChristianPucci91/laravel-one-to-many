@extends('layouts.main-layout')

@section('content')

  <h1>Task's details:</h1>

  <ul>

   <div class = "box">
      <li> Title: {{$tasks -> title}} </li>
      <li> Description: {{$tasks -> description}} </li>
      <li> Priority: {{$tasks -> priority}} </li>
  </div>

  </ul>



@endsection
